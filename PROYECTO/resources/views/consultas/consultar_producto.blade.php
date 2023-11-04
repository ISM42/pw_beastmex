@extends('layouts.plantilla')

@section('contenido')

@include('partials.navbar_ventas')
<p></p>
        <title>CONSULTAR PRODUCTO</title>

        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>


    <h1>CONSULTAR PRODUCTO</h1>

    <table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>Nombre</th>
      <th>No. Serie</th>
      <th>Marca</th>
      <th>Cantidad</th>
      <th>Costo compra</th>
      <th>Precio de venta</th>
      <th>Fecha de ingreso</th>
      <th>Foto</th>

      
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