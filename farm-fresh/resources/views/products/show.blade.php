@extends('layouts.app')

@section('content')

<div id="detail">
    <div class="max-container py-4">
        <div class="row">
            <div class="col-md-6">
                <img src="{{$images_path.$prod->images()->first()->url}}" alt="{{$prod->images()->first()->url}}">
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
                        <div>
                            <p class="m-0 mt-1"><small>5 star (46%)</small></p>
                            <div class="outer-box">

                                <div class="bar-5" style="width: 46%;"></div>
                            </div>
                        </div>
                        <div>
                            <p class="m-0 mt-1"><small>4 star (46%)</small></p>
                            <div class="outer-box">

                                <div class="bar-5" style="width: 46%;"></div>
                            </div>
                        </div>
                        <div>
                            <p class="m-0 mt-1"><small>3 star (46%)</small></p>
                            <div class="outer-box">

                                <div class="bar-5" style="width: 46%;"></div>
                            </div>
                        </div>
                        <div>
                            <p class="m-0 mt-1"><small>2 star (46%)</small></p>
                            <div class="outer-box">

                                <div class="bar-5" style="width: 46%;"></div>
                            </div>
                        </div>
                        <div>
                            <p class="m-0 mt-1"><small>1 star (0%)</small></p>
                            <div class="outer-box">

                                <div class="bar-5" style="width: 0%;"></div>
                            </div>
                        </div>
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

        @include('includes.featureProd-loop')

    </div>
</div>
@endsection