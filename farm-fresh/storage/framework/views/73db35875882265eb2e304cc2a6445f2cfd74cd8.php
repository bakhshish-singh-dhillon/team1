<?php $__env->startSection('content'); ?>
    <div class="title black-text py-3">Admin Dashboard</div>
    <div class="row">
        <div class="col-md-3">
            <div class="card p-3 m-2 blue-bg">
                <div class="d-flex justify-content-between">
                    <div class="content">
                        <p class="sub-title"><?php echo e($ordersCount); ?></p>
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
                        <p class="sub-title"><?php echo e($productsCount); ?></p>
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
                        <p class="sub-title"><small><i class="fa-solid fa-dollar-sign"></i></small><?php echo e($salesCount); ?> </p>
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
                        <p class="sub-title"><?php echo e($usersCount); ?></p>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom-js'); ?>
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <script>
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Month', 'Sales', 'Orders'],
                <?php $__currentLoopData = $chart_data->reverse(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo "['" . $data->month . ' ' . $data->year . "'," . $data->sales . ',' . $data->orders . '],'; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                <?php $__currentLoopData = $pie_data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category => $orders): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php echo "['" . $category . "'," . $orders . '],'; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/admin/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/team1/farm-fresh/resources/views/admin/index.blade.php ENDPATH**/ ?>