@extends('layouts.plantilla')

@section('contenido')

@include('partials.navbar_ventas')
<p></p>

<div class="container mt-5">
  <br>
  <br>
  <br>
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscqr">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
        <br>
    </form>
<br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">No. serie</th>
                <th scope="col">Marca</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Costo_compra</th>
                <th scope="col">Fecha ingreso</th>
                <th scope="col">Imagen</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($consulProducto as $item)
            @include('partials.modales_almacen')
            

               
                   <!-- Button trigger modal ACTUALIZAR -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar{{$item->id}}">
 Actualizar
</button>
                    <!-- Button trigger modal ELIMINAR-->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#eliminar{{$item->id}}">
  Eliminar
</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

@endsection('contenido')
