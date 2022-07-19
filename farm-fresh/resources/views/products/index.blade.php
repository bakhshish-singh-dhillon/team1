@extends('layouts.app')

@section('content')


<div id="products">
    <div class="max-container py-4">
        <div class="row">
            <div class="col-md-3 left-part">
                <div class="title">Categories</div>

                <div class="category-list">
                    <ul class="p-0">
                        <li>
                            <a href="" class="my-2"><strong>All Products</strong></a>
                        </li>
                        <li><a href=""><strong>Fruits</strong></a>
                            <ul class="">
                                <li><a href="">Tropical</a></li>
                                <li><a href="">Berries</a></li>
                            </ul>
                        </li>
                        <li><a href="" class="my-2"><strong>Veggies</strong></a></li>
                        <li><a href="" class="my-2"><strong>Dairy Products</strong></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="title">All Products (4)
                    <div class="float-right"><input type="text" placeholder="Search"></div>
                </div>
                <div class="row">
                    @foreach($products as $prod)
                    <div class="col-md-4 my-2">
                        <div class="card">
                            <img class="card-img-top" src="images/products/{{$prod->images()->first()->url}}" alt="{{$prod->images()->first()->url}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$prod->name}}</h5>
                                <p class="card-text">$ {{$prod->price}} / {{$prod->measure_unit}}</p>
                                <p class="ellipsis-text">{{$prod->description}}</p>
                                <a href="#" class="btn">View</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection