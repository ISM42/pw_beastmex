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
  <body>
    <div class="container">
        <h1>Dashboard de Compras (Gerente)</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Compras Mensuales
                    </div>
                    <div class="card-body">
                        <canvas id="comprasChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Resumen de Compras
                    </div>
                    <div class="card-body">
                        <p>Total de Compras: $15,000</p>
                        <p>Compras Hoy: $800</p>
                        <p>Compras este Mes: $3,500</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script>
        // Datos de ejemplo para la gráfica de compras
        var comprasData = {
            labels: ["Ene", "Feb", "Mar", "Abr", "May", "Jun"],
            datasets: [{
                label: 'Compras Mensuales',
                data: [1500, 1800, 2000, 1200, 2200, 1800],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        };

        var ctx = document.getElementById('comprasChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: comprasData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
    
 @endsection('contenido')