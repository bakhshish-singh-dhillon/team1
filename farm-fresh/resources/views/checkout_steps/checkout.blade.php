@extends('layouts.app')

@section('content')
    <div class="container my-4">
        <div class="row justify-content-center text-center">
            <div class="col-md-8">
                <div class="card">
                    <h1>Checkout</h1>

                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Line Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach (session()->get('cart') as $index => $product)
                                <tr>
                                    <td><a
                                            href="{{ route('product', ['product' => $index]) }}">{{ $product['name'] }}</a>
                                    </td>
                                    <td>$ {{ $product['price'] }}</td>
                                    <td>{{ $product['quantity'] }}</td>
                                    <td>{{ $product['line_price'] }}</td>
                                </tr>
                            @endforeach

                            <tr>
                                <td colspan="3" class="v-title">Subtotal</td>
                                <td>${{ $bill['subtotal'] }} </td>
                            </tr>
                            <tr>
                                <td colspan="3" class="v-title">PST</td>
                                <td>${{ $bill['pst'] }} </td>
                            </tr>
                            <tr>
                                <td colspan="3" class="v-title">GST</td>
                                <td>${{ $bill['gst'] }} </td>
                            </tr>
                            <tr>
                                <td colspan="3" class="v-title">Total</td>
                                <td>${{ $bill['total'] }} </td>
                            </tr>
                        </tbody>
                    </table>
                    <form action="{{ route('checkout') }}" method="POST" id="checkout_form"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <h2>Payment Details</h2>
                                <div class="my-3">
                                    <div class="form-check">
                                        <input id="credit" name="paymentMethod" type="radio" class="form-check-input"
                                            checked="" required="">
                                        <label class="form-check-label" for="credit">Credit card</label>
                                    </div>
                                    <div class="form-check">
                                        <input id="debit" name="paymentMethod" type="radio" class="form-check-input"
                                            required="">
                                        <label class="form-check-label" for="debit">Debit card</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 form-group mb-3">
                                        <label for="name-on-card" class="col-form-label">Name on card</label>
                                        <input type="text" class="form-control" name="name_on_card" id="name-on-card"
                                            placeholder="" />
                                        @error('name_on_card')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-12 form-group mb-3">
                                        <label for="card-number" class="col-form-label">Card Number</label>
                                        <input type="text" class="form-control" name="card_number" id="card-number"
                                            placeholder="" />
                                        @error('card_number')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="card-number" class="col-form-label">Expiration</label>
                                        <input type="text" class="form-control" name="card_number" id="card-number"
                                            placeholder="" />
                                        @error('card_number')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group mb-3">
                                        <label for="card-number" class="col-form-label">CVV</label>
                                        <input type="text" class="form-control" name="card_number" id="card-number"
                                            placeholder="" />
                                        @error('card_number')
                                            <span class="text-danger"> {{ $message }} </span>
                                        @enderror
                                    </div>
                                </div>
                                <hr class="my-4">
                                <button class="w-100 btn btn-primary btn-lg" type="submit">Make Payment</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection
