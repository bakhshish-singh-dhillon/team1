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
                                    <td><a href="{{route('product',['product'=>$index])}}">{{ $product['name'] }}</a> </td>
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
                    <div id="address_handler">
                        <user-addresses></user-addresses>
                    </div>
                </div>
            </div>
        </div>
    @endsection
