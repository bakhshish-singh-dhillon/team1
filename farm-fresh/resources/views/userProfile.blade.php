@extends('layouts.app')

@section('content')
<div id="products">
    <div class="max-container py-4">
        <div class="row">
            <div class="col-md-3 left-part">
                <div class="title">User Profile</div>


            </div>
            <div class="col-md-9">
                <div class="title ">{{ $title }}

                    <ul>
                        <li>{{$user->email}}</li>
                        @if($user->is_subscribed == "0")
                        <li>You are not subscribed to our newsletter. Please subscribe to know deals and much more.</li>
                        @else
                        <li>Thank you for subscribing to out newsletter! We will keep you updated.</li>
                        @endif
                    </ul>

                    <ul>
                        @foreach ($orders as $order)
                        <div class="col-md-4 my-2">
                            <div class="card product-item">

                                <div class="card-body">

                                    <?php
                                    $decodedBillingAdd = json_decode($order['billing_address'], true);
                                    $decodedShippingAdd = json_decode($order['shipping_address'], true);
                                    ?>

                                    <ul class="float-left">

                                        <h3>Billing Address</h3>
                                        <li>Address type: {{$decodedBillingAdd['address_type']}}</li>
                                        <li>{{$decodedBillingAdd['address']}}</li>
                                        <li>{{$decodedBillingAdd['city']}}</li>
                                        <li>{{$decodedBillingAdd['province']}}</li>
                                        <li>{{$decodedBillingAdd['country']}}</li>
                                        <li>{{$decodedBillingAdd['postal_code']}}</li>
                                        <li>{{$decodedBillingAdd['phone']}}</li>

                                    </ul>
                                </div>
                                <div class="card-body">

                                    <ul class="float-right">
                                        <h3>Shipping Address</h3>
                                        <li>Address type: {{$decodedBillingAdd['address_type']}}</li>
                                        <li>{{$decodedShippingAdd['address']}}</li>
                                        <li>{{$decodedShippingAdd['city']}}</li>
                                        <li>{{$decodedShippingAdd['province']}}</li>
                                        <li>{{$decodedShippingAdd['country']}}</li>
                                        <li>{{$decodedShippingAdd['postal_code']}}</li>
                                        <li>{{$decodedShippingAdd['phone']}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </ul>

                </div>



            </div>

        </div>
    </div>
</div>
@endsection