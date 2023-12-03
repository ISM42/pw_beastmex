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
<title>REGISTRAR VENTA</title>

<h1>REGISTRAR VENTA</h1>
        
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
                            <div style="text-align:center;">
                                <img class="mb-4" src="https://w7.pngwing.com/pngs/106/157/png-transparent-export-import-product-marketing-e-commerce-eagle-on-a-globe-furniture-globe-text.png" alt="" width="72" height="57">
                                <h1 class="h3 mb-3 fw-normal">REGISTRAR VENTA</h1>
                            </div>

                            <!-- Selector de producto -->
                            <div class="form-group">
                                <label for="_idprod">Seleccionar Producto</label>
                                <select class="form-control" name="_idproducto">
                                    @foreach($productos as $producto)
                                        <option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="_idprod">Seleccionar cliente</label>
                                <select class="form-control" name="_idcliente">
                                    @foreach($clientes as $cliente)
                                        <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-floating">
                                <input type="number" class="form-control" name="_cv" value="{{ old('_cv') }}"/>
                                <p class="text-danger fst-italic">{{ $errors->first('_cv') }} </p>
                                <label for="floatingPassword">Cantidad vendida</label>
                            </div>

                            <div class="form-floating">
    <input type="number" class="form-control" name="_pu" id="precioUnitario" value="{{ old('_pu') }}"/>
    <p class="text-danger fst-italic">{{ $errors->first('_pu') }} </p>
    <label for="floatingPassword">Precio unitario</label>
</div>



                            <p></p>
                            <button class="btn btn-primary w-100 py-2" type="submit">Generar orden de compra</button>
                            <p></p>
                            <a href="/"><button class="btn btn-primary w-100 py-2" type="submit">Cancelar</button></a>
                            <p class="mt-5 mb-3 text-body-secondary">&copy; 2023–2023</p>
                        </form>
                    </div>
                </div>
            </main>
        </body>
    </form>
</div>
@endsection
