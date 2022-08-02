@extends('layouts.app')

@section('content')
<div id="products">
    <div class="max-container py-4">
        <div class="row">
            <div class="col-md-3 left-part">
                <div class="title">User Profile</div>
            </div>
            <div class="col-md-9">
                <div class="title ">{{ $title }} </div>

                <ul>
                    <li>Email: {{$user->email}}</li>
                    @if($user->is_subscribed == "0")
                    <li>You are not subscribed to our newsletter. Please subscribe to know deals and much more.</li>
                    @else
                    <li>Thank you for subscribing to out newsletter! We will keep you updated.</li>
                    @endif
                </ul>

                <div class="col-md-12 my-4">
                    <div class="card product-item">
                        <div class="card-header">
                            <h4 class="h4 text-center">Adresses</h4>
                        </div>

                        @if($addresses->isEmpty())
                        <p>There are no adresses associated to this user yet!</p>
                        @else
                        @foreach ($addresses as $address)
                        <div class="card-body">
                            <ul>
                                <li>{{$address->address_type}} adress ::
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

                <div class="col-md-12 my-4">
                    <div class="card product-item">
                        <div class="card-header">
                            <h4 class="h4 text-center">Reviews</h4>
                        </div>
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

                <div class="col-md-12 my-4">
                    <div class="card product-item">
                        <div class="card-header">
                            <h4 class="h4 text-center">Orders</h4>
                        </div>
                        @if($orders->isEmpty())
                        <p>There are no orders placed by this user yet!</p>
                        @else
                        @foreach ($orders as $order)

                        <div class="card-body">
                            <ul>
                                <li>Date: {{$order->created_at}}<br />
                                    Total: {{$order->total}}<br />
                                    Status: {{$order->order_status}}<br />
                                    <a href="/thank-you/{{$order->id}}">View</a>

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