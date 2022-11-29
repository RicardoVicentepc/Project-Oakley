<?php
use Illuminate\Support\Facades\DB;
?>

@extends('template.default')

@section('title')
<title>Home</title>
<head>
    <link rel="stylesheet" href="{{url('/css/Home.css')}}">
    <script src='https://www.gstatic.com/charts/loader.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <!-- <script>
       google.charts.load('current', {'packages':['areachart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        <?php  $countCliente = DB::table('tbCliente')->count();?>
        var fem = JSON.parse('{!! json_encode($countCliente) !!}');
        console.log(fem)
        
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          
          ['Categorias', fem],
         
        ]);

        var options = {
          title: 'Categorias cadrastadas',
          slices: {
            0: { color: 'purple' },
          }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script> -->



</head>
@endsection

@section('content')


<main>


<div class="row">
  <div class="col-sm-5">
    <canvas id="myChart" style="width:85%;max-width:600px;">

          <script>
          var xValues = ["Clientes"];
          <?php  $countCliente = DB::table('tbCliente')->count();?>
                  var fem = JSON.parse('{!! json_encode($countCliente) !!}');
          var yValues = [fem];
          var barColors = ["purple"];

          new Chart("myChart", {
            type: "bar",
            data: {
              labels: xValues,
              datasets: [{
                backgroundColor: barColors,
                data: yValues
              }]
            },
            options: {
              legend: {display: false},
              title: {
                display: true,
                text: "Clientes cadrastadas"
              }
            }
          });
          </script>
      </canvas>
  </div>
  <div class="col-sm-5">
      <canvas id="myChart2" style="width:85%;max-width:600px;">
          <script>
          var xValues = ["Produtos"];
          <?php  $countCliente = DB::table('tbProduto')->count();?>
                  var fem = JSON.parse('{!! json_encode($countCliente) !!}');
          var yValues = [fem];
          var barColors = ["purple"];

          new Chart("myChart2", {
            type: "bar",
            data: {
              labels: xValues,
              datasets: [{
                backgroundColor: barColors,
                data: yValues
              }]
            },
            options: {
              legend: {display: false},
              title: {
                display: true,
                text: "Produtos cadrastados"
              }
            }
          });
          </script>
    </canvas>
  </div>
</div>



</main>

@endsection