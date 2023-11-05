@extends('layouts.plantilla')

@section('contenido')

@include('partials.navbar_gerencia')
<p></p>


        

    <h1>CONSULTAR USUARIO</h1>

    <body>
      <div class="container mt-5">
        <h1>Consultar Usuario</h1>
        <p></p>
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre usuario</th>
              <th>Apellido paterno</th>
              <th>Apellido materno</th>
              <th>Email</th>
              <th>Puesto</th>
              <th>Contraseña</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody>
            <!-- Aquí debes ingresar tus datos dinámicamente desde la base de datos -->
            <tr>
              <td>1</td>
              <td>John</td>
              <td>Doe</td>
              <td>Smith</td>
              <td>john@example.com</td>
              <td>Gerente</td>
              <td>password123</td>
              <td>
                <button class="btn btn-primary btn-sm">Editar</button>
                <button class="btn btn-danger btn-sm">Eliminar</button>
              </td>
            </tr>
            <tr>
              <td>2</td>
              <td>Jane</td>
              <td>Johnson</td>
              <td>Doe</td>
              <td>jane@example.com</td>
              <td>Asistente</td>
              <td>secret456</td>
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
