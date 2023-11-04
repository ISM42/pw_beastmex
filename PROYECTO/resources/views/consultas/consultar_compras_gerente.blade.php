@extends('layouts.plantilla')

@section('contenido')

@include('partials.navbar_ventas')
<p></p>
    <title>CONSULTAR COMPRAS</title>

    <form class="d-flex" role="search">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      
</head>
<body>
<h1>CONSULTAR COMPRAS</h1>
 Aqui se puede agregar un dashboard
    
 @endsection('contenido')