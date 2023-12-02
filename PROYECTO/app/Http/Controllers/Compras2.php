<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorRegistrarOC;

use DB;
use Carbon\carbon;

class Compras2 extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $consulProveedor = [];
    
        if ($buscarpor) {
            $consulOC = DB::table('compras')
                ->where(function ($query) use ($buscarpor) {
                    $query->where('id', 'like', '%' . $buscarpor . '%');
                })
                ->get();
        } else {
            $consulOC = DB::table('compras')
    ->select(
        'compras.id',
        'productos.nombre as nombre_producto',
        'proveedores.nombre_empresa',
        'compras.cantidad',
        'compras.fecha_compra'
    )
    ->join('productos', 'compras.id_producto', '=', 'productos.id')
    ->join('proveedores', 'compras.id_proveedor', '=', 'proveedores.id')
    ->where('compras.id', 'like', '%' . $buscarpor . '%')
    ->get();
    
        return view('compras.consultar_orden_compra', compact('consulOC', 'buscarpor'));
    }
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
{
    $productos = DB::table('productos')->get();
    $proveedores = DB::table('proveedores')->get();
    return view('compras.registrar_orden_compra', compact('productos','proveedores'));
}


    /**
     * Store a newly created resource in storage.
     */
    public function store(ValidadorRegistrarOC $request)
    {
       
        DB::table('compras')->insert([
            "id_producto"=>$request->input('_idprod'),
            "id_proveedor"=>$request->input('_idprov'),
            "cantidad"=>$request->input('_cantidad'),
            "fecha_compra"=> Carbon::now(),
           
            
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
            return redirect('/ordenesCompras/consulta')->with('confirmacion', 'Registro exitoso');
    
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
