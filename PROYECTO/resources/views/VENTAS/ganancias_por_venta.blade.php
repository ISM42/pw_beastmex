@extends('layouts.plantilla')

@section('contenido')
    @include('partials.navbar_ventas')

    <div class="container mt-5">
        <br>
        <br>
        <h1>Calcular Ganancias por Venta</h1>
        @if(isset($gananciasVentas) && count($gananciasVentas) > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID Venta</th>
                        <th>Producto</th>
                        <th>Cliente</th>
                        <th>Cantidad Vendida</th>
                        <th>Costo Compra</th>
                        <th>Precio Venta</th>
                        <th>Ganancia</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Datos dinámicos de la base de datos -->
                    @foreach($gananciasVentas as $venta)
                        <tr>
                            <td>{{ $venta->id }}</td>
                            <td>{{ $venta->nombre_producto }}</td>
                            <td>{{ $venta->nombre_cliente }}</td>
                            <td>{{ $venta->cantidad_vendida }}</td>
                            <td>{{ $venta->costo_compra }}</td>
                            <td>{{ $venta->precio_unitario }}</td>
                            <td>{{ $venta->ganancia }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No se encontraron ventas o información sobre ganancias.</p>
        @endif
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
@endsection('contenido')