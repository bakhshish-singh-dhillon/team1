<div class="max-container my-4">
    <div class="">
        <div class="">
            <div class="card p-4">

                <h1 class="title mb-3">Order placed successfully!</h1>
                <div class="invoice_content p-3">
                    <table class="content-table text-left " style="min-width: 100%;">
                        <thead>
                            <tr class="border-bottom">
                                <th class="p-2">Company Info</th>
                                <th class="p-2">User Info</th>
                                <th class="p-2">Order Info</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-bottom">
                                <td class="p-2">
                                    <p class="text-left">
                                        <strong>Farm-Fresh International ltd.</strong><br />
                                        Fresh Foods Alliance Group<br />
                                        460 Portage Ave,<br />
                                        Winnipeg, MB <br />
                                        CANADA R3C 0E8<br />
                                    </p>
                                    <p class="text-left">
                                        <strong>Queries about your order</strong><br />
                                        <strong>Helpline-</strong> +1 (204) 123 1234<br />
                                        <strong>Email-</strong><a href="#"> ecom.farmfresh@gmail.com</a><br />
                                        Have a great visit. Good day!<br />
                                    </p>
                                </td>
                                <td class="p-2 align-top">
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
                                <td class="p-2 text-left align-top">
                                    <p class="py-0">
                                        <strong>Order Number :</strong> {{$order->id}}<br />
                                        <strong>Order Date :</strong> {{$order->created_at}}<br />
                                        <strong>Charged To Card :</strong> $ {{$order->total}}<br />
                                        <strong>Credit Card :</strong> **** **** **** {{$order->transactions()->latest()->first()->cc_num}}<br />
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
                                <th class="p-2">Product Name </th>
                                <th class="p-2">Price</th>
                                <th class="p-2 text-end">Quantity</th>
                                <th class="text-end p-2">Line Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($order->order_line_items as $line_item)
                            <tr>
                                <td class="p-2">{{$line_item->product->name}}</td>
                                <td class="p-2">$ {{$line_item->unit_price}}</td>
                                <td class="p-2 text-end">{{$line_item->quantity}}</td>
                                <td class="p-2 text-end">$ {{$line_item->unit_price * $line_item->quantity}}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="3" class="p-2 text-end">Sub total</td>
                                <td class="p-2 text-end">$ {{$order->subtotal}}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="p-2 text-end">GST (0%)</td>
                                <td class="p-2 text-end">$ {{$order->gst}}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="p-2 text-end">PST (0%)</td>
                                <td class="p-2 text-end">$ {{$order->pst}}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="p-2 text-end">VAT (0%)</td>
                                <td class="p-2 text-end">$ {{$order->vat}}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="p-2 text-end">Delivery Charges</td>
                                <td class="p-2 text-end">$ {{$order->delivery_charges}}</td>
                            </tr>
                            <tr>
                                <td colspan="3" class="p-2 text-end"><strong>Total</strong></td>
                                <td class="p-2 text-end"><strong>$ {{$order->total}}</strong></td>
                            </tr>
                        </tbody>
                    </table>
                    <div><a href="/products" class="btn" title="view">Continue Shopping</a></div>
                </div>
            </div>
        </div>
    </div>
</div>