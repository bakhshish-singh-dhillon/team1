@extends('layouts.app')

@section('content')
<div class="container my-4" id="cart">
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <div class="card p-3">

                <div class="title pb-3">My Cart</div>
                <table class="cart">
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
                            <td class="p-2"><a class="text-decoration-none" href="{{ route('product', ['product' => $index]) }}">{{ $product['name'] }}</a>
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
                            <td class="p-2 text-right">$ {{ $bill['subtotal'] }} </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="v-title p-2 text-right">GST (0%)</td>
                            <td class="p-2 text-right">$ {{ $bill['gst'] }} </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="v-title p-2 text-right">PST (0%)</td>
                            <td class="p-2 text-right">$ {{ $bill['pst'] }} </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="v-title p-2 text-right">VAT (0%)</td>
                            <td class="p-2 text-right">$ {{ $bill['vat'] }} </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="v-title p-2 text-right">Delivery Charges</td>
                            <td class="p-2 text-right">$ {{ $bill['delivery_charges'] }} </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="v-title p-2 text-right"><strong>Total</strong></td>
                            <td class="p-2 text-right"><strong>$ {{ $bill['total'] }}</strong> </td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-between pt-3">
                    <a class="btn" href="/choose-addresses">Choose Address</a>
                    <form action="{{ route('clear-cart') }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Clear cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection