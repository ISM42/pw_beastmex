@extends('layouts.plantilla') @section('contenido')
@include('partials.navbar_compras')

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
    <div class="card">
            <div class="card-body">

            <div>
            <label class="form-label">Empresa:</label>
            <input type="text" class="form-control" name="_empresa" value="{{old('_empresa')}}"/>
            <p class="text-danger fst-italic">{{$errors->first('_empresa')}} </p>
            </div>
          
            <p></p>
            <p></p>
            <div>
            <label class="form-label">Producto:</label>
            <input type="text" class="form-control" name="_producto" value="{{old('_producto')}}"/>
            <p class="text-danger fst-italic">{{$errors->first('_producto')}} </p>
            </div>

            <p></p>
            <p></p>
            <div>
            <label class="form-label">Nombre del contacto:</label>
            <input type="text" class="form-control" name="_Ncontacto" value="{{old('_Ncontacto')}}"/>
            <p class="text-danger fst-italic">{{$errors->first('_Ncontacto')}} </p>
            </div>
            <p></p>
            <p></p>

            <div>
            <label class="form-label">Correo electrónico:</label>
            <input type="text" class="form-control" name="_CEcontacto" value="{{old('_CEcontacto')}}"/>
            <p class="text-danger fst-italic">{{$errors->first('_CEcontacto')}} </p>
            </div>
            <p></p>
            <p></p>
            <div>
            <label class="form-label">Teléfono:</label>
            <input type="text" class="form-control" name="_TelContacto" value="{{old('_TelContacto')}}"/>
            <p class="text-danger fst-italic">{{$errors->first('_producto')}} </p>
            </div>
            <p></p>
            <p></p>
           
                  
            <button type="submit">Guardar</button>
            <a href="/"><button type="button">Cancelar</button></a>

            <p></p>
            <p></p>
        </div>
    </div>
</div>
</form>
@endsection
