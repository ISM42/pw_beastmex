<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>PDF</title>
        <h1>
            Informe de Productos
        </h1>
<br>
<br>
<br>
        <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #1F618D;
            font-style: italic;
            margin-bottom: 10px;
        }

        table {
            width: 90%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
            font: 12px sans-serif;
        }
        
        th {
            background-color: #2471A3 ;
        }
    </style>
    </head>
    <body>
    

       
        <table>
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Número de Serie</th>
                    <th>Marca</th>
                    <th>Cantidad</th>
                    <th>Costo de Compra</th>
                    <th>Fecha de Ingreso</th>
                    <!-- Agrega más columnas según sea necesario -->
                </tr>
            </thead>

            <tbody>
                @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->num_serie }}</td>
                    <td>{{ $producto->marca }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>{{ $producto->costo_compra }}</td>
                    <td>{{ $producto->fecha_ingreso }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>

</html>
