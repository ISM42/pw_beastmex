@extends('layouts.plantilla')

@section('contenido')
    @include('partials.navbar_ventas')

    <div class="container mt-5">
        <br>
        <br>
        <h1>Ganancias por mes</h1>

        <form method="POST" action="{{ route('ganancias.por.mes') }}">
    @csrf
    <div class="form-group">
        <label for="fecha">Seleccionar mes y año:</label>
        <input type="month" id="fecha" name="fecha" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Calcular Ganancias</button>
</form>

        @if(isset($gananciasPorMes))
            <!-- Mostrar la tabla de ganancias -->
            <table class="table table-striped mt-3">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">Mes</th>
                        <th scope="col">Ganancias</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($gananciasPorMes as $mes => $ganancia)
                        <tr>
                            <td>{{ $mes }}</td>
                            <td>{{ $ganancia }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No hay ganancias calculadas para este mes.</p>
        @endif
    </div>
@endsection