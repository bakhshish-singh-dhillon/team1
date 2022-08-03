@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <div class="card p-3">

                <div class="title pb-3">My Cart</div>
                <table>
                    <thead>
                        <tr>
                            <th class="p-2">Product</th>
                            <th class="p-2">Price</th>
                            <th class="p-2">Quantity</th>
                            <th class="p-2">Line Price</th>
                            <th class="p-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (session()->get('cart') as $index => $product)
                        <tr>
                            <td class="p-2"><a href="{{ route('product', ['product' => $index]) }}">{{ $product['name'] }}</a>
                            </td>
                            <td class="p-2">$ {{ $product['price'] }}</td>
                            <td class="p-2">{{ $product['quantity'] }}</td>
                            <td class="p-2">$ {{ $product['line_price'] }}</td>
                            <td class="p-2">
                                <form method="post" action="{{ route('remove-cart-item', ['product' => $index]) }}">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" value="{{ $index }}" name="id">
                                    <button type="submit" class="btn btn-danger" name="submit"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                        <tr>
                            <td colspan="4" class="v-title p-2 text-right">Sub total</td>
                            <td class="p-2">${{ $bill['subtotal'] }} </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="v-title p-2 text-right">GST (0%)</td>
                            <td class="p-2">${{ $bill['gst'] }} </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="v-title p-2 text-right">PST (0%)</td>
                            <td class="p-2">${{ $bill['pst'] }} </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="v-title p-2 text-right">Total</td>
                            <td class="p-2">${{ $bill['total'] }} </td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-between">
                    <a class="btn" href="/choose-addresses" method="post">Choose Address</a>
                    <form action="{{ route('clear-cart') }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger" name="submit" value="Clear Cart">
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection