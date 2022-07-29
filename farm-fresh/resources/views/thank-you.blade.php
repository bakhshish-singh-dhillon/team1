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
                                        <strong>RvZilla International ltd.</strong><br />
                                        All-Wheel Alliance Group<br />
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
                                        <?php foreach ($address as $key => $value) : ?>
                                            <strong><?= e(ucwords(str_replace('_', ' ', $key))) ?></strong>: <?= e($value) ?> <br />
                                        <?php endforeach; ?>
                                    </p>
                                </td>
                                <td>
                                    <p>
                                        <?php foreach ($order_details as $key => $value) : ?>
                                            <?php if ($key == "id" || $key == "order_date" || $key == "ccnum" || $key == "authcode" || $key == "total") : ?>
                                                <strong><?= e(ucwords(str_replace('_', ' ', $key == "id" ? "Order Number" : ($key == "ccnum" ? "Credit Card" : ($key == "authcode" ? "Auth Code" : ($key == "total" ? "Charged to Card" : $key)))))) ?></strong>:
                                                <?= e($key == "ccnum" ? "************" . $value : $value) ?> <br />
                                            <?php endif; ?>
                                        <?php endforeach; ?>
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
                            <?php foreach ($lineItems as $key => $value) : ?>
                                <!--Start of products table-->

                                <tr>
                                    <td><?= e(ucwords(str_replace('_', ' ', $value['title'] ?? ""))) ?></td>
                                    <td>$<?= e($value['unit_price'] ?? "") ?>/day</td>
                                    <td><?= e($value['days'] ?? "") ?></td>
                                    <td>$<?= e($value['line_price'] ?? "") ?></td>
                                </tr>
                                <!--End of products table-->
                            <?php endforeach; ?>
                            <tr>
                                <td colspan="3" class="tax_dtl">Sub total</td>
                                <td class="tax_dtl">$<?= e($value['sub_total'] ?? "") ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="tax_dtl">GST(5%)</td>
                                <td class="tax_dtl"> $<?= e($value['gst'] ?? "") ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="tax_dtl">PST(7%)</td>
                                <td class="tax_dtl"> $<?= e($value['pst'] ?? "") ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="tax_dtl">TOTAL</td>
                                <td class="tax_dtl">$<?= e($value['total'] ?? "") ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="desk_btn" style="margin-top: 20px; width: 130px;"><a href="?p=products" style=" width: 130px;" class="btn" title="view">Continue Shopping</a></div>
                </div>
            </div>
        </div>
    </div>
    @endsection