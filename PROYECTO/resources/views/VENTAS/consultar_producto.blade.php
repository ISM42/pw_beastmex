@extends('layouts.plantilla')

@section('contenido')

@include('partials.navbar_ventas')
<p></p>


        <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>




    <body>
      <div class="container mt-5">
        <h1>Consultar Producto</h1>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>No. Serie</th>
              <th>Marca</th>
              <th>Cantidad</th>
              <th>Costo compra</th>
              <th>Precio de venta</th>
              <th>Fecha de ingreso</th>
              <th>Foto</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <!-- Aquí debes ingresar tus datos dinámicamente desde la base de datos -->
            <tr>
              <td>1</td>
              <td>Producto A</td>
              <td>12345</td>
              <td>Marca X</td>
              <td>10</td>
              <td>$100.00</td>
              <td>$150.00</td>
              <td>2023-01-15</td>
              <td><img src="ruta_de_la_imagen1.jpg" alt="Producto A"></td>
              <td>
                <button class="btn btn-primary btn-sm">Editar</button>
                <button class="btn btn-danger btn-sm">Eliminar</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Producto B</td>
              <td>54321</td>
              <td>Marca Y</td>
              <td>5</td>
              <td>$75.00</td>
              <td>$120.00</td>
              <td>2023-01-20</td>
              <td><img src="ruta_de_la_imagen2.jpg" alt="Producto B"></td>
              <td>
                <button class="btn btn-primary btn-sm">Editar</button>
                <button class="btn btn-danger btn-sm">Eliminar</button>
              </td>
            </tr>
            <!-- Agrega más filas según sea necesario -->
          </tbody>
        </table>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    </body>
@endsection('contenido')