@extends('layouts.app')

@section('content')
<div id="products">
    <div class="max-container py-4">
        <div class="row">
            <div class="col-md-3 left-part">
                <div class="title">Categories</div>

                <div class="category-list capitalization">
                    <ul class="p-0">
                        <li>
                            <a href="{{ route('products', []) }}" class="my-2" data-toggle="tooltip" data-placement="bottom" title="All Products"><strong>All Products</strong></a>
                        </li>
                        @include('products.recursive', ['categories' => $categories])
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="title p-3">{{ $title }} ({{ $products->total() }})
                    <div class="float-right">
                        <form action="{{ route('products-by-search', []) }}" method="get" autocomplete="off" novalidate>
                            <input class="form-control p-1" type="text" placeholder="Search" name="search" maxlength="255" data-toggle="tooltip" data-placement="bottom" title="Search" />&nbsp;
                            <input type="submit" hidden value="search" />
                        </form>
                    </div>
                </div>
                <div class="row p-3" id="featured">
                    @foreach ($products as $prod)
                    <div class="col-md-4 col-sm-6 col-xs-6 my-2">
                        <div class="card product-item">
                            <img class="card-img-top" src="{{ $images_path . $prod->images()->first()->url }}" alt="{{ $prod->images()->first()->url }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $prod->name }}</h5>
                                <p class="card-text">$ {{ $prod->price }} / {{ $prod->measure_unit }}</p>
                                <p class="ellipsis-text">{{ $prod->description }}</p>
                                <a href="/products/show/{{ $prod->id }}" class="btn hanging-btn product-item" data-toggle="tooltip" data-placement="bottom" title="{{ $prod->name }}">View</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="pagination content-center justify-content-center">

                    {!! $products->links('pagination::bootstrap-5') !!}

                </div>

            </div>

        </div>
    </div>
</div>
@endsection