@extends('layouts.plantilla') @section('contenido')
@include('partials.navbar_gerencia')

<title>EDITAR USUARIO</title>

<h1>EDITAR USUARIO</h1>

<p></p>
<p></p>

<div class="container">
    <div class="card">
        <div class="card-body">
            <label class="form-label">Nombre usuario:</label>
            <input type="text" class="form-control" required />

            <p></p>
            <p></p>

            <label class="form-label">Apellido paterno</label>
            <input type="text" class="form-control" required />

            <p></p>
            <p></p>

            <label class="form-label">Apellido materno</label>
            <input type="text" class="form-control" required />

            <p></p>
            <p></p>

            <label class="form-label">Email</label>
            <input type="email" class="form-control" required />

            <p></p>
            <p></p>

            <label class="form-label">Puesto</label>
            <input type="text" class="form-control" required />

            <p></p>
            <p></p>

            <label class="form-label">Contraseña</label>
            <input type="password" class="form-control" required />

            <p></p>
            <p></p>

            <a href="/"><button type="button">Guardar</button></a>
            <a href="/"><button type="button">Cancelar</button></a>

            <p></p>
            <p></p>
        </div>
    </div>
</div>
@endsection('contenido')
