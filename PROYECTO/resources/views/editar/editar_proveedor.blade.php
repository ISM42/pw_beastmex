@extends('layouts.plantilla') @section('contenido') @section('title','EDITAR PROVEEDOR')
@include('partials.navbar_almacen')


<title>REGISTRAR PROVEEDOR</title>

<h1>EDITAR PROVEEDOR</h1>

<p></p>
<p></p>

<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <form class="form-signin">
                    <div style="text-align:center;">
                    <img class="mb-4" src="https://w7.pngwing.com/pngs/106/157/png-transparent-export-import-product-marketing-e-commerce-eagle-on-a-globe-furniture-globe-text.png" alt="" width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal">EDITAR PRODUCTO</h1>
                </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Producto</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Contacto</label>
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Empresa</label>
                    </div>

                    <div class="form-floating">
                        <input type="number" class="form-control" id="floatingInput" placeholder="Password">
                        <label for="floatingPassword">NO. Telefónico</label>
                    </div>


                    <p></p>
                    <button class="btn btn-primary w-100 py-2" type="submit">Editar</button>
                    <p></p>
                    <button class="btn btn-primary w-100 py-2" type="submit">Cancelar</button>
                    <p class="mt-5 mb-3 text-body-secondary">&copy; 2023–2023</p>
                </form>
            </div>
        </div>
    </main>
</body>
@endsection('contenido')
