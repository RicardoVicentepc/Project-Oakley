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



<canvas id="myChart" style="width:100%;max-width:600px; padding: 1.5em;">

<script>
var xValues = ["Categoria"];
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
      text: "Categorias cadrastadas"
    }
  }
});
</script>
</canvas>
</main>

@endsection