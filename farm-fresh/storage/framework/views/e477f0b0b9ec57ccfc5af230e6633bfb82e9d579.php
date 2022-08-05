<?php $__env->startSection('content'); ?>
<div id="profile">
    <div class="max-container py-4">
        <div class="row">
            <div class="col-md-3 left-part">
                <div class="container capitalization profile-menu">
                    <ul class="p-0">
                        <li>
                            <a href="/user-profile/<?php echo e($user->id); ?>/#address" class="my-2"><strong>Address</strong></a>
                        </li>
                        <li>
                            <a href="/user-profile/<?php echo e($user->id); ?>/#review" class="my-2"><strong>Reviews</strong></a>
                        </li>
                        <li>
                            <a href="/user-profile/<?php echo e($user->id); ?>/#order" class="my-2"><strong>Orders</strong></a>
                        </li>

                    </ul>
                </div>

            </div>
            <div class="col-md-9 welcome">
                <div class="title mb-3"><?php echo e($title); ?> </div>

                <div class="col-md-12 my-2">
                    <div class="card product-item">
                        <div class="card-header">
                            <div class="sub-title m-0">Addresses</div>
                        </div>
                        <div id="profile-user-addresses" data-addresses="<?php echo e($addresses?json_encode($addresses):json_encode([])); ?>" data-old_inputs="<?php echo e(Session::getOldInput()?json_encode(Session::getOldInput()):json_encode([])); ?>">
                            <form action="<?php echo e(route('user-profile-store-addresses', ['user'=>$user->id])); ?>" method="POST" id="address_form" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="address_id" :value="user_addresses[address_id].id" v-if="address_id && address_id !== 'add-new'" />
                                <div class="p-3">
                                    <div class="">
                                        <div class="radio-addresses">
                                            <div>
                                                <label for="address_options">Choose from existing addresses:</label>
                                                <div class="d-flex gap-1 mb-3">
                                                    <select name="address_options" id="address_options" class="form-select" v-model="address_id">
                                                        <option value="" disabled selected>Select address</option>
                                                        <option value="add-new" id="address-add-new">Add New</option>
                                                        <?php $__currentLoopData = $addresses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $address): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <option value="<?php echo e($key); ?>" id="address-<?php echo e($key); ?>"><?php echo e($address->address); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 form-group mb-1">
                                                <label for="address_type" class="col-form-label">Address Name <span class="text-danger">*</span> </label>
                                                <input type="text" class="form-control" name="address_name" id="address_type" v-model="address.address_type" />
                                                <?php $__errorArgs = ['address_name'];
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
                                            <div class="col-md-12 form-group mb-1">
                                                <label for="address" class="col-form-label">Address <span class="text-danger">*</span> </label>
                                                <input type="text" class="form-control" name="address" id="address" v-model="address.address" />
                                                <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"> <?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="col-md-12 form-group mb-1">
                                                <label for="city" class="col-form-label">City <span class="text-danger">*</span> </label>
                                                <input type="text" class="form-control" name="city" id="city" placeholder="Your City" v-model="address.city" />
                                                <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"> <?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="col-md-12 form-group mb-1">
                                                <label for="province" class="col-form-label">Province <span class="text-danger">*</span> </label>
                                                <input type="text" class="form-control" name="province" id="province" placeholder="Your Province" v-model="address.province" />
                                                <?php $__errorArgs = ['province'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"> <?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="col-md-12 form-group mb-1">
                                                <label for="country" class="col-form-label">Country <span class="text-danger">*</span> </label>
                                                <input type="text" class="form-control" name="country" id="country" placeholder="Your Country" v-model="address.country" />
                                                <?php $__errorArgs = ['country'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"> <?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="col-md-12 form-group mb-1">
                                                <label for="postal_code" class="col-form-label">Postal Code <span class="text-danger">*</span> </label>
                                                <input type="text" class="form-control" name="postal_code" id="postal_code" placeholder="Your Postal Code" v-model="address.postal_code" />
                                                <?php $__errorArgs = ['postal_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"> <?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                            <div class="col-md-12 form-group mb-1">
                                                <label for="phone" class="col-form-label">Phone <span class="text-danger">*</span> </label>
                                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Your phone" v-model="address.phone" />
                                                <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"> <?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div class="mt-2 form-group text-center">
                                            <button type="submit" class="btn">Update</button>
                                            <span class="submitting"></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/team1/farm-fresh/resources/views/user-profile-addresses.blade.php ENDPATH**/ ?>