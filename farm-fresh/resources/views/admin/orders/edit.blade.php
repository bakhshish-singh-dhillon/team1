@extends('layouts/admin/app')

@section('content')
<div class="title black-text py-3">Orders</div>
<div class="">
    <div class="card">
        <div class="card-header">
            <h4 class="m-0">View Order : {{ $order->id}}</h4>
        </div>
        <div class="card-body">
            <div class="mx-auto container">

                <div class="invoice_content p-3">
                    <table class="content-table text-left" style="min-width: 100%;">
                        <thead>
                            <tr class="border-bottom">
                                <th class="py-2">User Info</th>
                                <th class="py-2">Order Info</th>
                                <th class="py-2">Transaction(s)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-bottom">
                                <td class="pt-2 py-0 align-top">
                                    <p class="text-left">
                                        <strong>First Name: </strong> {{$order->user->first_name}}<br />
                                        <strong>Last Name: </strong> {{$order->user->last_name}}<br />
                                        <strong>Email: </strong> {{$order->user->email}}<br /><br />
                                        <strong>Shipping Address: </strong><br />
                                        <strong>Street : </strong> {{$address->address}}<br />
                                        <strong>City / Province : </strong> {{$address->city}},{{$address->province}}<br />
                                        <strong>Postal Code: </strong> {{$address->postal_code}}<br />
                                        <strong>Phone: </strong> +{{$address->phone}}<br />
                                    </p>
                                </td>
                                <td class="pt-2 text-left align-top">
                                    <div class="text-left  py-0">
                                        <strong>Order Number :</strong> {{$order->id}}<br />
                                        <strong>Order Date :</strong> {{$order->created_at}}<br />
                                        <strong>Charged To Card :</strong> $ {{$order->total}}<br />
                                        <strong>Auth Code :</strong> {{$order->auth_code}}<br />
                                        <strong>Status :</strong> {{$order->order_status}}
                                        <form id="order_status_update_form" method="post" action="{{ route('order-update', ['order' => $order->id]) }}">
                                            @csrf
                                            @method('PUT')
                                            <label class="form-label" for="order_status">Update Status:
                                            </label>
                                            <select name="order_status" id="order_status" class="form-control w-75">
                                                <option value="">Select status</option>
                                                <option value="Pending" <?= $order->order_status == 'Pending' ? 'selected' : '' ?>>Pending</option>
                                                <option value="Shipped" <?= $order->order_status == "Shipped" ? 'selected' : '' ?>>Shipped</option>
                                                <option value="Delivered" <?= $order->order_status == "Delivered" ? 'selected' : '' ?>>Delivered</option>
                                                <option value="Cancelled" <?= $order->order_status == "Cancelled" ? 'selected' : '' ?>>Cancelled</option>
                                            </select>
                                        </form><br />

                                    </div>
                                </td>
                                <td class="pt-2 text-left align-top">
                                    @foreach($order->transactions as $transaction)
                                    <div class="text-left  py-0">

                                        <strong>Transaction ID :</strong> {{$transaction->payment_transaction_id}}<br />
                                        <strong>Credit Card :</strong> **** **** **** {{$transaction->cc_num}}<br />
                                        <strong>Status :</strong> {{$order->transaction_status}}<br />
                                        <strong>Date :</strong> {{$transaction->created_at}}
                                        @if(count($order->transactions) >1)
                                        <p class="border-bottom"></p>
                                        @endif
                                    </div>
                                    @endforeach
                                </td>

                            </tr>
                        </tbody>
                    </table>

                    <table id="content-table2" style="min-width: 100%;">
                        <thead>
                            <tr>
                                <th class="p-1">Product Name </th>
                                <th class="p-1">Price</th>
                                <th class="text-end p-1">Quantity</th>
                                <th class="text-end p-1">Line Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->order_line_items as $line_item)
                            <tr>
                                <td class="p-1">{{$line_item->product->name}}</td>
                                <td class="p-1">$ {{$line_item->unit_price}}</td>
                                <td class="text-end p-1">{{$line_item->quantity}}</td>
                                <td class="text-end p-1">$ {{$line_item->unit_price * $line_item->quantity}}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="3" class="text-end p-1">Sub total</td>
                                <td class="text-end p-1">$ {{$sub_total}}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end p-1">GST (0%)</td>
                                <td class="text-end p-1">$ {{$gst}}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end p-1">PST (0%)</td>
                                <td class="text-end p-1">$ {{$pst}}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end p-1"><strong>Total</strong></td>
                                <td class="text-end p-1"><strong>$ {{$total}}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <a class="btn btn-danger" href="/admin/orders" role="button">Back</a>
                <button class="btn btn-primary" id="order_publish">Publish</button>
            </div>
        </div>
    </div>
</div>
@endsection