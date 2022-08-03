@extends('layouts.app')

@section('content')
<div id="products">
    <div class="max-container py-4">
        <div class="row">
            <div class="col-md-3 left-part">
                <div></div>
                <div class="container category-list capitalization">
                    <ul class="p-0">
                        <li>
                            <a href="#address" class="my-2 btn" data-bs-toggle="collapse"><strong>Address</strong></a>
                        </li>
                        <li>
                            <a href="#review" class="my-2 btn" data-bs-toggle="collapse"><strong>Reviews</strong></a>
                        </li>
                        <li>
                            <a href="#order" class="my-2 btn" data-bs-toggle="collapse"><strong>Orders</strong></a>
                        </li>

                    </ul>
                </div>

            </div>
            <div class="col-md-9">
                <div class="title ">{{ $title }} </div>
                <div>
                    <ul>
                        <li>Email: {{$user->email}}</li>
                        @if($user->is_subscribed == "0")
                        <li>You are not subscribed to our newsletter.</li>
                        @else
                        <li>Thank you for subscribing to out newsletter! We will keep you updated.</li>
                        @endif
                    </ul>
                </div>
                <div class="col-md-12 my-4 ">
                    <div class="card product-item">
                        <div class="card-header">
                            <h4 class="h4 text-center">Address</h4>
                        </div>
                        <div id="address" class="collapse">
                            @if($addresses->isEmpty())
                            <p>There are no addresses associated to this user yet!</p>
                            @else
                            @foreach ($addresses as $address)
                            <div class="card-body">
                                <ul>
                                    <li>{{$address->address_type}} address ::
                                        {{$address->address}},
                                        {{$address->city}},
                                        {{$address->province}}
                                        {{$address->postal_code}},
                                        {{$address->country}}<br />
                                        Phone: {{$address->phone}}
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-md-12 my-4">
                    <div class="card product-item">
                        <div class="card-header">
                            <h4 class="h4 text-center">Reviews</h4>
                        </div>
                        <div id="review" class="collapse">
                            @if($reviews->isEmpty())
                            <p>There are no reviews provided by this user yet!</p>
                            @else
                            @foreach ($reviews as $review)
                            <div class="card-body">
                                <ul>
                                    <li>Date: {{$review->created_at}}<br />
                                        Review: {{$review->review}}<br />
                                        Rating: {{$review->rating}}
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-md-12 my-4">
                    <div class="card product-item">
                        <div class="card-header">
                            <h4 class="h4 text-center">Orders</h4>
                        </div>
                        <div id="order" class="collapse">
                            @if($orders->isEmpty())
                            <p>There are no orders placed by this user yet!</p>
                            @else
                            @foreach ($orders as $order)

                            <div class="card-body">
                                <ul>
                                    <li>Date: {{$order->created_at}}<br />
                                        Total: {{$order->total}}<br />
                                        Status: {{$order->order_status}}<br />
                                        Click <a href="/userOrder/{{$order->id}}">Here</a> to view more details about this order!
                                    </li>
                                </ul>
                            </div>
                            @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection