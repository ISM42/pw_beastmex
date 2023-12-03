@extends('layouts.plantilla')

@section('contenido')

@include('partials.navbar_compras')
<p></p>
    <title>CONSULTAR CLIENTES</title>
<br>
<br>
    
<div class="container mt-5">
  <h1>Consultar clientes</h1>

  <form class="d-flex" role="search">
        <input name="buscarpor" class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar" value="{{$buscarpor}}">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
    <br>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end" data-bs-toggle="modal" data-bs-target="#createCli">

  <button class="btn btn-primary" type="button">Nuevo registro</button>

</div>

  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido paterno</th>
        <th>Apellido materno </th>
        <th>Email</th>
        <th>Teléfono</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <!-- Aquí debes ingresar tus datos dinámicamente desde la base de datos -->
      <tr>
        
         
      @foreach($consulCli as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->nombre }}</td>
        <td>{{ $item->apellido_p }}</td>
        <td>{{ $item->apellido_m}}</td>
        <td>{{ $item->email }}</td>
        <td>{{ $item->telefono }}</td>
        <td>
            <button class="btn btn-warning btn-sm">Editar</button>
            <button class="btn btn-danger btn-sm">Eliminar</button>
        </td>
    </tr>
    @include('partials.modal_create_cliente')
@endforeach
      </tr>
      <!-- Agrega más filas según sea necesario -->
    </tbody>
  </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
    
@endsection('contenido')



