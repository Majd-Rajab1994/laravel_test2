@extends('layouts.layout')

@section('content')
    <script>
        window.onload = function () {

        //canvas1
        var options1 = {
            title: {
                text: "canvasjs1"
            },
            animationEnabled: true,
            exportEnabled: true,
            data: [
            {
                type: "spline",
                dataPoints: [
                    { x: 10, y: 10 },
                    { x: 20, y: 6 },
                    { x: 30, y: 10 },
                    { x: 40, y: 20 },
                    { x: 50, y: 6 },
                    { x: 60, y: 30 },
                    { x: 70, y: -4 },
                    { x: 80, y: 1 }
                ]
            }
            ]
        };
        $("#canvasjs1").CanvasJSChart(options1);

        var options2 = {
            title: {
                text: "canvasjs2"
            },
            animationEnabled: true,
            data: [{
            type: "pie",
            startAngle: 40,
            toolTipContent: "<b>{label}</b>: {y}%",
            showInLegend: "true",
            legendText: "{label}",
            indexLabelFontSize: 16,
            indexLabel: "{label} - {y}%",
            dataPoints: [
                { y: 48.36, label: "work" },
                { y: 26.85, label: "play" },
                { y: 1.49, label: "dance" },
                ]
            }]
            };
            $("#canvasjs2").CanvasJSChart(options2);

            var options3 = {
                animationEnabled: true,
                title: {
                    text: "canvasjs3"
                },
                data: [{
                    type: "column",
                    legendText: "Try Resizing with the handle to the bottom right",
                    showInLegend: true,
                    dataPoints: [
                        { y: 12 },
                        { y: 6 },
                        { y: 12 },
                        { y: 12 },
                        { y: 5 }
                        ]
                    }]
                };
            $("#canvasjs3").CanvasJSChart(options3);

            var options4 = {
                animationEnabled: true,
                title: {
                    text: "canvasjs3"
                },
                data: [{
                    type: "line",
                    legendText: "Try Resizing with the handle to the bottom right",
                    showInLegend: true,
                    dataPoints: [
                        { y: 12 },
                        { y: 6 },
                        { y: 12 },
                        { y: 12 },
                        { y: 5 }
                        ]
                    }]
                };
            $("#canvasjs4").CanvasJSChart(options4);
        }

    </script>

    <div id="canvasjs1" style="height: 370px; width: auto; margin: 20px"></div>
    <div id="canvasjs2" style="height: 370px; width: auto; margin: 20px"></div>
    <div id="canvasjs3" style="height: 370px; width: auto; margin: 20px"></div>
    <div id="canvasjs4" style="height: 370px; width: auto; margin: 20px"></div>

@endsection

