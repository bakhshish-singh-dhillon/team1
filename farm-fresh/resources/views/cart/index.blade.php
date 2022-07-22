@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <div class="card">

                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Line Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (session()->get('cart') as $index => $product)
                        <tr>
                            <td>{{ $product['name'] }}</td>
                            <td>$ {{ $product['price'] }}</td>
                            <td>{{ $product['quantity'] }}</td>
                            <td>{{ $product['line_price'] }}</td>
                            <td>
                                <form method="post" action="{{ route('remove-cart-item', ['product' => $index]) }}">
                                    @csrf
                                    @method('DELETE')
                                    @csrf
                                    <input type="hidden" value="{{ $index }}" name="id">
                                    <input type="submit" class="button" name="submit" value="Delete">
                                </form>
                            </td>
                        </tr>
                        @endforeach

                        <tr>
                            <td colspan="4" class="v-title">Subtotal</td>
                            <td>${{ $bill['subtotal'] }} </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="v-title">PST</td>
                            <td>${{ $bill['pst'] }} </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="v-title">GST</td>
                            <td>${{ $bill['gst'] }} </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="v-title">Total</td>
                            <td>${{ $bill['total'] }} </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection