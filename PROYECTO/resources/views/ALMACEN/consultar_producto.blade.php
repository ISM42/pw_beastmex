@extends('layouts.plantilla')

@section('contenido')

@include('partials.navbar_almacen')
<p></p>

<div class="container mt-5">
    <br>
    <br>

     
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
    </form>
    <br>

    <div class="d-grid gap-2 d-md-flex justify-content-md-end" data-bs-toggle="modal" data-bs-target="#create">
  
  <button class="btn btn-primary" type="button">Nuevo producto</button>

</div>
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
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nombre }}</td>
                <td>{{ $item->num_serie }}</td>
                <td>{{ $item->marca }}</td>
                <td>{{ $item->cantidad }}</td>
                <td>{{ $item->costo_compra }}</td>
                <td>{{ $item->fecha_ingreso }}</td>
                <td>{{-- Imagen --}}</td>
                <td>
                    <!-- Button trigger modal ACTUALIZAR -->
                  
<button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#editar{{$item->id}}">
    Actualizar
</button>
                    <!-- Button trigger modal ELIMINAR-->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#destroy{{$item->id}}">
                        Eliminar
                    </button>
                </td>
            </tr>
            @include('partials.modales_almacen')
            
            @endforeach
        </tbody>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

@endsection('contenido')
