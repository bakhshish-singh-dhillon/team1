@extends('layouts/admin/app')

@section('content')
<div class="title black-text py-3">Orders</div>
<div class="">
    <div class="card">
        <div class="card-header">
            <h4 class="h4">View Order : {{ $order->id}}</h4>
        </div>
        <div class="card-body">
            <div class="mx-auto container">

                <div id="invoice_content p-3">
                    <table id="content-table text-left " style="min-width: 100%;">
                        <thead>
                            <tr class="border-bottom">
                                <th>User Info</th>
                                <th>Order Info</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-bottom">
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
                                        <strong>Auth Code :</strong> {{$order->auth_code}}<br />
                                        <strong>Status :</strong> {{$order->order_status}}
                                    <form id="order_status_update_form" method="post" action="{{ route('order-update', ['order' => $order->id]) }}">
                                        @csrf
                                        @method('PUT')
                                        <label class="form-label" for="category_search">Update Status:
                                        </label>
                                        <select name="order_status" id="order_status" class="form-control ">
                                            <option value="">Select status</option>
                                            <option value="Pending" <?= $order->order_status == 'Pending' ? 'selected' : '' ?>>Pending</option>
                                            <option value="Shipped" <?= $order->order_status == "Shipped" ? 'selected' : '' ?>>Shipped</option>
                                            <option value="Delivered" <?= $order->order_status == "Delivered" ? 'selected' : '' ?>>Delivered</option>
                                            <option value="Cancelled" <?= $order->order_status == "Cancelled" ? 'selected' : '' ?>>Cancelled</option>
                                        </select>
                                    </form><br />

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
                                <th class="text-end">Qty</th>
                                <th class="text-end">Line Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->order_line_items as $line_item)
                            <tr>
                                <td>{{$line_item->product->name}}</td>
                                <td>{{$line_item->unit_price}}$</td>
                                <td class="text-end">{{$line_item->quantity}}</td>
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
                </div>
                <a class="btn btn-danger" href="/admin/orders" role="button">Back</a>
                <button class="btn btn-primary" id="order_publish">Publish</button>
            </div>
        </div>
    </div>
</div>
@endsection