@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="row justify-content-center text-left">
        <div class="col-md-8">
            <div class="card p-4">

                <h1>Order placed successfully!</h1>
                <div id="invoice_content p-3">
                    <table id="content-table text-left " style="min-width: 100%;">
                        <thead>
                            <tr class="border-bottom">
                                <th>Company Info</th>
                                <th>User Info</th>
                                <th>Order Info</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-bottom">
                                <td>
                                    <p class="text-left">
                                        <strong>Farm-Fresh International ltd.</strong><br />
                                        Fresh Foods Alliance Group<br />
                                        111 Whitley Drive,<br />
                                        Silicon Valley, California, 98715<br />
                                        USA R2L 6J7<br />
                                        <br />
                                    </p>
                                    <p class="text-left">
                                        <strong>Queries about your order</strong><br />
                                        <strong>tel-</strong> 1-111-111-1234<br />
                                        <strong>email-</strong><a href="#"> ecom.farmfresh@gmail.com</a><br />
                                        Have a great visit. Good day!<br />
                                    </p>
                                </td>
                                <td class="py-0 align-top">
                                    <p class="text-left">
                                        <strong>First Name: </strong> {{$order->user->first_name}}<br />
                                        <strong>Last Name: </strong> {{$order->user->last_name}}<br />
                                        <strong>Email: </strong> {{$order->user->email}}<br /><br />
                                        <strong>Shipping Address: </strong><br />
                                        <strong>Street : </strong> {{$address->address}}<br />
                                        <strong>City/Province : </strong> {{$address->city}},{{$address->province}}<br />
                                        <strong>Postal Code: </strong> {{$address->postal_code}}<br />
                                        <strong>Phone: </strong> +{{$address->phone}}<br />
                                    </p>
                                </td>
                                <td class="text-left align-top">
                                    <p class="text-left  py-0">
                                        <strong>Order Number :</strong> {{$order->id}}<br />
                                        <strong>Order Date :</strong> {{$order->created_at}}<br />
                                        <strong>Charged To Card :</strong> ${{$order->total}}<br />
                                        <strong>Credit Card :</strong> ************{{$order->transactions()->latest()->first()->cc_num}}<br />
                                        <strong>Status :</strong> {{$order->order_status}}<br />
                                        <strong>Auth Code :</strong> {{$order->auth_code}}<br />
                                    </p>
                                    <p>
                                        Please print this invoice for reference.
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <table id="content-table2" style="min-width: 100%;">
                        <thead>
                            <tr>
                                <th>Product Name </th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th class="text-end">Line Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->order_line_items as $line_item)
                            <tr>
                                <td>{{$line_item->product->name}}</td>
                                <td>{{$line_item->unit_price}}$</td>
                                <td>{{$line_item->quantity}}</td>
                                <td class="text-end">{{$line_item->unit_price * $line_item->quantity}}$</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="3" class="text-end">Sub total</td>
                                <td class="text-end">{{$sub_total}}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end">GST(5%)</td>
                                <td class="text-end">{{$gst}}$</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end">PST(7%)</td>
                                <td class="text-end">{{$pst}}$</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end">TOTAL</td>
                                <td class="text-end">{{$total}}$</td>
                            </tr>
                        </tbody>
                    </table>
                    <div><a href="/products" class="btn" title="view">Continue Shopping</a></div>
                </div>
            </div>
        </div>
    </div>
    @endsection