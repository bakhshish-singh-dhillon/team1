@extends('layouts.app')

@section('content')
<div id="home">
    <div id="banner">
        <div class="banner-box">
            <div class="container">
                <div class="content">
                    <p class="tagline"> Eat. Fresh. Daily. </p>
                    <div>
                        <form method="get" action="{{ route('products-by-search', []) }}">
                            <div>
                                <input class="form-control w-96" type="search" name="search" data-toggle="tooltip" data-placement="bottom" title="Search product" placeholder="Search products" value="{{ app('request')->input('search') }}" />
                                <button hidden class="btn btn-success">Search</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="max-container">

        <div id="category">

            <div class="title text-center py-3">Browse by Category</div>

            <div class="row py-4">
                <div class="col-md-3 text-center">
                    <a href="{{ route('products', []) }}" class="my-2" data-toggle="tooltip" data-placement="bottom" title="All Products">
                        <img src="images/salad.png" alt="All Products" />
                    </a>
                    <p class="p-2 text-center"><strong>All Products</strong>

                    </p>
                </div>

                <div class="col-md-3 text-center capitalization">
                    <a href="{{ route('products-by-category', ['category' => $categories[1]->id]) }}" data-toggle="tooltip" data-placement="bottom" title="{{ $categories[1]->name }}">
                        <img src="images/cabbage.png" alt="Vegetables" />
                    </a>
                    <p class="p-2 text-center"> <strong>{{ $categories[1]->name }}</strong>

                    </p>
                </div>
                <div class="col-md-3 text-center capitalization">
                    <a href="{{ route('products-by-category', ['category' => $categories[2]->id]) }}" data-toggle="tooltip" data-placement="bottom" title="{{ $categories[2]->name }}">
                        <img src="images/fruit.png" alt="Fruits" />
                    </a>
                    <p class="p-2 text-center"><strong>{{ $categories[2]->name }}</strong>

                    </p>
                </div>
                <div class="col-md-3 text-center capitalization">
                    <a href="{{ route('products-by-category', ['category' => $categories[0]->id]) }}" data-toggle="tooltip" data-placement="bottom" title="{{ $categories[0]->name }}">
                        <img src="images/dairy-products.png" alt="Dairy Products" />
                    </a>
                    <p class="p-2 text-center"><strong>{{ $categories[0]->name }}</strong>

                    </p>
                </div>

            </div>

        </div>
        <hr>
        <div id="reviews">
            <div class="sub-title text-center green-text">We provide better food to our customers every day</div>

            <div class="row py-4">

                @foreach ($reviews as $topReview)
                <div class="col-md-6">
                    <div class="text-center">
                        <img src="images/left-quote.png" alt="Left-quote">
                        <p>{{ $topReview->user->first_name }} Says</p>
                        <p>{{ $topReview->review }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <hr>

        @include('includes.featureProd-loop')

    </div>

    <div id="get_started">
        <div class="max-container">
            <div class="large-title green-text">Get Started</div>
            <div class="title black-text pb-4">FarmFresh food tastes good</div>
            <a href="/products" class="btn" data-toggle="tooltip" data-placement="bottom" title="View Products">View
                Products</a>
        </div>
    </div>
</div>
@endsection