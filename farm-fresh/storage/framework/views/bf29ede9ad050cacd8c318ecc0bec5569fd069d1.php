<?php $__env->startSection('content'); ?>
<div class="max-container py-4 my-4">
    <div class="row align-items-stretch no-gutters contact-wrap normal-shadow">
        <div class="col-md-8 px-4 py-4">
            <div>
                <h3>Send us a message</h3>
                <form action="/contact" method="post" id="contactForm" name="contactForm">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label for="" class="col-form-label">Name *</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?php echo e(old('name')); ?>" placeholder="Your name" data-toggle="tooltip" data-placement="bottom" title="Your Name">
                            <?php $__errorArgs = ['name'];
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
                        <div class="col-md-12 form-group mb-3">
                            <label for="" class="col-form-label">Email *</label>
                            <input type="text" class="form-control" name="email" id="email" value="<?php echo e(old('email')); ?>" placeholder="Your Email" data-toggle="tooltip" data-placement="bottom" title="Your Email">
                            <?php $__errorArgs = ['email'];
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
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label for="" class="col-form-label">Phone *</label>
                            <input type="text" class="form-control" name="phone" id="phone" value="<?php echo e(old('phone')); ?>" placeholder="Phone #" data-toggle="tooltip" data-placement="bottom" title="Phone">
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
                        <div class="col-md-12 form-group mb-3">
                            <label for="" class="col-form-label">How can we help you?</label></br>
                            <!--<input type="text" class="form-control" name="company" id="company" placeholder="Company  name"> -->
                            <select class="form-select" id="category" name="category" required="required">
                                <option value="" selected="selected" disabled>Select below *</option>
                                <option value="refund" <?php echo e(old("category") == "refund" ? "selected=selected" : ""); ?>>Refund</option>
                                <option value="order_status" <?php echo e(old("category") == "order_status" ? "selected=selected" : ""); ?>>Order Status</option>
                                <option value="feedback" <?php echo e(old("category") == "feedback" ? "selected=selected" : ""); ?>>Feedback</option>
                                <option value="other" <?php echo e(old("category") == "other" ? "selected=selected" : ""); ?>>Other</option>
                            </select>
                            <?php $__errorArgs = ['category'];
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
                    <div class="row">
                        <div class="col-md-12 form-group mb-3">
                            <label for="message" class="col-form-label">Message *</label>
                            <textarea class="form-control" name="message" id="message" cols="30" rows="4" placeholder="Write your message" data-toggle="tooltip" data-placement="bottom" title="Write your message"><?php echo e(old('message')); ?></textarea>
                            <?php $__errorArgs = ['message'];
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
                    <div class="row">
                        <div class="col-md-12 form-group ">
                            <input type="submit" value="Send Message" class="btn bg-green text-white rounded-0 py-2 px-4" data-toggle="tooltip" data-placement="bottom" title="Send Message">
                            <span class="submitting"></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-4 px-0">
            <div class="contact-info h-100 px-4 bg-green text-white py-4">
                <h3>Contact Information</h3>
                <p class="mb-5">Farm-Fresh International ltd.</p>
                <ul class="list-unstyled">
                    <li class="d-flex">
                        <i class="fa-solid fa-location-dot px-3 py-1"></i>
                        <span class="text">460 Portage Ave, Winnipeg, MB R3C 0E8</span>
                    </li>
                    <li class="d-flex">
                        <i class="fa-solid fa-phone px-3 py-1"></i> <span class="text">+1 (204) 123 1234</span>
                    </li>
                    <li class="d-flex">
                        <i class="fa-solid fa-envelope px-3 py-1"></i> <span class="text">ecom.farmfresh@gmail.com</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/team1/farm-fresh/resources/views/contact/index.blade.php ENDPATH**/ ?>