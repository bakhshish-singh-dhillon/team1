<?php $__env->startSection('content'); ?>
<div id="profile">
    <div class="max-container py-4">
        <div class="row">
            <div class="col-md-3 left-part">
                <div class="container capitalization profile-menu">
                    <ul class="p-0">
                        <li>
                            <a href="#address" class="my-2" data-bs-toggle="collapse"><strong>Address</strong></a>
                        </li>
                        <li>
                            <a href="#review" class="my-2" data-bs-toggle="collapse"><strong>Reviews</strong></a>
                        </li>
                        <li>
                            <a href="#order" class="my-2" data-bs-toggle="collapse"><strong>Orders</strong></a>
                        </li>

                    </ul>
                </div>

            </div>
            <div class="col-md-9 welcome">
                <div class="title mb-3"><?php echo e($title); ?> </div>
                <div>
                    <form method="POST" action="<?php echo e(route('user-detail-update', ['user' => $user->id])); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('PUT'); ?>
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-start"><?php echo e(__('Email Address')); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" disabled class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e($user->email); ?>" required>

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="first_name" class="col-md-4 col-form-label text-md-start"><?php echo e(__('First name')); ?></label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="first_name" value="<?php echo e($user->first_name); ?>" required autofocus>

                                <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="last_name" class="col-md-4 col-form-label text-md-start"><?php echo e(__('Last name')); ?></label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="last_name" value="<?php echo e($user->last_name); ?>" required>

                                <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" <?= null != $user->is_subscribed ? 'checked' : ' ' ?> id="is_subscribed" name="is_subscribed">
                                    <label class="form-check-label" for="is_subscribed">
                                        Subscribed to Newsletter
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-0 " style="display: none;" id="update_user">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-dark bg-green  border border-none text-gray ">
                                    <?php echo e(__('Update')); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-12 my-2 ">
                    <div class="card product-item">
                        <div class="card-header">
                            <div class="sub-title m-0">Address</div>
                        </div>
                        <div id="address" class="collapse">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Address</th>
                                            <th>Phone</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(count($addresses) == 0): ?>
                                        <tr colspan="4">You have not reviewed anything yet!</tr>
                                        <?php else: ?>
                                        <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($address->address_type); ?> address</td>
                                            <td><?php echo e($address->address); ?>,
                                                <?php echo e($address->city); ?>,
                                                <?php echo e($address->province); ?>

                                                <?php echo e($address->postal_code); ?>,
                                                <?php echo e($address->country); ?>

                                            </td>
                                            <td><?php echo e($address->phone); ?></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <a href="<?php echo e(route('user-profile-addresses', ['user' => $user->id])); ?>" class="my-2 btn"><strong>Add / Update Addresses</strong></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 my-2">
                    <div class="card product-item">
                        <div class="card-header">
                            <div class="sub-title m-0">Reviews</div>
                        </div>
                        <div id="review" class="collapse">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Review</th>
                                            <th>Rating</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(count($reviews) == 0): ?>
                                        <tr colspan="4">You have not reviewed anything yet!</tr>
                                        <?php else: ?>
                                        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($review->created_at); ?></td>
                                            <td><?php echo e($review->review); ?></td>
                                            <td><?php echo e($review->rating); ?></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 my-2">
                    <div class="card product-item">
                        <div class="card-header">
                            <div class="sub-title m-0">Orders</div>
                        </div>
                        <div id="order" class="collapse">
                            <div class="card-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Total</th>
                                            <th>Status</th>
                                            <th>View</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if(count($orders) == 0): ?>
                                        <tr colspan="4">You have not purchased anything yet!</tr>
                                        <?php else: ?>
                                        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($order->created_at); ?></td>
                                            <td>$ <?php echo e($order->total); ?></td>
                                            <td><?php echo e($order->order_status); ?></td>
                                            <td><a href="/user-order/<?php echo e($order->id); ?>" class="btn">View</a> </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/team1/farm-fresh/resources/views/user-profile.blade.php ENDPATH**/ ?>