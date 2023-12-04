<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>PDF</title>
        <h1>
            Ticket de venta
        </h1>

        <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #1E8449;
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
                    <th>Producto</th>
                    <th>Cliente</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Total</th>
                    <th>Fecha</th>
                    <!-- Agrega más columnas según sea necesario -->
                </tr>
            </thead>

            <tbody>
                @foreach($ventas as $venta)
                <tr>
                    <td>{{ $venta->id_producto }}</td>
                    <td>{{ $venta->id_cliente }}</td>
                    <td>{{ $venta->cantidad_vendida }}</td>
                    <td>{{ $venta->precio_unitario }}</td>
                    <td>{{ $venta->total_venta }}</td>
                    <td>{{ $venta->fecha_venta }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
    <br>
<br>
<br>

</html>
