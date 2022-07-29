@extends('layouts.app')

@section('content')
<div class="container my-4">
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <div class="card">

                <h1>Order placed successfully!</h1>
                <div id="invoice_content">
                    <table id="content-table" style="min-width: 100%;">
                        <thead>
                            <tr>
                                <th>Company Info</th>
                                <th>User Info</th>
                                <th>Order Info</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p>
                                        <strong>Farm-Fresh International ltd.</strong><br />
                                        Fresh Foods Alliance Group<br />
                                        111 Whitley Drive,<br />
                                        Silicon Valley, California, 98715<br />
                                        USA R2L 6J7<br />
                                        <br />
                                    </p>
                                    <p>
                                        <strong>Queries about your order</strong><br />
                                        <strong>tel-</strong> 1-111-111-1234<br />
                                        <strong>email-</strong><a href="#"> support@rvzilla.com</a><br />
                                        Have a great visit. Good day!<br />
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <strong>First Name</strong> {{$order->user->first_name}}<br />
                                        <strong>Last Name</strong> {{$order->user->last_name}}<br />
                                        <strong>Email</strong> {{$order->user->email}}<br />
                                    </p>
                                </td>
                                <td>
                                    <p>
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
                                <th>Rent/Day</th>
                                <th>Day(s)</th>
                                <th>Line Price</th>
                            </tr>
                        </thead>
                        <tbody>


                        </tbody>
                    </table>
                    <div class="desk_btn" style="margin-top: 20px; width: 130px;"><a href="?p=products" style=" width: 130px;" class="btn" title="view">Continue Shopping</a></div>
                </div>
            </div>
        </div>
    </div>
    @endsection