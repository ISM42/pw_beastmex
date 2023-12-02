
@extends('layouts.plantilla')

@section('contenido')
@section('titulo', 'REGISTRAR ORDEN DE COMPRA')
@include('partials.navbar_compras')


        <title>REGISTRAR ORDEN DE COMPRA</title>

        <h1> REGISTRAR ORDEN DE COMPRA </h1>
        
    <p></p>
    <p></p>
    @section('contenido')
    <div class="container">
        <form method= "POST" action="/occompras">
        @csrf

@if(session()->has ('confirmacion'))
<script>   Swal.fire('Información "{{session('confirmacion')}}" guardada')</script>
@endif

@if($errors->any())
@foreach($errors->all() as $error)

@endforeach
@endif
<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <form class="form-signin">
                    <div style="text-align:center;">
                    <img class="mb-4" src="https://w7.pngwing.com/pngs/106/157/png-transparent-export-import-product-marketing-e-commerce-eagle-on-a-globe-furniture-globe-text.png" alt="" width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal">REGISTRAR ORDEN DE COMPRA</h1>
                </div>

                    <!-- Selector de producto -->
    <div class="form-group">
        <label for="_idprod">Seleccionar Producto</label>
        <select class="form-control" name="_idprod">
            @foreach($productos as $producto)
                <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
            @endforeach
        </select>
    </div>


                    <div class="form-floating">
                        <input type="number" class="form-control" name="_cantidad" value="{{old('_cantidad')}}"/>
                        <p class="text-danger fst-italic">{{$errors->first('_cantidad')}} </p>
                        <label for="floatingPassword">Cantidad</label>
                    </div>

                         <!-- Selector de proveedor -->
<div class="form-group">
    <label for="_idprov">Seleccionar Proveedor</label>
    <select class="form-control" name="_idprov">
        @foreach($proveedores as $proveedor)
            <option value="{{ $proveedor->id }}">{{ $proveedor->nombre_empresa }}</option>
        @endforeach
    </select>
</div>

                    

                    <p></p>
                    <button class="btn btn-primary w-100 py-2" type="submit">Generar oden de compra</button>
                    <p></p>
                    <a href="/"><button class="btn btn-primary w-100 py-2" type="submit">Cancelar</button></a>
                    <p class="mt-5 mb-3 text-body-secondary">&copy; 2023–2023</p>
                </form>
            </div>
        </div>
    </main>
</body>
    @endsection