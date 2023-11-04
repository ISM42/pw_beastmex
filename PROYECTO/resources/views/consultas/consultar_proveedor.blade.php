@extends('layouts.plantilla')

@section('contenido')

@include('partials.navbar_compras')
<p></p>

        <title>CONSULTAR PROVEEDOR</title>

        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    <h1>CONSULTAR PROVEEDOR</h1>

    <table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>Producto</th>
      <th>Conatcto</th>
      <th>Empresa</th>
      <th>No. telefono</th>
      
    </tr>
  </thead>

  <tbody>
    <tr>
      <th></th>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <th></th>
      <td></td>
      <td></td>
      <td>
      <a href="/"><button type="button"> Editar</button></a>
    <a href="/"><button type="button"> Eliminar </button></a>
      </td>
    </tr>

  </tbody>

</table>

@endsection('contenido')