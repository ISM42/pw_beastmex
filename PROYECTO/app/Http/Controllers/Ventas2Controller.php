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
    public function store(ValidadorVentas2 $request)
    {
       
        $cantidadVendida = $request->input('_cv');
        $precioUnitario = $request->input('_pu');
        $totalVenta = $cantidadVendida * $precioUnitario;
    
        DB::table('ventas')->insert([
            "id_producto" => $request->input('_idproducto'),
            "id_cliente" => $request->input('_idcliente'),
            "cantidad_vendida" => $cantidadVendida,
            "precio_unitario" => $precioUnitario,
            "total_venta" => $totalVenta,
            "fecha_venta" => Carbon::now(),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),
                ]);
                    return redirect('')->with('confirmacion', 'Registro exitoso');
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
