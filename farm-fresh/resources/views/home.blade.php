@extends('layouts.app')

@section('content')

<div id="home">
    <img src="images/main-bg.jpg" alt="Home" />

    <div class="max-container">

        <div id="category">
            <div class="title text-center py-3">Browse by Category</div>

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
        <hr>
        <div id="reviews">
            <div class="sub-title text-center green-text">We provide better food to our customers every day</div>

            <div class="row py-4">
                <div class="col-md-6">
                    <div class="text-center">
                        <img src="images/left-quote.png" alt="Left-quote">
                        <p>Saniya said</p>
                        <p>I had an amazing experience. Loved the food. It was a quick delivery. Thank you so much for your great service!</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="text-center">
                        <img src="images/left-quote.png" alt="Left-quote">
                        <p>Mahira said</p>
                        <p>I had an amazing experience. Loved the food. It was a quick delivery. Thank you so much for your great service!</p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div id="featured">
            <div class="title text-center py-3">Featured Products</div>

            <div class="row py-4">
                @foreach($products as $prod)
                <div class="col-md-3 px-4">
                    <div class="card product-item">
                        @dd($prod->images)
                        <img class="card-img-top" src="images/placeholder.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title green-text text-bold">{{$prod->name}}</h5>
                            <p class="card-text">$ {{$prod->price}} / {{$prod->measure_unit}}</p>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div>
    </div>

    <div id="get_started">
        <div class="max-container">
            <div class="large-title green-text">Get Started</div>
            <div class="title black-text pb-4">FarmFresh food tastes good</div>
            <a href="/products" class="btn">View Products</a>
        </div>
    </div>
</div>

@endsection