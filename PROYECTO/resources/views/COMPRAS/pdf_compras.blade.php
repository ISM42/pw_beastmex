<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>PDF</title>
        <h3>
        ========================
            Ticket de venta
        ========================    
        </h3>

        <style>
        body {
            font-family: Arial, sans-serif;
        }

        h3 {
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
        

<br>
<br>


        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Proveedor</th>
                
                </tr>
            </thead>

            <tbody>
                @foreach($compras as $compra)
                <tr>
                    <td>{{ strval($compra->id_producto) }}</td>
                    <td>{{ ''.($compra->id_proveedor) }}</td>
                  
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </body>
    <br>
<br>
<br>
    <footer style="text-align: center; color: #1E8449; font-style: italic">
      
        ============================
        </footer>
</html>
