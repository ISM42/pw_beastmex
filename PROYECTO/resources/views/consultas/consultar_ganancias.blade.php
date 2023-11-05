@extends('layouts.plantilla')

@section('contenido')

@include('partials.navbar_ventas')

    <title>CONSULTAR GANANCIAS</title>

    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      
</head>
<body>
  <div class="container">
      <h1>Dashboard de Ganancias Generales</h1>

      <div class="row">
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header">
                      Ganancias Mensuales
                  </div>
                  <div class="card-body">
                      <canvas id="gananciasGeneralesChart"></canvas>
                  </div>
              </div>
          </div>
          <div class="col-md-6">
              <div class="card">
                  <div class="card-header">
                      Resumen de Ganancias Generales
                  </div>
                  <div class="card-body">
                      <p>Total de Ganancias: $50,000</p>
                      <p>Ganancias Hoy: $2,000</p>
                      <p>Ganancias este Mes: $10,000</p>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
  <script>
      // Datos de ejemplo para la gráfica de ganancias generales
      var gananciasGeneralesData = {
          labels: ["Ene", "Feb", "Mar", "Abr", "May", "Jun"],
          datasets: [{
              label: 'Ganancias Mensuales Generales',
              data: [2000, 2500, 2800, 1800, 3200, 2800],
              backgroundColor: 'rgba(255, 99, 132, 0.2)',
              borderColor: 'rgba(255, 99, 132, 1)',
              borderWidth: 1
          }]
      };

      var ctx = document.getElementById('gananciasGeneralesChart').getContext('2d');
      var myChart = new Chart(ctx, {
          type: 'bar',
          data: gananciasGeneralesData,
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