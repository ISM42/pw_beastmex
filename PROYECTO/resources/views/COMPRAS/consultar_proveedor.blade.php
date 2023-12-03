@extends('layouts.plantilla')

@section('contenido')

@include('partials.navbar_compras')
<p></p>

        <title>CONSULTAR PROVEEDOR</title>

        
        <p></p>
        <body>
          <div class="container mt-5">
          <br>
          <br>  
          <h1>Proveedores</h1>
            <p></p>

            <!-- BARRA DE BÚSQUEDA -->
        <form class="d-flex" role="search">
        <input name="buscarpor" class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar" value="">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>

    <!-- DISPARADOR MODAL PARA NUEVO PROVEEDOR -->
    <div class="d-grid gap-2 d-md-flex justify-content-md-end" data-bs-toggle="modal" data-bs-target="#create">
    <button class="btn btn-primary" type="button">Nuevo proveedor</button>
    </div>

    <!-- TABLA DE CONSULTAS -->
            <table class="table table-striped">
              <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Empresa</th>
                <th scope="col">Nombre Contacto</th>
                <th scope="col">Apellido Paterno</th>
                <th scope="col">Apellido Materno</th>
                <th scope="col">Correo contacto</th>
                <th scope="col">Teléfono contacto</th>
                <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
              @foreach($consulProveedor as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nombre_empresa }}</td>
                <td>{{ $item->nombre_contacto }}</td>
                <td>{{ $item->ap_contacto }}</td>
                <td>{{ $item->am_contacto}}</td>
                <td>{{ $item->email_contacto }}</td>
                <td>{{ $item->tel_contacto }}</td>
                
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
            @include('partials.modales_compras')
            
            @endforeach
              </tbody>
            </table>
          </div>
          
        </body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

@endsection('contenido')