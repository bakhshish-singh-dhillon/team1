<?php $__env->startSection('content'); ?>
<div class="max-container my-4" id="checkout">
    <div class="">
        <div class="card p-3">
            <div class="title text-center mb-2">Checkout</div>

            <table class="text-center">
                <thead>
                    <tr>
                        <th class="p-2">Product</th>
                        <th class="p-2">Price</th>
                        <th class="p-2">Quantity</th>
                        <th class="p-2">Line Price</th>
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
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    <tr>
                        <td colspan="3" class="v-title p-2 text-right">Sub total</td>
                        <td class="p-2">$ <?php echo e($bill['subtotal']); ?> </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="v-title p-2 text-right">GST (0%)</td>
                        <td class="p-2">$ <?php echo e($bill['gst']); ?> </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="v-title p-2 text-right">PST (0%)</td>
                        <td class="p-2">$ <?php echo e($bill['pst']); ?> </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="v-title p-2 text-right">VAT (0%)</td>
                        <td class="p-2">$ <?php echo e($bill['vat']); ?> </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="v-title p-2 text-right">Delivery Charges </td>
                        <td class="p-2">$ <?php echo e($bill['delivery_charges']); ?> </td>
                    </tr>
                    <tr>
                        <td colspan="3" class="v-title p-2 text-right"><strong>Total</strong></td>
                        <td class="p-2"><strong>$ <?php echo e($bill['total']); ?></strong> </td>
                    </tr>

                </tbody>
            </table>

            <form action="<?php echo e(route('process-payment')); ?>" method="POST" id="checkout_form" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row justify-content-center">
                    <div class="col-md-6 ">
                        <div class="sub-title my-4 text-center">Payment Details</div>
                        <div class="my-3 d-flex justify-content-between">
                            <div class="">
                                <input id="credit" name="card_type" type="radio" class="form-check-input" value="visa" checked="" required="">
                                <label class="form-check-label" for="credit">Visa</label>
                            </div>
                            <div class="">
                                <input id="master" name="card_type" type="radio" value="mastercard" class="form-check-input" required="">
                                <label class="form-check-label" for="master">Master Card</label>
                            </div>
                            <div class="">
                                <input id="debit" name="card_type" type="radio" value="amex" class="form-check-input" required="">
                                <label class="form-check-label" for="debit">American Express</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group mb-3">
                                <label for="name-on-card" class="col-form-label">Name on card</label>
                                <input type="text" class="form-control" name="name_on_card" id="name-on-card" placeholder="Name on Card" />
                                <?php $__errorArgs = ['name_on_card'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"> <?php echo e($message); ?> </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-12 form-group mb-3">
                                <label for="card-number" class="col-form-label">Card Number</label>
                                <input type="text" class="form-control" name="card_number" id="card-number" placeholder="xxxxxxxxxxxxxxxx" />
                                <?php $__errorArgs = ['card_number'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"> <?php echo e($message); ?> </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="card-exp" class="col-form-label">Expiration</label>
                                <input type="text" class="form-control" name="card_exp" id="card-exp" placeholder="mmyy" />
                                <?php $__errorArgs = ['card_exp'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"> <?php echo e($message); ?> </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <div class="col-md-6 form-group mb-3">
                                <label for="card-cvv" class="col-form-label">CVV</label>
                                <input type="text" class="form-control" name="card_cvv" id="card-cvv" placeholder="xxx" />
                                <?php $__errorArgs = ['card_cvv'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="text-danger"> <?php echo e($message); ?> </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <hr class="my-4">
                        <button class="w-100 btn btn-primary btn-lg" type="submit">Make Payment</button>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/team1/farm-fresh/resources/views/checkout_steps/checkout.blade.php ENDPATH**/ ?>