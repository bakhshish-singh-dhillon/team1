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
                            <a href="{{route('products', [])}}" class="my-2"><strong>All Products</strong></a>
                        </li>
                        @foreach($categories as $cat)
                        <li><a href="{{route('products-by-category',['category'=>$cat->id])}}"><strong>{{$cat->name}}</strong></a>
                            <ul>
                                @foreach($cat->children()->get() as $child)
                                <li><a href="{{route('products-by-category',['category'=>$child->id])}}">{{$child->name}}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="title">All Products ({{count($products)}})
                    <!-- <div class="float-right"><input type="text" placeholder="Search"></div> -->
                    <div class="float-right">
                        <form action="?p=products" method="get" autocomplete="off" novalidate>
                            <input type="hidden" name="p" value="products">
                            <input class="search" type="text" placeholder="Search" name="search" maxlength="255" />&nbsp;
                            <input type="submit" hidden value="search" />
                        </form>
                    </div>
                </div>
                <div class="row">
                    @foreach($products as $prod)
                    <div class="col-md-4 my-2">
                        <div class="card">
                            <img class="card-img-top" src="{{$images_path.$prod->images()->first()->url}}" alt="{{$prod->images()->first()->url}}">
                            <div class="card-body">
                                <h5 class="card-title">{{$prod->name}}</h5>
                                <p class="card-text">$ {{$prod->price}} / {{$prod->measure_unit}}</p>
                                <p class="ellipsis-text">{{$prod->description}}</p>
                                <a href="/products/show/{{$prod->id}}" class="btn">View</a>
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