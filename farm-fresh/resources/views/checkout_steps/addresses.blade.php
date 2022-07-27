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
                    <div id="user-addresses" data-addresses="{{ json_encode($addresses) }}">
                        <form action="{{ route('store-addresses') }}" method="POST" id="address_form"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="billing-address-id" :value="my_addresses[billing_address_id].id" v-if="billing_address_id && billing_address_id !== 'add-new'"/>
                            <input type="hidden" name="shipping-address-id" :value="my_addresses[shipping_address_id].id" v-if="shipping_address_id && shipping_address_id !== 'add-new'"/>
                            <div class="row">
                                <div class="col-md-6">
                                    <h2>Billing Address</h2>

                                    <div class="radio-billing-addresses">
                                        @foreach ($addresses as $key => $address)
                                            <input type="radio" class="btn-check" name="billing-address-options"
                                                value="{{ $key }}" id="billing-address-{{ $key }}"
                                                autocomplete="off" v-model="billing_address_id">
                                            <label class="btn btn-outline-primary"
                                                for="billing-address-{{ $key }}">{{ $address->address }}</label>
                                        @endforeach

                                        <input type="radio" class="btn-check" name="billing-address-options"
                                            value="add-new" id="billing-address-add-new" autocomplete="off"
                                            v-model="billing_address_id">
                                        <label class="btn btn-outline-primary" for="billing-address-add-new">Add New</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group mb-3">
                                            <label for="" class="col-form-label">Address Name</label>
                                            <input type="text" class="form-control" name="billing_address_type"
                                                id="billing_address_type" placeholder=""
                                                v-model="billing_address.address_type" />
                                            @error('billing_address_type')
                                                <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 form-group mb-3">
                                            <label for="" class="col-form-label">Address</label>
                                            <input type="text" class="form-control" name="billing_address"
                                                id="billing_address" placeholder="" v-model="billing_address.address" />
                                            @error('billing_address')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 form-group mb-3">
                                            <label for="" class="col-form-label">City</label>
                                            <input type="text" class="form-control" name="billing_city" id="billing_city"
                                                placeholder="Your City" v-model="billing_address.city" />
                                            @error('billing_city')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 form-group mb-3">
                                            <label for="" class="col-form-label">Province</label>
                                            <input type="text" class="form-control" name="billing_province"
                                                id="billing_province" placeholder="Your Province"
                                                v-model="billing_address.province" />
                                            @error('billing_province')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 form-group mb-3">
                                            <label for="" class="col-form-label">Country</label>
                                            <input type="text" class="form-control" name="billing_country"
                                                id="billing_country" placeholder="Your Country"
                                                v-model="billing_address.country" />
                                            @error('billing_country')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 form-group mb-3">
                                            <label for="" class="col-form-label">Postal Code</label>
                                            <input type="text" class="form-control" name="billing_postal_code"
                                                id="billing_postal_code" placeholder="Your Postal Code"
                                                v-model="billing_address.postal_code" />
                                            @error('billing_postal_code')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 form-group mb-3">
                                            <label for="" class="col-form-label">Phone</label>
                                            <input type="text" class="form-control" name="billing_phone"
                                                id="billing_phone" placeholder="Your phone"
                                                v-model="billing_address.phone" />
                                            @error('billing_phone')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h2>Shipping Address</h2>

                                    <div class="radio-shipping-addresses">
                                        @foreach ($addresses as $key => $address)
                                            <input type="radio" class="btn-check" name="shipping-address-options"
                                                value="{{ $key }}" id="shipping-address-{{ $key }}"
                                                autocomplete="off" v-model="shipping_address_id">
                                            <label class="btn btn-outline-primary"
                                                for="shipping-address-{{ $key }}">{{ $address->address }}</label>
                                        @endforeach

                                        <input type="radio" class="btn-check" name="shipping-address-options"
                                            value="add-new" id="shipping-address-add-new" autocomplete="off"
                                            v-model="shipping_address_id">
                                        <label class="btn btn-outline-primary" for="shipping-address-add-new">Add
                                            New</label>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group mb-3">
                                            <label for="" class="col-form-label">Address Type</label>
                                            <input type="text" class="form-control" name="shipping_address_type"
                                                id="shipping_address_type" placeholder=""
                                                v-model="shipping_address.address_type" />
                                            @error('shipping_address_type')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 form-group mb-3">
                                            <label for="" class="col-form-label">Address</label>
                                            <input type="text" class="form-control" name="shipping_address"
                                                id="shipping_address" placeholder=""
                                                v-model="shipping_address.address" />
                                            @error('shipping_address')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 form-group mb-3">
                                            <label for="" class="col-form-label">City</label>
                                            <input type="text" class="form-control" name="shipping_city"
                                                id="shipping_city" placeholder="Your City"
                                                v-model="shipping_address.city" />
                                            @error('shipping_city')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 form-group mb-3">
                                            <label for="" class="col-form-label">Province</label>
                                            <input type="text" class="form-control" name="shipping_province"
                                                id="shipping_province" placeholder="Your Province"
                                                v-model="shipping_address.province" />
                                            @error('shipping_province')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 form-group mb-3">
                                            <label for="" class="col-form-label">Country</label>
                                            <input type="text" class="form-control" name="shipping_country"
                                                id="shipping_country" placeholder="Your Country"
                                                v-model="shipping_address.country" />
                                            @error('shipping_country')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 form-group mb-3">
                                            <label for="" class="col-form-label">Postal Code</label>
                                            <input type="text" class="form-control" name="shipping_postal_code"
                                                id="shipping_postal_code" placeholder="Your Postal Code"
                                                v-model="shipping_address.postal_code" />
                                            @error('shipping_postal_code')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-md-12 form-group mb-3">
                                            <label for="" class="col-form-label">Phone</label>
                                            <input type="text" class="form-control" name="shipping_phone"
                                                id="shipping_phone" placeholder="Your phone"
                                                v-model="shipping_address.phone" />
                                            @error('shipping_phone')
                                                <span class="text-danger"> {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <input type="submit" value="Checkout"
                                                class="btn bg-green text-white rounded-0 py-2 px-4" />
                                            <span class="submitting"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
