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
                          ->orWhere('marca', 'like', '%' . $buscarpor . '%');
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

    public function __construct()
    {
        $this->middleware('auth');
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
}
