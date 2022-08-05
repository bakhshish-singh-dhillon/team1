<?php $__env->startSection('content'); ?>
<div class="title black-text py-3">Orders</div>
<div class="">
    <div class="card">
        <div class="card-header">
            <h4 class="m-0">View Order : <?php echo e($order->id); ?></h4>
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
                                        <strong>First Name: </strong> <?php echo e($order->user->first_name); ?><br />
                                        <strong>Last Name: </strong> <?php echo e($order->user->last_name); ?><br />
                                        <strong>Email: </strong> <?php echo e($order->user->email); ?><br /><br />
                                        <strong>Shipping Address: </strong><br />
                                        <strong>Street : </strong> <?php echo e($address->address); ?><br />
                                        <strong>City / Province : </strong> <?php echo e($address->city); ?>,<?php echo e($address->province); ?><br />
                                        <strong>Postal Code: </strong> <?php echo e($address->postal_code); ?><br />
                                        <strong>Phone: </strong> +<?php echo e($address->phone); ?><br />
                                    </p>
                                </td>
                                <td class="pt-2 text-left align-top">
                                    <div class="text-left  py-0">
                                        <strong>Order Number :</strong> <?php echo e($order->id); ?><br />
                                        <strong>Order Date :</strong> <?php echo e($order->created_at); ?><br />
                                        <strong>Charged To Card :</strong> $ <?php echo e($order->total); ?><br />
                                        <strong>Auth Code :</strong> <?php echo e($order->auth_code); ?><br />
                                        <strong>Status :</strong> <?php echo e($order->order_status); ?>

                                        <form id="order_status_update_form" method="post" action="<?php echo e(route('order-update', ['order' => $order->id])); ?>">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('PUT'); ?>
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
                                    <?php $__currentLoopData = $order->transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="text-left  py-0">

                                        <strong>Transaction ID :</strong> <?php echo e($transaction->payment_transaction_id); ?><br />
                                        <strong>Credit Card :</strong> **** **** **** <?php echo e($transaction->cc_num); ?><br />
                                        <strong>Status :</strong> <?php echo e($order->transaction_status); ?><br />
                                        <strong>Date :</strong> <?php echo e($transaction->created_at); ?>

                                        <?php if(count($order->transactions) >1): ?>
                                        <p class="border-bottom"></p>
                                        <?php endif; ?>
                                    </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <?php $__currentLoopData = $order->order_line_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $line_item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="p-1"><?php echo e($line_item->product->name); ?></td>
                                <td class="p-1">$ <?php echo e($line_item->unit_price); ?></td>
                                <td class="text-end p-1"><?php echo e($line_item->quantity); ?></td>
                                <td class="text-end p-1">$ <?php echo e($line_item->unit_price * $line_item->quantity); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td colspan="3" class="text-end p-1">Sub total</td>
                                <td class="text-end p-1">$ <?php echo e($sub_total); ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end p-1">GST (0%)</td>
                                <td class="text-end p-1">$ <?php echo e($gst); ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end p-1">PST (0%)</td>
                                <td class="text-end p-1">$ <?php echo e($pst); ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" class="text-end p-1"><strong>Total</strong></td>
                                <td class="text-end p-1"><strong>$ <?php echo e($total); ?></strong></td>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/admin/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/team1/farm-fresh/resources/views/admin/orders/edit.blade.php ENDPATH**/ ?>