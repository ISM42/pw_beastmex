@extends('layouts.plantilla')
@extends('partials.navbar_ventas')

@section('contenido')
    <div class="container">
        <div class="mt-4"> <!-- Add some top margin for separation -->
            <h1>CONSULTAR GANANCIAS</h1>
        </div>
        
        <!-- Add some padding for the search form -->
        <form class="d-flex mt-3" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
@endsection
