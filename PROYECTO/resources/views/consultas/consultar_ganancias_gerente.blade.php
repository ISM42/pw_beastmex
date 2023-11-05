@extends('layouts.plantilla')

@section('contenido')

@include('partials.navbar_ventas')
<p></p>
    <title>CONSULTAR GANANCIAS</title>

    <form class="d-flex" role="search">
        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      
</head>
<body>
  <div class="container">
    <h1>Dashboard de Ganancias</h1>

    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            Ganancias Mensuales
          </div>
          <div class="card-body">
            <canvas id="gananciasChart"></canvas>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            Resumen de Ganancias
          </div>
          <div class="card-body">
            <p>Total de Ganancias: $10,000</p>
            <p>Ganancias Hoy: $500</p>
            <p>Ganancias este Mes: $2,000</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
  <script>
    // Datos de ejemplo para la gráfica
    var gananciasData = {
      labels: ["Ene", "Feb", "Mar", "Abr", "May", "Jun"],
      datasets: [{
        label: 'Ganancias Mensuales',
        data: [1000, 1500, 2000, 1200, 1800, 1500],
        backgroundColor: 'rgba(75, 192, 192, 0.2)',
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
      }]
    };

    var ctx = document.getElementById('gananciasChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: gananciasData,
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