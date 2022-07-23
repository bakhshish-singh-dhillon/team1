@extends('layouts.app')

@section('content')

<div id="detail">
    <div class="max-container py-4">
        <div class="row">
            <div class="col-md-6">
                <img src="{{$images_path.$product->images()->first()->url}}" alt="{{$product->images()->first()->url}}">
            </div>
            <div class="col-md-6">
                <div class="title product-title">{{$product->name}}</div>

                <table class="detail-table">
                    <tr>
                        <th>Price:</th>
                        <td>$ {{$product->price}} / {{$product->measure_unit}}</td>
                    </tr>
                    <tr>
                        <th>Availability:</th>
                        @if((int)$product->quantity == 0)
                        <td>Out of Stock</td>
                        @else
                        <td>In Stock</td>
                        @endif
                    </tr>
                    <tr>
                        <th>Rating:</th>
                        <td>{{$avgRating}} out of 5</td>
                    </tr>
                    <tr>
                        <th>Description:</th>
                        <td>{{$product->description}}</td>
                    </tr>
                    <tr>
                        <th>Quantity:</th>
                        <td id="quantity" class="d-flex">
                            <form class="d-flex" action="{{ route('add-to-cart', ['product' => $product->id]) }}" method="get">
                                <div>
                                    <i id="plus" class="fa-solid fa-plus"></i>
                                    <input type="text" name="qty" class="qty" maxlength="12" value="1" class="input-text qty" />
                                    <i id="minus" class="fa-solid fa-minus"></i>
                                </div>

                                <button type="submit" class="btn">Add to Cart </button>

                            </form>

                        </td>
                    </tr>
                </table>

            </div>
            <hr>
            <div id="reviews">

                <div class="row">
                    <div class="title py-3 text-center">Customer Reviews</div>
                    <div class="col-md-3">
                        <p>{{$avgRating}} out of 5
                            <small>({{count($product->reviews()->get())}} ratings)</small>
                        </p>

                        <div>
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
                    </div>
                    <div class="col-md-9">

                        @foreach ($product->reviews()->get() as $review)
                        <div>

                            <div class="review-title">{{ $review->user->first_name }} {{ $review->user->last_name }}
                            </div>
                            <div><small>Posted on 17th July, 2022</small></div>
                            <p class="my-2">{{ $review->rating }} out of 5</p>

                            <p>{{ $review->review }}</p>

                        </div>
                        @endforeach
                    </div>

                </div>
                <hr>
            </div>

            @include('includes.featureProd-loop')
        </div>
    </div>
</div>
@endsection