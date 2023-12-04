@extends('layouts.app')

@section('content')
    <h1>Registrar Venta</h1>
    
    <form method="POST" action="{{ route('ventas.store') }}">
        @csrf

        <div class="form-group">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha">
        </div>

        <div class="form-group">
            <label for="cliente">Cliente:</label>
            <select name="cliente" id="cliente">
                @foreach($clientes as $cliente)
                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }} {{ $cliente->apellido_p }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="producto">Producto:</label>
            <select name="producto" id="producto">
                @foreach($productos as $producto)
                    <option value="{{ $producto->id }}">{{ $producto->nombre }} ({{ $producto->marca }})</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad">
        </div>

        <button type="submit">Registrar Venta</button>
    </form>
@endsection