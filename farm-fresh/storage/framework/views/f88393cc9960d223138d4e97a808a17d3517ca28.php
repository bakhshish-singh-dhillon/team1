<?php $__env->startSection('content'); ?>
<div class="container my-4">
    <div class="row justify-content-center text-left">
        <div class="col-md-8">
            <div class="card p-4">

                <h1>Order Details</h1>
                <div id="invoice_content p-3">
                    <table class="content-table text-left " style="min-width: 100%;">
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
                                        <strong>First Name: </strong> <?php echo e($order->user->first_name); ?><br />
                                        <strong>Last Name: </strong> <?php echo e($order->user->last_name); ?><br />
                                        <strong>Email: </strong> <?php echo e($order->user->email); ?><br /><br />
                                        <strong>Shipping Address: </strong><br />
                                        <strong>Street : </strong> <?php echo e($address->address); ?><br />
                                        <strong>City/Province : </strong> <?php echo e($address->city); ?>,<?php echo e($address->province); ?><br />
                                        <strong>Postal Code: </strong> <?php echo e($address->postal_code); ?><br />
                                        <strong>Phone: </strong> +<?php echo e($address->phone); ?><br />
                                    </p>
                                </td>
                                <td class="text-left align-top">
                                    <p class="text-left  py-0">
                                        <strong>Order Number :</strong> <?php echo e($order->id); ?><br />
                                        <strong>Order Date :</strong> <?php echo e($order->created_at); ?><br />
                                        <strong>Charged To Card :</strong> $<?php echo e($order->total); ?><br />
                                        <strong>Credit Card :</strong> ************<?php echo e($order->transactions()->latest()->first()->cc_num); ?><br />
                                        <strong>Status :</strong> <?php echo e($order->order_status); ?><br />
                                        <strong>Auth Code :</strong> <?php echo e($order->auth_code); ?><br />
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
                                <th>Quantity</th>
                                <th class="text-end">Line Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $order->order_line_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($line_item->product->name); ?></td>
                                <td>$<?php echo e($line_item->unit_price); ?></td>
                                <td><?php echo e($line_item->quantity); ?></td>
                                <td class="text-end">$<?php echo e($line_item->unit_price * $line_item->quantity); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td colspan="3" class="text-end">Sub total</td>
                                <td class="text-end">$<?php echo e($sub_total); ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end">GST(5%)</td>
                                <td class="text-end">$<?php echo e($gst); ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end">PST(7%)</td>
                                <td class="text-end">$<?php echo e($pst); ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end">TOTAL</td>
                                <td class="text-end">$<?php echo e($total); ?></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/team1/farm-fresh/resources/views/user-order.blade.php ENDPATH**/ ?>