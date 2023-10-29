@extends('layouts.plantilla') @section('contenido')
@include('partials.navbar_almacen')

<title>EDITAR PRODUCTO</title>

<h1>EDITAR PRODUCTO</h1>

<p></p>
<p></p>

<div class="container">
    <div class="card">
        <div class="card-body">
            <label class="form-label">Nombre producto:</label>
            <input type="text" class="form-control" required />

            <p></p>
            <p></p>

            <label class="form-label">NO. Serie:</label>
            <input type="number" class="form-control" required />

            <p></p>
            <p></p>

            <label class="form-label">Marca:</label>
            <input type="text" class="form-control" required />

            <p></p>
            <p></p>

            <label class="form-label">Cantidad:</label>
            <input type="number" class="form-control" required />

            <p></p>
            <p></p>

            <label class="form-label">Costo compra:</label>
            <input type="number" class="form-control" required />

            <p></p>
            <p></p>

            <label class="form-label">Precio de venta:</label>
            <input type="number" class="form-control" required />

            <p></p>
            <p></p>

            <label class="form-label">Fecha de ingreso:</label>
            <input type="date" class="form-control" required />

            <p></p>
            <p></p>

            <label class="form-label">Foto producto:</label>
            <input type="submit" class="form-control" required />

            <a href="/"><button type="button">Editar</button></a>
            <a href="/"><button type="button">Cancelar</button></a>

            <p></p>
            <p></p>
        </div>
    </div>
</div>

@endsection('contenido')
