@extends('layouts.plantilla')

@section('contenido')

@include('partials.navbar_compras')
<p></p>
    <title>CONSULTAR ORDEN DE COMPRA</title>

    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>




<div class="container mt-5">
  <h1>Consultar Orden de Compra</h1>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nombre de la orden</th>
        <th>Empresa</th>
        <th>Productos requeridos</th>
        <th>Proveedor</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <!-- Aquí debes ingresar tus datos dinámicamente desde la base de datos -->
      <tr>
        <td>1</td>
        <td>Orden 1</td>
        <td>Empresa A</td>
        <td>Producto X, Producto Y, Producto Z</td>
        <td>Proveedor 1</td>
        <td>
          <button class="btn btn-primary btn-sm">Editar</button>
          <button class="btn btn-danger btn-sm">Eliminar</button>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Orden 2</td>
        <td>Empresa B</td>
        <td>Producto A, Producto B</td>
        <td>Proveedor 2</td>
        <td>
          <button class="btn btn-primary btn-sm">Editar</button>
          <button class="btn btn-danger btn-sm">Eliminar</button>
        </td>
      </tr>
      <!-- Agrega más filas según sea necesario -->
    </tbody>
  </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
    
@endsection('contenido')



