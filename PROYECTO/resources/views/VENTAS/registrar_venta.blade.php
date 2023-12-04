@extends('layouts.plantilla')

@section('contenido')
@section('titulo', 'REGISTRAR VENTA')
@include('partials.navbar_ventas')

@section('scripts')
    <!-- Agregar jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function() {
            // Asignar evento de cambio al campo de selección de producto
            $('select[name="_idproducto"]').change(function() {
                var productoId = $(this).val();

                // Realizar una solicitud AJAX para obtener el precio del producto seleccionado
                $.ajax({
                    url: '/obtener-precio-producto/' + productoId, // Ruta para obtener el precio del producto
                    type: 'GET',
                    success: function(response) {
                        // Actualizar el campo de "Precio unitario" con el precio obtenido
                        $('#precioUnitario').val(response.precio);
                    },
                    error: function(xhr) {
                        // Manejar errores si la solicitud falla
                        console.log(xhr.responseText);
                    }
                });
            });
        });
    </script>
@endsection

        
<p></p>
<p></p>
<div class="container">
    <form method="POST" action="{{ route('ventas.store') }}">
        @csrf

        @if(session()->has('confirmacion'))
            <script>Swal.fire('Información "{{ session('confirmacion') }}" guardada')</script>
        @endif

        @if($errors->any())
            @foreach($errors->all() as $error)
            @endforeach
        @endif

        <body class="d-flex align-items-center py-4 bg-body-tertiary">
            <main class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-lg-4">
                        <form class="form-signin">
                            <br>
                            <br>
                            <div style="text-align:center;">
                                <img class="mb-4" src="https://w7.pngwing.com/pngs/106/157/png-transparent-export-import-product-marketing-e-commerce-eagle-on-a-globe-furniture-globe-text.png" alt="" width="72" height="57">
                            <center>    <h1 class="h3 mb-3 fw-normal">REGISTRAR VENTA</h1> </center>
                            </div>
<center>
                            <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha">
        </div>
    </center>
<br>
    <center>

                                   <div class="form-group">
            <label for="cliente">Cliente:</label>
            <select name="cliente" id="cliente">
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }} {{ $cliente->apellido_p }}</option>
                @endforeach
            </select>
        </div>
    </center>
    <br>
<center>
        <div class="form-group">
            <label for="producto">Producto:</label>
            <select name="producto" id="producto">
                @foreach($productos as $producto)
                    <option value="{{ $producto->id }}">{{ $producto->nombre }} ({{ $producto->marca }})</option>
                @endforeach
            </select>
        </div>
    </center>
    <br>
    <center>
        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad">
        </div>
    </center>
    <br>
        <button class="btn btn-primary w-100 py-2" type="submit">Registrar Venta</button>
        <p></p>
        </form>
                            <a href="/"><button class="btn btn-secondary w-100 py-2" type="submit">Cancelar</button></a>
                               
                            
                            <p class="mt-5 mb-3 text-body-secondary">&copy; 2023–2023</p>
                      
                    </div>
                </div>
            </main>
        </body>
    
</div>
@endsection
