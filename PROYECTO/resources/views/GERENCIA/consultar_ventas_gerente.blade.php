@extends('layouts.plantilla')

@section('contenido')

@include('partials.navbar_ventas')

    <title>CONSULTAR VENTAS</title>
      
</head>
<body>
  <p></p>
  <h1>Dashboard de Ventas</h1>
    <div class="container">
      
  
      <div class="row">
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              Ventas Mensuales
            </div>
            <div class="card-body">
              <canvas id="ventasChart"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
              Resumen de Ventas
            </div>
            <div class="card-body">
              <p>Total de Ventas: $5,000</p>
              <p>Ventas Hoy: $500</p>
              <p>Ventas este Mes: $2,000</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script>
      // Datos de ejemplo para la gráfica
      var ventasData = {
        labels: ["Ene", "Feb", "Mar", "Abr", "May", "Jun"],
        datasets: [{
          label: 'Ventas Mensuales',
          data: [500, 1000, 1500, 800, 1200, 1000],
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
          borderColor: 'rgba(75, 192, 192, 1)',
          borderWidth: 1
        }]
      };
  
      var ctx = document.getElementById('ventasChart').getContext('2d');
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: ventasData,
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