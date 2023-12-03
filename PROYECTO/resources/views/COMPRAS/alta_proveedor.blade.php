@extends('layouts.plantilla') @section('contenido') 
@include('partials.navbar_compras')
@section('title','REGISTRAR PROVEEDOR')

<title>REGISTRAR PROVEEDOR</title>

<h1>REGISTRAR PROVEEDOR</h1>

<p></p>
<p></p>
@section('contenido')
<div class="container">
<form method= "POST" action="/guardarAltaProveedor">
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
                    <h1 class="h3 mb-3 fw-normal">REGISTRAR PROVEEDOR</h1>
                </div>


                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingPassword" placeholder="Password"  name="_empresa" value="{{old('_empresa')}}"/>
                    <p class="text-danger fst-italic">{{$errors->first('_empresa')}} </p>
                    <label for="floatingPassword">Empresa</label>
                </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="_producto" value="{{old('_producto')}}"/>
                        <p class="text-danger fst-italic">{{$errors->first('_producto')}} </p>
                        <label for="floatingInput">Producto</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="_Ncontacto" value="{{old('_Ncontacto')}}"/>
                        <p class="text-danger fst-italic">{{$errors->first('_Ncontacto')}} </p>
                        <label for="floatingInput"> Nombre del Contacto</label>
                    </div>

                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="_CEcontacto" value="{{old('_CEcontacto')}}"/>
                        <p class="text-danger fst-italic">{{$errors->first('_CEcontacto')}} </p>
                        <label for="floatingInput">Correo electrónico</label>
                    </div>

                    <div class="form-floating">
                        <input type="tel" class="form-control" id="floatingPassword" placeholder="Password" name="_TelContacto" value="{{old('_TelContacto')}}"/>
                        <p class="text-danger fst-italic">{{$errors->first('_producto')}} </p>
                        <label for="floatingPassword">NO. Telefónico</label>
                    </div>

                    <p> </p> 
                    <button class="btn btn-primary w-100 py-2" type="submit">Guardar</button>
                    <p></p>
                    <button class="btn btn-primary w-100 py-2" type="submit" href="/"> Cancelar</button>
                    <p class="mt-5 mb-3 text-body-secondary">&copy; 2023–2023</p>
                </form>
            </div>
        </div>
    </main>
</body>
@endsection
