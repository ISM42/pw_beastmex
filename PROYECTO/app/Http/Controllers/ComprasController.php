<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorAltaProveedor;

use DB;
use Carbon\carbon;

class ComprasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $buscarpor = $request->get('buscarpor');
        $consulProveedor = []; 
    
        if ($buscarpor) {
            
            $consulProveedor = DB::table('proveedores')
                ->where(function ($query) use ($buscarpor) {
                    $query->where('nombre_empresa', 'like', '%' . $buscarpor . '%')
                          ->orWhere('nombre_contacto', 'like', '%' . $buscarpor . '%');
                })
                ->get();
        } else {
            $consulProveedor = DB::table('proveedores')->get();
        }
    
        return view('compras.consultar_proveedor', compact('consulProveedor', 'buscarpor'));
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
    public function store(ValidadorAltaProveedor $request)
    {
       
        DB::table('proveedores')->insert([
            "nombre_empresa"=>$request->input('_nempresa'),
            "nombre_contacto"=>$request->input('_ncontacto'),
            "ap_contacto"=>$request->input('_apcontacto'),
            "am_contacto"=>$request->input('_amcontacto'),
            "email_contacto"=>$request->input('_emailcontacto'),
            "tel_contacto"=>$request->input('_telcontacto'),
            
            "created_at"=>Carbon::now(),
            "updated_at"=>Carbon::now(),
        ]);
            return redirect('proveedor/consulta')->with('confirmacion', 'Registro exitoso');
    
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
        DB::table('proveedores')->where('id',$id)->update([
            "nombre_empresa"=>$request->input('_nempresa'),
            "nombre_contacto"=>$request->input('_ncontacto'),
            "ap_contacto"=>$request->input('_apcontacto'),
            "am_contacto"=>$request->input('_amcontacto'),
            "email_contacto"=>$request->input('_emailcontacto'),
            "tel_contacto"=>$request->input('_telcontacto'),
            

        ]);
        
        return redirect('/proveedor/consulta')->with('confirmacion','Actualización exitosa');
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
