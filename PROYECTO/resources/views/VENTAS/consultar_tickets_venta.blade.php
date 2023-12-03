@extends('layouts.plantilla')

@section('contenido')

@include('partials.navbar_ventas')
<p></p>
        <title>CONSULTAR TICKET DE VENTA</title>

        <body>
          <div class="container mt-5">
            <h1>Consultar Ticket de Venta</h1>
            <p></p>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Nombre ticket</th>
                  <th>Fecha</th>
                  <th>Nombre cliente</th>
                  <th>Apellido paterno</th>
                  <th>Apellido materno</th>
                  <th>Producto</th>
                  <th>Marca</th>
                  <th>Cantidad</th>
                  <th>Precio de Venta</th>
                  <th>Total Compra</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <!-- Aquí debes ingresar tus datos dinámicamente desde la base de datos -->
                <tr>
                  <td>1</td>
                  <td>Ticket 1</td>
                  <td>2023-01-15</td>
                  <td>John</td>
                  <td>Doe</td>
                  <td>Smith</td>
                  <td>Producto A</td>
                  <td>Marca X</td>
                  <td>3</td>
                  <td>$50.00</td>
                  <td>$150.00</td>
                  <td>
                    <button class="btn btn-primary btn-sm">Descargar</button>
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Ticket 2</td>
                  <td>2023-01-20</td>
                  <td>Jane</td>
                  <td>Johnson</td>
                  <td>Doe</td>
                  <td>Producto B</td>
                  <td>Marca Y</td>
                  <td>2</td>
                  <td>$75.00</td>
                  <td>$150.00</td>
                  <td>
                    <button class="btn btn-primary btn-sm">Descargar</button>
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                  </td>
                </tr>
                <!-- Agrega más filas según sea necesario -->
              </tbody>
            </table>
          </div>
        
        </body>

@endsection('contenido')