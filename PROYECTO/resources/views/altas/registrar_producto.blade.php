@extends('layouts.plantilla') @section('contenido')
@include('partials.navbar_almacen')
@section('titulo', 'REGISTRAR PRODUCTO')

<title>REGISTRAR PRODUCTO</title>

<h1>REGISTRAR PRODUCTO</h1>

<p></p>
<p></p>
@section('contenido')
<div class="container">
<form method= "POST" action="/guardarRegProd">
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
                    <h1 class="h3 mb-3 fw-normal">REGISTRAR PRODUCTO</h1>
                </div>

                    <div class="form-floating">
                        <input type="" class="form-control" id="floatingPassword" name="_nproducto" value="{{old('_nproducto')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_nproducto')}} </p>
                        <label for="floatingPassword">Nombre producto</label>
                    </div>

                    <div class="form-floating">
                        <input type="" class="form-control" id="floatingPassword" name="_nserie" value="{{old('_nserie')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_nserie')}} </p>
                        <label for="floatingPassword">NO. Serie</label>
                    </div>

                    <div class="form-floating">
                        <input type="" class="form-control" id="floatingPassword"  name="_marca" value="{{old('_marca')}}" >
                        <p class="text-danger fst-italic">{{$errors->first('_marca')}} </p>
                        <label for="floatingPassword">Marca</label>
                    </div>

                    <div class="form-floating">
                        <input type="" class="form-control" id="floatingPassword" name="_cantidad" value="{{old('_cantidad')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_cantidad')}} </p>
                        <label for="floatingPassword">Cantidad</label>
                    </div>

                    <div class="form-floating">
                        <input type="" class="form-control" id="email" name="_costoCompra" value="{{old('_costoCompra')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_costoCompra')}} </p>
                        <label for="floatingPassword">Costo compra</label>
                    </div>

                    <div class="form-floating">
                        <input type="" class="form-control" id="email" name="_precioventa" value="{{old('_precioventa')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_precioventa')}} </p>
                        <label for="floatingPassword">Precio de venta</label>
                </div>

                    <div class="form-floating">
                    <input type="" class="form-control" id="dateInput"  name="_fecha" value="{{old('_fecha')}}">
                    <p class="text-danger fst-italic">{{$errors->first('_fecha')}} </p>
                    <label for="dateInput">Fecha de ingreso </label>
                </div>

                <div class="form-floating">
                    <input type="" class="form-control" id="email"  name="_foto" value="{{old('_foto')}}">
                    <p class="text-danger fst-italic">{{$errors->first('_foto')}} </p>
                    <label for="floatingPassword">Foto producto</label>
                </div>

                    <p></p>
                    <button class="btn btn-primary w-100 py-2" type="submit">Guardar</button>
                    <p></p>
                    <button class="btn btn-primary w-100 py-2" type="submit">Cancelar</button>
                    <p class="mt-5 mb-3 text-body-secondary">&copy; 2023–2023</p>
                </form>
            </div>
        </div>
    </main>
</body>


@endsection('contenido')
