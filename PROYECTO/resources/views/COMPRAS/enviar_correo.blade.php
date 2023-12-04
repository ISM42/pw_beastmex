@extends('layouts.plantilla')

@section('contenido')

@include('partials.navbar_compras')

<div class="container mt-5">
    <h1>Enviar Correo </h1>
    
    <form action="/enviar_correo" method="post">
        @csrf
        <div class="mb-3">
            <label for="destinatario" class="form-label">Destinatario</label>
            <input type="email" class="form-control" id="destinatario" name="destinatario" required>
        </div>
        <div class="mb-3">
            <label for="asunto" class="form-label">Asunto</label>
            <input type="text" class="form-control" id="asunto" name="asunto" required>
        </div>
        <div class="mb-3">
            <label for="mensaje" class="form-label">Mensaje</label>
            <textarea class="form-control" id="mensaje" name="mensaje" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar Correo</button>
    </form>
</div>

@endsection('contenido')