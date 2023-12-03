<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">IMPORTACIONES BEASTMEX</a>
    <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse offcanvas-collapse justify-content-between">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/consulta_producto">Consultar Producto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('producto.create')}}">Registrar Producto</a>
        </li>
      </ul>

      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/login">Salir</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
