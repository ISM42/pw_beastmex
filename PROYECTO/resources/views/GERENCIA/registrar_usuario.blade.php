@extends('layouts.plantilla') @section('contenido')
@include('partials.navbar_almacen')
@section('titulo', 'REGISTRAR USUARIO')	
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<title>REGISTRAR USUARIO</title>

<h1>REGISTRAR USUARIO</h1>

<p></p>
<p></p>
@section('contenido')
<div class="container">
<form method= "POST" action="/guardarRegUsuario">
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
                    <h1 class="h3 mb-3 fw-normal">REGISTRAR USUARIO</h1>
                </div>

                    <div class="form-floating">
                        <input type="" class="form-control" id="floatingPassword" name="_nusuario" value="{{old('_nusuario')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_nusuario')}} </p>
                        <label for="floatingPassword">Nombre usuario</label>
                    </div>

                    <div class="form-floating">
                        <input type="" class="form-control" id="floatingPassword" name="_ap" value="{{old('_ap')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_ap')}} </p>
                        <label for="floatingPassword">Apellido paterno</label>
                    </div>

                    <div class="form-floating">
                        <input type="" class="form-control" id="floatingPassword" name="_am" value="{{old('_am')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_am')}} </p>
                        <label for="floatingPassword">Apellido materno</label>
                    </div>

                    <div class="form-floating">
                        <input type="" class="form-control" id="floatingInput" name="_email" value="{{old('_email')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_email')}} </p>
                        <label for="floatingPassword">Email</label>
                    </div>

                    <div class="form-floating">
                        <input type="" class="form-control" id="floatingPassword"  name="_puesto" value="{{old('_puesto')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_puesto')}} </p>
                        <label for="floatingPassword">Puesto</label>
                    </div>

                    <div class="form-floating">
                        <input type="" class="form-control" id="email" name="_password" value="{{old('_password')}}">
                        <p class="text-danger fst-italic">{{$errors->first('_password')}} </p>
                        <label for="floatingPassword">Contraseña</label>
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
