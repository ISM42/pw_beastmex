@extends('layouts.plantilla') @section('contenido')
@include('partials.navbar_almacen')

<title>REGISTRAR PROVEEDOR</title>

<h1>REGISTRAR PROVEEDOR</h1>

<p></p>
<p></p>

<div class="container">
    <div class="card">
        <div class="card-body">
            <label class="form-label">Producto:</label>
            <input type="text" class="form-control" required />

            <p></p>
            <p></p>

            <label class="form-label">Contacto:</label>
            <input type="text" class="form-control" required />

            <p></p>
            <p></p>

            <label class="form-label">Empresa:</label>
            <input type="text" class="form-control" required />

            <p></p>
            <p></p>

            <label class="form-label">NO. Telefónico:</label>
            <input type="number" class="form-control" required />

            <p></p>
            <p></p>

            <a href="/"><button type="button">Editar</button></a>
            <a href="/"><button type="button">Cancelar</button></a>

            <p></p>
            <p></p>
        </div>
    </div>
</div>
@endsection('contenido')
