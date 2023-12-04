@extends('layouts.plantilla')

@section('contenido')
    @include('partials.navbar_ventas')
<br>
<br>
    <div class="container mt-5">
        <div class="card text-center">
            <div class="card-header">
                <br>
                <br>
               <h1>Ganancias generales</h1> 
            </div>
            <div class="card-body">
               <!--  <form action="{{ route('ganancias.todas') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Calcular ganancias</button>
                </form> -->

                @if(isset($ganancias) && $ganancias !== null)
                    <h5 class="card-title">Ganancia total de todas las ventas:</h5>
                    <p class="card-text">{{ $ganancias }}</p>
                @else
                    <p class="card-text">No se encontraron ganancias.</p>
                @endif
            </div>
            <div class="card-footer text-body-secondary">
                {{ date('Y-m-d') }} <!-- Muestra la fecha actual -->
            </div>
        </div>
    </div>
@endsection