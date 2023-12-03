@extends('layouts.plantilla')

@section('contenido')

@include('partials.navbar_compras')
<p></p>
    <title>CONSULTAR ORDENES DE COMPRA</title>

    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>




<div class="container mt-5">
  <h1>Consultar órdenes de compra</h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Producto</th>
        <th>Proveedor</th>
        <th>Cantidad </th>
        <th>Fecha de compra</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <!-- Aquí debes ingresar tus datos dinámicamente desde la base de datos -->
      <tr>
        
         
      @foreach($consulOC as $item)
    <tr>
        <td>{{ $item->id }}</td>
        <td>{{ $item->nombre_producto }}</td>
        <td>{{ $item->nombre_empresa }}</td>
        <td>{{ $item->cantidad }}</td>
        <td>{{ $item->fecha_compra }}</td>
        <td>
            <button class="btn btn-primary btn-sm">Editar</button>
            <button class="btn btn-danger btn-sm">Eliminar</button>
        </td>
    </tr>
@endforeach
      </tr>
      <!-- Agrega más filas según sea necesario -->
    </tbody>
  </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
    
@endsection('contenido')



