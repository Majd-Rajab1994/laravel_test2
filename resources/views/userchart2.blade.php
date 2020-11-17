@extends('layouts.layout')

@section('content')
    <script>
        window.onload = function () {
            google.charts.load('current', {'packages':['corechart']});
            google.charts.load('current', {'packages':['gauge']});
            google.charts.setOnLoadCallback(drawChart);
            google.charts.setOnLoadCallback(ddrawChart);
            google.charts.setOnLoadCallback(drawChartdonate);
            google.charts.setOnLoadCallback(drawChartgauge);
            google.charts.setOnLoadCallback(drawChartarea);

            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Task', 'Hours per Day'],
                    ['Work',     11],
                    ['Eat',      2],
                    ['dance',  2]
                ]);

                var options = {
                    title: 'google charts test1'
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
            };

            function ddrawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Task', 'Hours per Day'],
                    ['Work',     11],
                    ['Eat',      2],
                    ['dance',  2]
                ]);

                var options = {
                    title: 'google charts test2',
                    is3D: true,
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart3d'));
                chart.draw(data, options);
            };

            function drawChartdonate() {
                var data = google.visualization.arrayToDataTable([
                    ['Task', 'Hours per Day'],
                    ['Work',     11],
                    ['Eat',      2],
                    ['dance',  2]
                ]);

                var options = {
                    title: 'google charts test3',
                    pieHole: 0.4,
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechartdonat'));
                chart.draw(data, options);
            };

            function drawChartgauge() {
                var data = google.visualization.arrayToDataTable([
                    ['Label', 'Value'],
                    ['Work',     11],
                    ['Eat',      20],
                    ['dance',  50]
                ]);

                var options = {
                    width: 400, height: 120,
                    redFrom: 90, redTo: 100,
                    yellowFrom:75, yellowTo: 90,
                    minorTicks: 5
                };
                var chart = new google.visualization.Gauge(document.getElementById('chartgauge'));
                chart.draw(data, options);
            };

            function drawChartarea() {
                var data = google.visualization.arrayToDataTable([
                    ['Year', 'Sales', 'Expenses'],
                    ['2013',  1000,      400],
                    ['2014',  1170,      460],
                    ['2015',  660,       1120],
                    ['2016',  1030,      540]
                ]);

                var options = {
                    hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
                    vAxis: {minValue: 0}
                };
                var chart = new google.visualization.AreaChart(document.getElementById('chartarea'));
                chart.draw(data, options);
            }
        }
    </script>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
    <div id="piechart3d" style="width: 900px; height: 500px;"></div>
    <div id="piechartdonat" style="width: 900px; height: 500px;"></div>
    <div id="chartgauge" style="width: 900px; height: 500px;"></div>
    <div id="chartarea" style="width: 900px; height: 500px;"></div>
@endsection
