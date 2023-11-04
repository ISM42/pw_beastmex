@extends('layouts.plantilla')

@section('contenido')

@include('partials.navbar_gerencia')
<p></p>
        <title>CONSULTAR USUARIO</title>

        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>


    <h1>CONSULTAR USUARIO</h1>

    <table class="table">
  <thead>
    <tr>
      <th>id</th>
      <th>Nombre usuario</th>
      <th>Apellido paterno</th>
      <th>Apellido materno</th>
      <th>Email</th>
      <th>Puesto</th>
      <th>Comtraseña</th>

      
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
