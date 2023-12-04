<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorVentas2;

use DB;
use Carbon\carbon;

class ventas2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $consulVentas = []; 
    
        if ($buscarpor) {
            $consulVentas = DB::table('ventas')
                ->where(function ($query) use ($buscarpor) {
                    $query->where('nombre', 'like', '%' . $buscarpor . '%')
                          ->orWhere('apellido_p', 'like', '%' . $buscarpor . '%');
                })
                ->get();
        } else {
            $consulVentas = DB::table('ventas')->get();
        }
    
        return view('ventas.consultar_tickets_venta', compact('consulVentas', 'buscarpor'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productos = DB::table('productos')->get();
        $clientes = DB::table('clientes')->get();
        return view('ventas.registrar_venta', compact('productos','clientes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $consulVentas = DB::table('ventas')
    ->join('productos', 'ventas.id_producto', '=', 'productos.id')
    ->join('clientes', 'ventas.id_cliente', '=', 'clientes.id')
    ->select('ventas.*', 'productos.nombre as nombre_producto', 'clientes.nombre as nombre_cliente')
    ->get();

        $producto = DB::table('productos')->where('id', $request->input('producto'))->first();
        $cliente = DB::table('clientes')->where('id', $request->input('cliente'))->first();
    
        if ($producto && $cliente) {
            $precioUnitario = $producto->costo_compra;
            $precioVenta = $precioUnitario * 1.55; // Calculando el precio de venta con un 55% de aumento
    
            $totalVenta = $request->input('cantidad') * $precioVenta;
    
            DB::table('ventas')->insert([
                'id_producto' => $request->input('producto'),
                'id_cliente' => $request->input('cliente'),
                'cantidad_vendida' => $request->input('cantidad'),
                'precio_unitario' => $precioVenta,
                'total_venta' => $totalVenta,
                'fecha_venta' => $request->input('fecha'),
            ]);
    
            return redirect()->route('ventas.index')->with('success', 'Venta registrada correctamente.');
        }
    
        return back()->with('error', 'Error al registrar la venta. Producto o cliente no encontrados.');
    }


    public function obtenerPrecioProducto($id)
    {
        $costoCompra = DB::table('productos')->where('id', $id)->value('costo_compra');
        $precioVenta = $costoCompra * 1.55; // Sumar un 55% al costo de compra
    
        return response()->json(['_pu' => $precioVenta]);
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function calcularGananciasVenta()
{
    $gananciasVentas = DB::table('ventas')
        ->join('productos', 'ventas.id_producto', '=', 'productos.id')
        ->join('clientes', 'ventas.id_cliente', '=', 'clientes.id')
        ->select(
            'ventas.id',
            'productos.nombre as nombre_producto',
            'clientes.nombre as nombre_cliente',
            'ventas.cantidad_vendida',
            'productos.costo_compra',
            'ventas.precio_unitario',
            DB::raw('(ventas.precio_unitario - productos.costo_compra) * ventas.cantidad_vendida AS ganancia')
        )
        ->get();

    return view('ventas.ganancias_por_venta', compact('gananciasVentas'));
}

public function calcularGananciasPorMes(Request $request)
{
    $fecha = Carbon::parse($request->input('fecha'));
    $mes = $fecha->month;
    $anio = $fecha->year;

    $gananciasPorMes = DB::table('ventas')
        ->select(DB::raw('MONTH(fecha_venta) as mes, SUM(total_venta) as ganancia'))
        ->whereMonth('fecha_venta', $mes)
        ->whereYear('fecha_venta', $anio)
        ->groupBy(DB::raw('MONTH(fecha_venta)'))
        ->get();

    $resultado = [];
    foreach ($gananciasPorMes as $ganancia) {
        $nombreMes = Carbon::createFromDate(null, $ganancia->mes)->monthName;
        $resultado[$nombreMes] = $ganancia->ganancia;
    }

    return view('ventas.ganancias_por_mes', ['gananciasPorMes' => $resultado]);
}

public function calcularGananciasTodas()
{
    $ganancias = DB::table('ventas')
        ->join('productos', 'ventas.id_producto', '=', 'productos.id')
        ->selectRaw('SUM((ventas.cantidad_vendida * productos.precio_venta) - (ventas.cantidad_vendida * productos.costo_compra)) as total_ganancias')
        ->first();

    return view('ventas.ganancias_totales', compact('ganancias'));
}
}
