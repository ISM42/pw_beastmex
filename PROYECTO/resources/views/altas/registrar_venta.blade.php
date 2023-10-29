@extends('layouts.plantilla') @section('contenido')
@include('partials.navbar_ventas')

<title>REGISTRAR VENTA</title>

<h1>REGISTRAR VENTA</h1>

<p></p>
<p></p>

<div class="container">
    <div class="card">
        <div class="card-body">
            <label class="form-label">Nombre ticket</label>
            <input type="text" class="form-control" required />

            <p></p>
            <p></p>

            <label class="form-label">Fecha</label>
            <input type="date" class="form-control" required />

            <p></p>
            <p></p>

            <label class="form-label">Nombre cliente</label>
            <input type="text" class="form-control" required />

            <p></p>
            <p></p>

            <label class="form-label">Apellido paterno</label>
            <input type="text" class="form-control" required />

            <p></p>
            <p></p>

            <label class="form-label">Apellido materno</label>
            <input type="text" class="form-control" required />

            <p></p>
            <p></p>

            <label class="form-label">Producto</label>
            <input type="text" class="form-control" required />

            <p></p>
            <p></p>

            <label class="form-label">Marca</label>
            <input type="text" class="form-control" required />

            <p></p>
            <p></p>

            <label class="form-label">Cantidad</label>
            <input type="password" class="form-control" required />

            <p></p>
            <p></p>

            <label class="form-label"
                >Precio de venta/label>
                <input type="text" class="form-control" required />

                <p></p>
                <p></p>

                <label class="form-label">Total compra</label>
                <input type="text" class="form-control" required />

                <p></p>
                <p></p>

                <a href="/"><button type="button">Guardar</button></a>
                <a href="/"><button type="button">Cancelar</button></a>

                <p></p>
                <p></p>



        </div>
    </div>
</div>
@endsection('contenido')
