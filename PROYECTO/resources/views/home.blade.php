@extends('layouts.app')

@section('content')

<div class="container">
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa;
        }

        .center-content {
            text-align: center;
        }

        img {
            width: 150px;
            height: auto;
            margin-bottom: 20px;
        }
    </style>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <p></p>
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="center-content">
                    <img src="https://w7.pngwing.com/pngs/106/157/png-transparent-export-import-product-marketing-e-commerce-eagle-on-a-globe-furniture-globe-text.png" alt="Logo">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                           
                        </div>
                    @endif
                    <body>
                            <div class="btn-group" role="group" aria-label="Botones de menú">
                                <a href="{{route('ventas.create')}}" class="btn btn-primary">
                                    <img src="https://cdn-icons-png.flaticon.com/512/726/726201.png" alt="Ventas" class="img-fluid"> Ventas
                                </a>
                                <p></p>
                                <a href="{{route('c_ganancias_g')}}" class="btn btn-primary">
                                    <img src="https://cdn.icon-icons.com/icons2/37/PNG/512/manager_3977.png" alt="Gerencia" class="img-fluid"> Gerencia
                                </a>
                    
                                <a href="{{route('producto.create')}}" class="btn btn-primary">
                                    <img src="https://cdn-icons-png.flaticon.com/512/124/124434.png" alt="Almacén" class="img-fluid"> Almacén
                                </a>
                                <p></p>
                                <a href="{{route('proveedor.index')}}" class="btn btn-primary">
                                    <img src="https://cdn-icons-png.flaticon.com/512/6404/6404654.png" alt="Proveedores" class="img-fluid"> Proveedores
                                </a>
                    
                                <a href="{{route('compras.create')}}" class="btn btn-primary">
                                    <img src="https://cdn.icon-icons.com/icons2/903/PNG/512/shopping-bag_icon-icons.com_69461.png" alt="Compras" class="img-fluid"> Compras
                                </a>
                    
                                <a href="{{route('clientes.index')}}" class="btn btn-primary">
                                    <img src="https://cdn-icons-png.flaticon.com/512/3126/3126647.png" alt="Clientes" class="img-fluid"> Clientes
                                </a>
                                <a href="{{ route('logout') }}" class="btn btn-danger"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <span style="font-size: 20px;">✖</span>
                                                Cerrar Sesión
                                                </a>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
                            </div>
                        </div>
                    
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
                    </body>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
