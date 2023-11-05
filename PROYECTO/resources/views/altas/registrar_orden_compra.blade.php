
@extends('layouts.plantilla')

@section('contenido')

@include('partials.navbar_compras')

        <title>REGISTRAR ORDEN DE COMPRA</title>

        <h1> REGISTRAR ORDEN DE COMPRA </h1>
        
    <p></p>
    <p></p>
    @section('contenido')
    <div class="container">
        <form method= "POST" action="/guardarRegOC">
        @csrf

@if(session()->has ('confirmacion'))
<script>   Swal.fire('Información "{{session('confirmacion')}}" guardada')</script>
@endif

@if($errors->any())
@foreach($errors->all() as $error)

@endforeach
@endif
        <div class="card">
  <div class="card-body">

  <div>
      <label class="form-label">Producto:</label>
      <input  class="form-control" name="_prod" value="{{old('_prod')}}"/>
            <p class="text-danger fst-italic">{{$errors->first('_prod')}} </p>
</div>
    
    <p></p>
    <p></p>
      
    <div>
        <label class="form-label">Cantidad</label>
        <input  class="form-control" name="_cant" value="{{old('_cant')}}"/>
            <p class="text-danger fst-italic">{{$errors->first('_cant')}} </p>
</div>
    <p></p>
    <p></p>

        <div>
        <label class="form-label">Proveedor</label>
        <input  class="form-control" name="_prov" value="{{old('_prov')}}"/>
            <p class="text-danger fst-italic">{{$errors->first('_prov')}} </p>
</div>
    <p></p>
    <p></p>


      

<button type="submit"> Generar oden de compra</button>
    <a href="/"><button type="button"> Cancelar </button></a>
      
    <p></p>
    <p></p>
   
  </div>
</div>
</div>
</form>
    @endsection