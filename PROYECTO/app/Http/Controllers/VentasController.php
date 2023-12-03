<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorRegistrarVenta;

use DB;
use Carbon\carbon;

class VentasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $consulCli = []; 

        if ($buscarpor) {

            $consulCli = DB::table('clientes')
                ->where(function ($query) use ($buscarpor) {
                    $query->where('nombre', 'like', '%' . $buscarpor . '%')
                          ->orWhere('apellido_p', 'like', '%' . $buscarpor . '%');
                })
                ->get();
        } else {
            $consulCli = DB::table('clientes')->get();
        }

        return view('ventas.consultar_clientes', compact('consulCli', 'buscarpor'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ValidadorRegistrarVenta $request)
    {

        DB::table('clientes')->insert([
            "nombre"=>$request->input('_nombrecliente'),
            "apellido_p"=>$request->input('_apcliente'),
            "apellido_m"=>$request->input('_amcliente'),
            "email"=>$request->input('_emailcliente'),
            "telefono"=>$request->input('_telcliente'),

            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
            return redirect('/clientes/consulta')->with('confirmacion', 'Registro exitoso');

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
