@extends('layouts.plantilla')

@section('contenido')

@include('partials.navbar_compras')
<p></p>

    <title>CONSULTAR ORDEN DE COMPRA</title>

    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

<h1>CONSULTAR ORDEN DE COMPRA</h1>


<table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>Nombre de la orden</th>
      <th>Empresa</th>
      <th>Productos requeridos</th>
      <th>Proveedor</th>
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



