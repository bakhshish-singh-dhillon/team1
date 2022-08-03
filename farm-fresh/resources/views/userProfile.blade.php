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

                <!-- <ul>

                    <li>Email: {{$user->email}}</li>
                    @if($user->is_subscribed == "0")
                    <li>You are not subscribed to our newsletter. Please subscribe to know deals and much more.</li>
                    @else
                    <li>Thank you for subscribing to out newsletter! We will keep you updated.</li>
                    @endif
                </ul> -->
                <div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="first_name" class="col-md-4 col-form-label text-md-start">{{ __('First name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="last_name" class="col-md-4 col-form-label text-md-start">{{ __('Last name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                                @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-start">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                    </form>
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