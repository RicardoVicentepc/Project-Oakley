
@extends('template.default')

@section('title')
<title>Home</title>
<head>
    <link rel="stylesheet" href="{{url('/css/Home.css')}}">
     <script src='https://www.gstatic.com/charts/loader.js'></script>
    <script>
       google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

    
        
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          
          ['Task', 9],
         
        ]);

        var options = {
          title: 'My Daily Activities',
          slices: {
            0: { color: 'purple' },
            1: { color: 'aqua' },
            2: { color: 'pink' },
            3: { color: 'orange' }

          }
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
</head>
@endsection

@section('content')


<main>
<div id="piechart" style="width: 900px; height: 500px;"></div>
</main>

@endsection