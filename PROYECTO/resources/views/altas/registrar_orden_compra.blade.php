
@extends('layouts.plantilla')

@section('contenido')

@include('partials.navbar_compras')

        <title>REGISTRAR ORDEN DE COMPRA</title>

        <h1> REGISTRAR ORDEN DE COMPRA </h1>
        
    <p></p>
    <p></p>

    <div class="container">
        <div class="card">
  <div class="card-body">

      <label class="form-label">Nombre de la orden:</label>
      <input type="text" class="form-control" required/>
    
    <p></p>
    <p></p>
      
    
        <label class="form-label">Empresa</label>
        <input type="text" class="form-control" required/>
      
    <p></p>
    <p></p>

        <label class="form-label">Productos requeridos</label>
        <input type="number" class="form-control" required/>
     
    <p></p>
    <p></p>
      
        <label class="form-label">Proveedor</label>
        <input type="text" class="form-control" required/>
      
    <p></p>
    <p></p>

        <input type="text" class="form-control" required/> Enviar por email</input>
      
    <p></p>
    <p></p>
      

    <a href="/"><button type="button"> Generar oden de compra</button></a>
    <a href="/"><button type="button"> Cancelar </button></a>
      
    <p></p>
    <p></p>
   
  </div>
</div>
</div>
    @endsection('contenido')