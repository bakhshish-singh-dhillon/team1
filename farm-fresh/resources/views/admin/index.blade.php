@extends('layouts/admin/app')

@section('content')
    <div class="title black-text py-3">Admin Dashboard</div>
    <div class="row">
        <div class="col-md-3">
            <div class="card p-3 m-2 blue-bg">
                <div class="d-flex justify-content-between">
                    <div class="content">
                        <p class="sub-title">{{ $ordersCount }}</p>
                        <p>Total Orders</p>
                    </div>
                    <i class="fa-solid fa-cart-shopping symbol p-4"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-3 m-2 pink-bg">
                <div class="d-flex justify-content-between">
                    <div class="content">
                        <p class="sub-title">{{ $productsCount }}</p>
                        <p>Total Products</p>
                    </div>
                    <i class="fa-solid fa-carrot symbol p-4"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-3 m-2 green-bg">
                <div class="d-flex justify-content-between">
                    <div class="content">
                        <p class="sub-title"><small><i class="fa-solid fa-dollar-sign"></i></small>{{ $salesCount }} </p>
                        <p>Total Sales</p>
                    </div>
                    <i class="fa-solid fa-sack-dollar symbol p-4"></i>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card p-3 m-2 orange-bg">
                <div class="d-flex justify-content-between">
                    <div class="content">
                        <p class="sub-title">{{ $usersCount }}</p>
                        <p>Total Users</p>
                    </div>
                    <i class="fa-solid fa-users symbol p-4"></i>
                </div>
            </div>
        </div>

    </div>

    <div class="row">
        <div class="col-md-6">
            <div id="chart_div" style="width: 100%; height: 500px;"></div>
        </div>
        <div class="col-md-6">
            <div id="piechart_3d" style="width: 100%; height: 500px;"></div>
        </div>
    </div>
@endsection

@section('custom-js')
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Month', 'Sales', 'Orders'],
                @foreach ($chart_data->reverse() as $data)
                    {!! "['" . $data->month . ' ' . $data->year . "'," . $data->sales . ',' . $data->orders . '],' !!}
                @endforeach
            ]);

            var options = {
                title: 'Sales and Orders',
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

            if (document.getElementById('chart_div')) {
                var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
                chart.draw(data, options);
            }
        }

        google.charts.setOnLoadCallback(drawPieChart);

        function drawPieChart() {
            var data = google.visualization.arrayToDataTable([
                ['Category', 'Total Sales'],
                @foreach ($pie_data as $category => $orders)
                    {!! "['" . $category . "'," . $orders . '],' !!}
                @endforeach
            ]);

            var options = {
                title: 'Total Sales by Category',
                is3D: true,
                colors: ['#15C2D2', '#FDA738', '#e86f4a']
            };

            if (document.getElementById('piechart_3d')) {
                var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                chart.draw(data, options);
            }
        }
    </script>
@endsection
