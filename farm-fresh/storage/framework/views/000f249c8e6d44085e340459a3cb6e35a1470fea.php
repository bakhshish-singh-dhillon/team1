<?php $__env->startSection('content'); ?>
<div class="container my-4" id="cart">
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <div class="card p-3">

                <div class="title pb-3">My Cart</div>
                <table class="cart">
                    <thead>
                        <tr>
                            <th class="p-2">Product</th>
                            <th class="p-2">Price</th>
                            <th class="p-2">Quantity</th>
                            <th class="p-2">Line Price</th>
                            <th class="p-2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = session()->get('cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="p-2"><a class="text-decoration-none" href="<?php echo e(route('product', ['product' => $index])); ?>"><?php echo e($product['name']); ?></a>
                            </td>
                            <td class="p-2">$ <?php echo e($product['price']); ?></td>
                            <td class="p-2"><?php echo e($product['quantity']); ?></td>
                            <td class="p-2">$ <?php echo e($product['line_price']); ?></td>
                            <td class="p-2">
                                <form method="post" action="<?php echo e(route('remove-cart-item', ['product' => $index])); ?>">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <input type="hidden" value="<?php echo e($index); ?>" name="id">
                                    <button type="submit" class="btn btn-danger" name="submit"><i class="fa-solid fa-trash-can"></i></button>
                                </form>
                            </td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <tr>
                            <td colspan="4" class="v-title p-2 text-right">Sub total</td>
                            <td class="p-2 text-right">$ <?php echo e($bill['subtotal']); ?> </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="v-title p-2 text-right">GST (0%)</td>
                            <td class="p-2 text-right">$ <?php echo e($bill['gst']); ?> </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="v-title p-2 text-right">PST (0%)</td>
                            <td class="p-2 text-right">$ <?php echo e($bill['pst']); ?> </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="v-title p-2 text-right">VAT (0%)</td>
                            <td class="p-2 text-right">$ <?php echo e($bill['vat']); ?> </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="v-title p-2 text-right">Delivery Charges</td>
                            <td class="p-2 text-right">$ <?php echo e($bill['delivery_charges']); ?> </td>
                        </tr>
                        <tr>
                            <td colspan="4" class="v-title p-2 text-right"><strong>Total</strong></td>
                            <td class="p-2 text-right"><strong>$ <?php echo e($bill['total']); ?></strong> </td>
                        </tr>
                    </tbody>
                </table>
                <div class="d-flex justify-content-between pt-3">
                    <a class="btn" href="/choose-addresses">Choose Address</a>
                    <form action="<?php echo e(route('clear-cart')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit" class="btn btn-danger">Clear cart</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/team1/farm-fresh/resources/views/checkout_steps/cart.blade.php ENDPATH**/ ?>