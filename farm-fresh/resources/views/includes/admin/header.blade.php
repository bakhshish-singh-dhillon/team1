<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Farm Fresh') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/b23be4ec12.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Month', 'Sales', 'Orders'],
                ['June 2022', 1000, 400],
                ['July 2022', 1170, 460],
                ['June 2021', 660, 1120],
                ['June 2020', 660, 1120],
                ['August 2022', 660, 1120],
                ['April 2022', 660, 1120],
                ['March 2022', 1030, 540]
            ]);

            var options = {
                title: 'Ignore this chart for now',
                hAxis: {
                    title: 'Month',
                    titleTextStyle: {
                        color: '#333'
                    }
                },
                vAxis: {
                    minValue: 0
                },
                annotations: {
                    boxStyle: {
                        rx: 50,
                        ry: 50
                    },
                }
            };

            var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }

        google.charts.setOnLoadCallback(drawPieChart);

        function drawPieChart() {
            var data = google.visualization.arrayToDataTable([
                ['Category', 'Total Sales'],
                ['Dairy', 1278],
                ['Fruits', 2217],
                ['Vegetables', 3282]
            ]);

            var options = {
                title: 'Total Sales by Category',
                is3D: true,
                colors: ['#15C2D2', '#FDA738', '#e86f4a']
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
            chart.draw(data, options);
        }
    </script>
</head>

<body>
    <div id="admin">
        @include('includes.flash')
        <div class="row m-0 p-0">
            <div class="col-md-2" id="admin_sidebar">
                @include('includes.admin.sidebar')
            </div>
            <div class="col-md-10">