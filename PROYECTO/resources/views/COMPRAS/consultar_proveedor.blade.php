@extends('layouts.plantilla')

@section('contenido')

@include('partials.navbar_compras')
<p></p>

        <title>CONSULTAR PROVEEDOR</title>

        
        <p></p>
        <body>
          <div class="container mt-5">
            <h1>Listado de Proveedores</h1>
            <p></p>
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Producto</th>
                  <th>Contacto</th>
                  <th>Empresa</th>
                  <th>Número de Teléfono</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <!-- Aquí debes ingresar tus datos dinámicamente desde la base de datos -->
                <tr>
                  <td>1</td>
                  <td>Producto 1</td>
                  <td>Contacto 1</td>
                  <td>Empresa A</td>
                  <td>123-456-7890</td>
                  <td>
                    <button class="btn btn-primary btn-sm">Editar</button>
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                  </td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Producto 2</td>
                  <td>Contacto 2</td>
                  <td>Empresa B</td>
                  <td>987-654-3210</td>
                  <td>
                    <button class="btn btn-primary btn-sm">Editar</button>
                    <button class="btn btn-danger btn-sm">Eliminar</button>
                  </td>
                </tr>
                <!-- Agrega más filas según sea necesario -->
              </tbody>
            </table>
          </div>
          
        </body>

@endsection('contenido')