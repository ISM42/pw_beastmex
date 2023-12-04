@extends('layouts.plantilla')

@section('contenido')

@include('partials.navbar_ventas')

<form class="d-flex" role="search" method="GET">
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="buscarpor">
    <button class="btn btn-outline-success" type="submit">Search</button>
</form>

<div class="container mt-5">
    <h1>Consultar tickets de venta</h1>
    @if(isset($consulVentas) && count($consulVentas) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Cliente</th>
                    <th>Cantidad</th>
                    <th>Precio unitario</th>
                    <th>Total venta</th>
                    <th>Fecha venta</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Datos dinámicos de la base de datos -->
                @foreach($consulVentas as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ strval($item->id_producto) }}</td>
                        <td>{{ $item->id_cliente }}</td>
                        <td>{{ $item->cantidad_vendida }}</td>
                        <td>{{ $item->precio_unitario }}</td>
                        <td>{{ $item->total_venta }}</td>
                        <td>{{ $item->fecha_venta }}</td>
                        <td>
                        <form action="{{ route('ventas.pdf_tickets') }}" method="GET">
                    <button type="submit" class="btn btn-success btn-sm">
                        Ticket
                    </button>
                </form>
                            <button class="btn btn-primary btn-sm">Editar</button><i class="bi bi-file-earmark-pdf">
                            <button class="btn btn-danger btn-sm">Eliminar</button>
                            
                            

                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No se encontraron ventas.</p>
    @endif
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
@endsection('contenido')
