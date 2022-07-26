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
                    <div id="user-addresses">
                        <form action="/contact" method="post" id="contactForm" name="contactForm">
                            @csrf
                            <div class="row">
                              <div class="col-md-6">
                                <h2>Billing Address</h2>
                        
                                <div class="row">
                                  <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Address Name</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      name="billing_address_type"
                                      id="billing_address_type"
                                      placeholder=""
                                      v-model="message"
                                    />
                                    @error('billing_address_type')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                  </div>
                                  <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Address</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      name="billing_address"
                                      id="billing_address"
                                      placeholder=""
                                    />
                                    @error('billing_address')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                  </div>
                                  <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Country</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      name="billing_country"
                                      id="billing_country"
                                      placeholder="Your Country"
                                    />
                                    @error('billing_country')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                  </div>
                                  <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Province</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      name="billing_province"
                                      id="billing_province"
                                      placeholder="Your Province"
                                    />
                                    @error('billing_province')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                  </div>
                                  <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Postal Code</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      name="billing_postal_code"
                                      id="billing_postal_code"
                                      placeholder="Your Postal Code"
                                    />
                                    @error('billing_postal_code')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                  </div>
                                  <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Phone</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      name="billing_phone"
                                      id="billing_phone"
                                      placeholder="Your phone"
                                    />
                                    @error('billing_phone')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                  </div>
                                </div>
                              </div>
                              <div class="col-md-6">
                                <h2>Shipping Address</h2>
                                <div class="row">
                                  <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Address</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      name="shipping_address"
                                      id="shipping_address"
                                      placeholder=""
                                    />
                                    @error('shipping_address')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                  </div>
                                  <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Country</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      name="shipping_country"
                                      id="shipping_country"
                                      placeholder="Your Country"
                                    />
                                    @error('shipping_country')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                  </div>
                                  <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Province</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      name="shipping_province"
                                      id="shipping_province"
                                      placeholder="Your Province"
                                    />
                                    @error('shipping_province')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                  </div>
                                  <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Postal Code</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      name="shipping_postal_code"
                                      id="shipping_postal_code"
                                      placeholder="Your Postal Code"
                                    />
                                    @error('shipping_postal_code')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                  </div>
                                  <div class="col-md-12 form-group mb-3">
                                    <label for="" class="col-form-label">Phone</label>
                                    <input
                                      type="text"
                                      class="form-control"
                                      name="shipping_phone"
                                      id="shipping_phone"
                                      placeholder="Your phone"
                                    />
                                    @error('shipping_phone')
                                    <span class="text-danger"> {{ $message }}</span>
                                    @enderror
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12 form-group">
                                    <input
                                      type="submit"
                                      value="Send Message"
                                      class="btn bg-green text-white rounded-0 py-2 px-4"
                                    />
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
