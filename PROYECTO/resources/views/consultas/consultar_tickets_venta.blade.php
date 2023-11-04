@extends('layouts.plantilla')

@section('contenido')

@include('partials.navbar_ventas')
<p></p>
        <title>CONSULTAR TICKET DE VENTA</title>

        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    <h1>CONSULTAR TICKET DE VENTA</h1>

    <table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>Nombre ticket</th>
      <th>Fecha</th>
      <th>Nombre cliente</th>
      <th>Apellido paterno</th>
      <th>Apellido materno</th>
      <th>Producto</th>
      <th>Marca</th>
      <th>Cantidad</th>
      <th>Precio de venta</th>
      <th>Total compra</th>
      <th>Descargar</th>

      
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
      </td>
    </tr>

  </tbody>

</table>


@endsection('contenido')