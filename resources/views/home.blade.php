@extends('layouts.admin-template')

@section('content')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Inhouse Stock',     11],
          ['Deployed in HO',      2],
          ['Deployed in Branches',  2],
          ['Decommission', 2],
          ['Incoming Stocks',    7]
        ]);

        var options = {
          title: 'IT Assets'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
    

     <div class="row">
        <div class="col-md-8">
        <div class="panel panel-default">
          
          <div class="panel-body">
          <div id="piechart" style="width: 700px; height: 300px;"></div>
          </div>
    </div>
        </div>
     </div>

@endsection
