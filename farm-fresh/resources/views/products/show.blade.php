@extends('layouts.app')

@section('content')

<div id="detail">
    <div class="max-container py-4">
        <div class="row">
            <div class="col-md-6">
                <img src="/images/products/{{$prod->images()->first()->url}}" alt="{{$prod->images()->first()->url}}">
            </div>
            <div class="col-md-6">
                <div class="title product-title">{{$prod->name}}</div>

                <table class="detail-table">
                    <tr>
                        <th>Price:</th>
                        <td>$ {{$prod->price}} / {{$prod->measure_unit}}</td>
                    </tr>
                    <tr>
                        <th>Availability:</th>
                        <td>In Stock</td>
                    </tr>
                    <tr>
                        <th>Rating:</th>
                        <td>4.5 out of 5</td>
                    </tr>
                    <tr>
                        <th>Description:</th>
                        <td>{{$prod->description}}</td>
                    </tr>
                    <tr>
                        <th>Quantity:</th>
                        <td>
                            <select name="quantity" id="quantity">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select>

                            <a href="" class="btn">Add to Cart</a>
                        </td>
                    </tr>
                </table>

            </div>
        </div>
        <hr>
        <div id="reviews">

            <div class="row">
                <div class="title py-3 text-center">Customer Reviews</div>
                <div class="col-md-3">
                    <p>4.3 out of 5</p>
                    <div>
                        <p>5 star</p>
                        <div class="outer-box">

                            <span class="bar-5"></span>
                        </div>
                        <p>46%</p>
                    </div>
                </div>
                <div class="col-md-9">
                    <div>
                        <div class="review-title">Sargam Sanghani</div>
                        <div><small>Posted on 17th July, 2022</small></div>
                        <p class="my-2">4 out of 5</p>
                        <p>I had an amazing experience. Loved the food. It was a quick delivery. Thank you so much for your great service!</p>
                    </div>
                    <div>
                        <div class="review-title">Sargam Sanghani</div>
                        <div><small>Posted on 17th July, 2022</small></div>
                        <p class="my-2">4 out of 5</p>
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

                        <img class="card-img-top" src="/images/products/{{$prod->images()->first()->url}}" alt="{{$prod->images()->first()->url}}">
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
</div>
@endsection