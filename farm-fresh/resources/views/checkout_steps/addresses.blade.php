@extends('layouts.app')

@section('content')
<div class="max-container my-4" id="addresses">
    <div class="card p-3">
        <div class="title text-center mb-2">Order Addresses</div>

        <table class="text-center">
            <thead>
                <tr>
                    <th class="p-2">Product</th>
                    <th class="p-2">Price</th>
                    <th class="p-2">Quantity</th>
                    <th class="p-2">Line Price</th>
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
                </tr>
                @endforeach

                <tr>
                    <td colspan="3" class="v-title p-2 text-right">Sub total</td>
                    <td class="p-2">$ {{ $bill['subtotal'] }} </td>
                </tr>
                <tr>
                    <td colspan="3" class="v-title p-2 text-right">GST (0%)</td>
                    <td class="p-2">$ {{ $bill['gst'] }} </td>
                </tr>
                <tr>
                    <td colspan="3" class="v-title p-2 text-right">PST (0%)</td>
                    <td class="p-2">$ {{ $bill['pst'] }} </td>
                </tr>
                <tr>
                    <td colspan="3" class="v-title p-2 text-right">VAT (0%)</td>
                    <td class="p-2">$ {{ $bill['vat'] }} </td>
                </tr>
                <tr>
                    <td colspan="3" class="v-title p-2 text-right">Delivery Charges </td>
                    <td class="p-2">$ {{ $bill['delivery_charges'] }} </td>
                </tr>
                <tr>
                    <td colspan="3" class="v-title p-2 text-right"><strong>Total</strong></td>
                    <td class="p-2"><strong>$ {{ $bill['total'] }}</strong> </td>
                </tr>
            </tbody>
        </table>
        <hr>
        <div id="user-addresses" data-addresses="{{ $addresses?json_encode($addresses):json_encode([]) }}" data-old_inputs="{{ Session::getOldInput()?json_encode(Session::getOldInput()):json_encode([]) }}">
            <form action="{{ route('store-addresses') }}" method="POST" id="address_form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="billing_address_id" :value="user_addresses[billing_address_id].id" v-if="billing_address_id && billing_address_id !== 'add-new'" />
                <input type="hidden" name="shipping_address_id" :value="user_addresses[shipping_address_id].id" v-if="shipping_address_id && shipping_address_id !== 'add-new'" />
                <div class="row">
                    <div class="col-md-6">
                        <div class="sub-title mb-3">Billing Address</div>

                        <div class="radio-billing-addresses">
                            <div>
                                <label for="billing_address_options">Choose from existing addresses:</label>
                                <div class="d-flex gap-1 mb-3">
                                    <select name="billing_address_options" id="billing_address_options" class="form-select" v-model="billing_address_id">
                                        <option value="" disabled selected>Select address</option>
                                        <option value="add-new" id="billing-address-add-new" >Add New</option>
                                        @foreach ($addresses as $key => $address)
                                        <option value="{{ $key }}" id="billing-address-{{ $key }}">{{ $address->address }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group mb-1">
                                <label for="billing_address_type" class="col-form-label">Address Name <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" name="billing_address_name" id="billing_address_type" v-model="billing_address.address_type" />
                                @error('billing_address_name')
                                <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group mb-1">
                                <label for="billing_address" class="col-form-label">Address <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" name="billing_address" id="billing_address" v-model="billing_address.address" />
                                @error('billing_address')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group mb-1">
                                <label for="billing_city" class="col-form-label">City <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" name="billing_city" id="billing_city" placeholder="Your City" v-model="billing_address.city" />
                                @error('billing_city')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group mb-1">
                                <label for="billing_province" class="col-form-label">Province <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" name="billing_province" id="billing_province" placeholder="Your Province" v-model="billing_address.province" />
                                @error('billing_province')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group mb-1">
                                <label for="billing_country" class="col-form-label">Country <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" name="billing_country" id="billing_country" placeholder="Your Country" v-model="billing_address.country" />
                                @error('billing_country')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group mb-1">
                                <label for="billing_postal_code" class="col-form-label">Postal Code <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" name="billing_postal_code" id="billing_postal_code" placeholder="Your Postal Code" v-model="billing_address.postal_code" />
                                @error('billing_postal_code')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group mb-1">
                                <label for="billing_phone" class="col-form-label">Phone <span class="text-danger">*</span> </label>
                                <input type="text" class="form-control" name="billing_phone" id="billing_phone" placeholder="Your phone" v-model="billing_address.phone" />
                                @error('billing_phone')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="sub-title mb-3 shipping-title">Shipping Address</div>

                        <div class="radio-shipping-addresses">
                            <div>
                                <label for="shipping_address_options">Choose from existing addresses:</label>
                                <div class="d-flex gap-1 mb-3">
                                    <select name="shipping_address_options" id="shipping_address_options" class="form-select" v-model="shipping_address_id">
                                        <option value="" disabled selected>Select address</option>
                                        <option value="add-new" id="shipping-address-add-new" >Add New</option>
                                        @foreach ($addresses as $key => $address)
                                        <option value="{{ $key }}" id="shipping-address-{{ $key }}">{{ $address->address }}</option>
                                        @endforeach
                                </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group mb-1">
                                <label for="shipping_address_type" class="col-form-label">Address Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="shipping_address_name" id="shipping_address_type" v-model="shipping_address.address_type" />
                                @error('shipping_address_name')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group mb-1">
                                <label for="shipping_address" class="col-form-label">Address <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="shipping_address" id="shipping_address" v-model="shipping_address.address" />
                                @error('shipping_address')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group mb-1">
                                <label for="shipping_city" class="col-form-label">City <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="shipping_city" id="shipping_city" placeholder="Your City" v-model="shipping_address.city" />
                                @error('shipping_city')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group mb-1">
                                <label for="shipping_province" class="col-form-label">Province <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="shipping_province" id="shipping_province" placeholder="Your Province" v-model="shipping_address.province" />
                                @error('shipping_province')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group mb-1">
                                <label for="shipping_country" class="col-form-label">Country <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="shipping_country" id="shipping_country" placeholder="Your Country" v-model="shipping_address.country" />
                                @error('shipping_country')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group mb-1">
                                <label for="shipping_postal_code" class="col-form-label">Postal Code <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="shipping_postal_code" id="shipping_postal_code" placeholder="Your Postal Code" v-model="shipping_address.postal_code" />
                                @error('shipping_postal_code')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-12 form-group mb-1">
                                <label for="shipping_phone" class="col-form-label">Phone <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="shipping_phone" id="shipping_phone" placeholder="Your phone" v-model="shipping_address.phone" />
                                @error('shipping_phone')
                                <span class="text-danger"> {{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                    </div>
                    <div class="">
                        <div class="mt-2 form-group text-center">
                            <button type="submit" class="btn">Checkout</button>
                            <span class="submitting"></span>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection