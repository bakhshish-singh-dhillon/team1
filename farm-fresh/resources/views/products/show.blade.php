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
                                    <input type="text" name="qty" class="qty" maxlength="12" value="1" class="input-text qty" disabled />
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

                        @if(count($product->reviews()->get()) == 0)
                        <p>{{$avgRating}} out of 5
                            <small>({{count($product->reviews()->get())}} ratings)</small>
                        </p>

                        @else
                        <p>{{$avgRating}} out of 5
                            <small>({{count($product->reviews()->get())}} ratings)</small>
                        </p>
                        <div>
                            <div>
                                <div>
                                    @if($perFives >= 0 )
                                    <p class="m-0 mt-1"><small>5 star ({{$perFives ?? 0}}%)</small></p>
                                    <div class="outer-box">

                                        <div class="bar-5" style="width: {{$perFives ?? 0}}%;"></div>
                                    </div>
                                    @endif
                                </div>
                                <div>
                                    @if($perFours >= 0)
                                    <p class="m-0 mt-1"><small>4 star ({{$perFours ?? 0}}%)</small></p>
                                    <div class="outer-box">

                                        <div class="bar-5" style="width: {{$perFours ?? 0}}%;"></div>
                                    </div>
                                    @endif
                                </div>
                                <div>
                                    @if($perThrees >= 0)
                                    <p class="m-0 mt-1"><small>3 star ({{$perThrees ?? 0}}%)</small></p>
                                    <div class="outer-box">

                                        <div class="bar-5" style="width: {{$perThrees ?? 0}}%;"></div>
                                    </div>
                                    @endif
                                </div>
                                <div>
                                    @if($perTwos >= 0)
                                    <p class="m-0 mt-1"><small>2 star ({{$perTwos ?? 0}}%)</small></p>
                                    <div class="outer-box">

                                        <div class="bar-5" style="width: {{$perTwos ?? 0}}%;"></div>
                                    </div>
                                    @endif
                                </div>
                                <div>
                                    @if($perOnes >= 0)
                                    <p class="m-0 mt-1"><small>1 star ({{$perOnes ?? 0}}%)</small></p>
                                    <div class="outer-box">

                                        <div class="bar-5" style="width: {{$perOnes ?? 0}}%;"></div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                    <div class="col-md-9">

                        @if(count($product->reviews()->get()) == 0)
                        <p>We found 0 matching reviews</p>
                        <p>Be the first!</p>
                        <button class="btn">Write a review</button>
                        @else
                        @foreach ($reviews as $review)
                        <div>

                            <div class="review-title">{{ $review->user->first_name }} {{ $review->user->last_name }}
                            </div>
                            <div><small>Posted on 17th July, 2022</small></div>
                            <p class="my-2">{{ $review->rating }} out of 5</p>

                            <p>{{ $review->review }}</p>

                        </div>
                        @endforeach

                        @endif
                        <div class="pagination content-center justify-content-center">

                            {!! $reviews->links() !!}

                        </div>

                    </div>

                </div>
                <hr>
            </div>

            @include('includes.featureProd-loop')
        </div>
    </div>
</div>
@endsection