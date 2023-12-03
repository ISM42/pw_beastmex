@extends('layouts.plantilla') @section('contenido')
@include('partials.navbar_almacen')
@section('titulo', 'REGISTRAR PRODUCTO')

<title>REGISTRAR PRODUCTO</title>

<h1>REGISTRAR PRODUCTO</h1>

<p></p>
<p></p>
@section('contenido')
<div class="container">
<form method= "POST" action="{{ route('producto.store') }}" enctype="multipart/form-data">
@csrf

@if(session()->has ('confirmacion'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{session('confirmacion')}} </strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif


@if($errors->any())
@foreach($errors->all() as $error)
@endforeach
@endif

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
              
                    <div style="text-align:center;">
                    <img class="mb-4" src="https://w7.pngwing.com/pngs/106/157/png-transparent-export-import-product-marketing-e-commerce-eagle-on-a-globe-furniture-globe-text.png" alt="" width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal">REGISTRAR PRODUCTO</h1>
                </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="" name="_nproducto" value="{{old('_nproducto')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_nproducto')}} </p>
                        <label>Nombre producto</label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" id="" name="_nserie" value="{{old('_nserie')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_nserie')}} </p>
                        <label>NO. Serie</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id=""  name="_marca" value="{{old('_marca')}}" >
                        <p class="text-danger fst-italic">{{$errors->first('_marca')}} </p>
                        <label>Marca</label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" id="" name="_cantidad" value="{{old('_cantidad')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_cantidad')}} </p>
                        <label>Cantidad</label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" id="" name="_costoCompra" value="{{old('_costoCompra')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_costoCompra')}} </p>
                        <label>Costo compra</label>
                    </div>

                    <div class="form-floating">
                        <input type="file" class="form-control" id="" name="_foto" value="{{old('_foto')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_foto')}} </p>
                        <label> Imagen del producto </label>
                    </div>
                    

                    <p></p>
                    <button class="btn btn-primary w-100 py-2" type="submit">Guardar</button>
                    <p></p>
                    <button class="btn btn-warning w-100 py-2" type="button">Cancelar</button>
                    <p class="mt-5 mb-3 text-body-secondary">&copy; 2023–2023</p>
                </form>
            </div>
        </div>
    </main>
</body>


@endsection('contenido')
