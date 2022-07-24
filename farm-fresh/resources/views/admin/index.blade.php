@extends('layouts/admin/app')

@section('content')

<div class="title black-text py-3">Admin Dashboard</div>
<div class="row">
    <div class="col-md-3">
        <div class="card p-3 m-2 blue-bg">
            <div class="d-flex justify-content-between">
                <div class="content">
                    <p class="sub-title">2030</p>
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
                    <p class="sub-title">2030</p>
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
                    <p class="sub-title">2030</p>
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
                    <p class="sub-title">2030</p>
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