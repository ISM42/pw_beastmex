<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorRegistrarProducto;
use App\Imagen;

use DB;
use Carbon\carbon;

class AlmacenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consulProducto = DB::table('productos')->get();
        return view('almacen.consultar_producto',compact('consulProducto'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(('almacen.registrar_producto'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ValidadorRegistrarProducto $request)
{
    $datosProducto = [
        "nombre" => $request->input('_nproducto'),
        "num_serie" => $request->input('_nserie'),
        "marca" => $request->input('_marca'),
        "cantidad" => $request->input('_cantidad'),
        "costo_compra" => $request->input('_costoCompra'),
        "fecha_ingreso" => Carbon::now(),
    ];

    if ($request->hasFile('imagen')) {
        $imagen = $request->file('imagen');
        $nombre_imagen = time() . '_' . $imagen->getClientOriginalName();
        $ruta = $imagen->storeAs('imagenes', $nombre_imagen, 'public'); 
        $datosProducto['foto'] = $ruta; // Añade la ruta de la imagen al array de datos
    }

    DB::table('productos')->insert(array_merge(
        $datosProducto,
        [
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]
    ));

    return redirect('/producto/create')->with('confirmacion', 'Tu producto ha sido registrado correctamente');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $producto = productos::find($id);

        return view('consultar_producto.show', compact('producto'));
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
        DB::table('productos')->where('id',$id)->update([
            "nombre"=>$request->input('_nproducto'),
            "num_serie"=>$request->input('_nserie'),
            "marca"=>$request->input('_marca'),
            "cantidad"=>$request->input('_cantidad'),
            "costo_compra"=>$request->input('_costoCompra'),
            "updated_at"=>Carbon::now(),

        ]);
        return redirect('/producto/create')->with('confirmacion','tu recuerdo llegó al controlador');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
