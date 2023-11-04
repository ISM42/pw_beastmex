@extends('layouts.plantilla') @section('contenido')
@include('partials.navbar_almacen')
@section('titulo', 'REGISTRAR PRODUCTO')

<title>REGISTRAR PRODUCTO</title>

<h1>REGISTRAR PRODUCTO</h1>

<p></p>
<p></p>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <form class="form-signin">
                    <div style="text-align:center;">
                    <img class="mb-4" src="https://w7.pngwing.com/pngs/106/157/png-transparent-export-import-product-marketing-e-commerce-eagle-on-a-globe-furniture-globe-text.png" alt="" width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal">REGISTRAR PRODUCTO</h1>
                </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Nombre producto</label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">NO. Serie</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Marca</label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Cantidad</label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" id="email" placeholder="Password">
                        <label for="floatingPassword">Costo compra</label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" id="email" placeholder="Password">
                        <label for="floatingPassword">Precio de venta</label>
                </div>

                    <div class="form-floating">
                    <input type="date" class="form-control" id="dateInput" placeholder="Fecha" value="{{ date('Y-m-d') }}">
                    <label for="dateInput">Fecha de ingreso </label>
                </div>

                <div class="form-floating">
                    <input type="search" class="form-control" id="email" placeholder="Password">
                    <label for="floatingPassword">Foto producto</label>
                </div>

                    <p></p>
                    <button class="btn btn-primary w-100 py-2" type="submit">Guardar</button>
                    <p></p>
                    <button class="btn btn-primary w-100 py-2" type="submit">Cancelar</button>
                    <p class="mt-5 mb-3 text-body-secondary">&copy; 2023–2023</p>
                </form>
            </div>
        </div>
    </main>
</body>

@endsection('contenido')
