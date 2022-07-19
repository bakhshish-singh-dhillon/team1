@extends('layouts.app')

@section('content')

<div>
    <img src="images/main-bg.jpg" alt="Home" />

    <div class="max-container" id="category">
        <div class="title py-3">Browse by Category</div>

        <div class="row py-4">
            <div class="col-md-3 text-center">
                <img src="images/salad.png" alt="All Products" />
                <p class="p-2 text-center">All Products</p>
            </div>
            <div class="col-md-3 text-center">
                <img src="images/cabbage.png" alt="Vegetables" />
                <p class="p-2 text-center">Vegetables</p>
            </div>
            <div class="col-md-3 text-center">
                <img src="images/fruit.png" alt="Fruits" />
                <p class="p-2 text-center">Fruits</p>
            </div>
            <div class="col-md-3 text-center">
                <img src="images/dairy-products.png" alt="Dairy Products" />
                <p class="p-2 text-center">Dairy Products</p>
            </div>
        </div>
    </div>
</div>

@endsection