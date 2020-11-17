@extends('layouts.layout')

@section('content')

    <div style="width: 50%">
        <canvas id="Chart1"></canvas>
    </div>

    <div style="width: 50%">
        <canvas id="Chart2"></canvas>
    </div>

    <div style="width: 50%">
        <canvas id="Chart3"></canvas>
    </div>

    <div style="width: 50%">
        <canvas id="Chart4"></canvas>
    </div>

    <div style="width: 50%">
        <canvas id="Chart5"></canvas>
    </div>

    <div style="width: 50%">
        <canvas id="Chart6"></canvas>
    </div>

    <script>
        var ctx1 = document.getElementById('Chart1').getContext('2d');
        var ctx2 = document.getElementById('Chart2').getContext('2d');
        var ctx3 = document.getElementById('Chart3').getContext('2d');
        var ctx4 = document.getElementById('Chart4').getContext('2d');
        var ctx5 = document.getElementById('Chart5').getContext('2d');
        var ctx6 = document.getElementById('Chart6').getContext('2d');
        window.onload = function() {
            var chart1 = new Chart(ctx1, {
                type: 'line',
                data: {
                    labels: ['January', 'February', 'March', 'April'],
                    datasets: [{
                        label: 'chartjstest1',
                        backgroundColor: 'rgb(255, 99, 132)',
                        borderColor: 'rgb(255, 99, 132)',
                        data: [0, 7, 22,19]
                    }]
                },
                options: {}
            });

            var BarChart = new Chart(ctx2, {
                type: 'bar',
                data: {
                    labels: ['January', 'February', 'March', 'April'],
                    datasets: [{
                        label: 'chartjstest2',
                        data: [0, 7, 22,19],
                        backgroundColor: ['#ff6384','#354acb','#cc31ce','#358f2b'],
                    }]
                },
                options: {}
            });

            var PieChart = new Chart(ctx3, {
                type: 'pie',
                data: {
                    labels: ['January', 'February', 'March', 'April'],
                    datasets: [{
                        data: [5, 7, 22,19],
                        backgroundColor: ['#ff6384','#354acb','#cc31ce','#358f2b'],
                    }]
                },
                options: {}
            });

            var PieChart = new Chart(ctx4, {
                type: 'doughnut',
                data: {
                    labels: ['January', 'February', 'March', 'April'],
                    datasets: [{
                        data: [5, 7, 22,19],
                        backgroundColor: ['#ff6384','#354acb','#cc31ce','#358f2b'],
                    }]
                },
                options: {}
            });

            var PieChart = new Chart(ctx5, {
                type: 'polarArea',
                data: {
                    labels: ['January', 'February', 'March', 'April'],
                    datasets: [{
                        data: [5, 7, 22,19],
                        backgroundColor: ['#ff6384','#354acb','#cc31ce','#358f2b'],
                    }]
                },
                options: {}
            });

            var PieChart = new Chart(ctx6, {
                type: 'bubble',
                data: {
                    labels: ['January', 'February', 'March', 'April'],
                    datasets: [{
                        data: [{
                            x: -10,
                            y: 0,
                            r:7
                        }, {
                            x: 0,
                            y: 10,
                            r:7
                        }, {
                            x: 10,
                            y: 5,
                            r:6
                        }, {
                            x: 15,
                            y: 8,
                            r:8
                        }],
                        backgroundColor: ['#ff6384','#354acb','#cc31ce','#358f2b'],
                    }]
                },
                options: {}
            });
        }
    </script>
@endsection
