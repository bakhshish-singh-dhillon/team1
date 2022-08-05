<?php $__env->startSection('content'); ?>
<div class="title black-text py-3">Products</div>
<div class="">
    <div class="card">
        <div class="card-header">
            <h4 class="h4">Create a new product</h4>
        </div>
        <div class="card-body">
            <div class="mx-auto container">
                <form action="/admin/products" method="POST" enctype="multipart/form-data" id="product_crud_form">
                    <?php echo csrf_field(); ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="sku">Sku: <span class="text-danger">*</span></label>
                                <input name="sku" type="text" id="sku" class="form-control" value="<?php echo e(old('sku')); ?>" />
                                <?php $__errorArgs = ['sku'];
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
                        <div class="col-md-6">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="name">Name: <span class="text-danger">*</span> </label>
                                <input name="name" type="text" id="name" class="form-control" value="<?php echo e(old('name')); ?>" />
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
                        </div>
                        <div class="col-md-6">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="price">Price: <span class="text-danger">*</span></label>
                                <input name="price" type="text" id="price" class="form-control" value="<?php echo e(old('price')); ?>" />
                                <?php $__errorArgs = ['price'];
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
                        <div class="col-md-6">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="measure_unit">Measure Unit: <span class="text-danger">*</span></label>
                                <input name="measure_unit" type="text" id="measure_unit" class="form-control" value="<?php echo e(old('measure_unit')); ?>" />
                                <?php $__errorArgs = ['measure_unit'];
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
                        <div class="col-md-6">
                            <div class="form-outline mb-4 ">
                                <label class="form-label" for="category_search">Category:
                                    <span class="text-danger">*</span>
                                </label>
                                <select name="category_id[]" class="form-control js-example-basic-single" multiple id="category_search">
                                    <option value="">Please select a category</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($index); ?>" <?php if(old('category_id') && in_array($index ,old('category_id'))): ?> selected <?php endif; ?>>
                                        <?php echo e($name); ?>

                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                                <?php $__errorArgs = ['category_id'];
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
                        <div class="col-md-6">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="quantity">Quantity in Stock: <span class="text-danger">*</span></label>
                                <input name="quantity" type="text" id="quantity" class="form-control" value="<?php echo e(old('quantity')); ?>" />
                                <?php $__errorArgs = ['quantity'];
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
                        <div class="col-md-6">
                            <div class="form-outline mb-4">
                                <label class="form-label" for="description">Description: <span class="text-danger">*</span></label>
                                <textarea class="form-control" name="description" id="description" cols="30" rows="10"><?php echo e(old('description')); ?></textarea>
                                <?php $__errorArgs = ['description'];
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
                        <div class="col-md-6">
                            <div id="multi-image">
                                <multi-image></multi-image>
                                <?php $__errorArgs = ['image_upload.*'];
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
                    <div class="additional-fields">
                        <div class="">
                            <h2>Additional Details <a class="btn btn-success add-more"><i class="fa-solid fa-plus"></i></a>
                            </h2>
                        </div>
                        
                        <?php if(old('key')): ?>
                        

                        <?php $__currentLoopData = old('key'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $key): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="row">
                            <div class="col-md-5">
                                <label class="form-label" for="key[]">Atrribute Name: <span class="text-danger">*</span></label>
                                <input name="key[]" type="text" id="key" class="form-control" value="<?php echo e(old('key')[$index]); ?>" />
                                <?php $__errorArgs = ["key.$index"];
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
                            <div class="col-md-5">
                                <label class="form-label" for="value[]">Value: <span class="text-danger">*</span></label>
                                <input name="value[]" type="text" id="value" class="form-control" value="<?php echo e(old('value')[$index]); ?>" />
                                <?php $__errorArgs = ["value.$index"];
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
                            <div class="col-md-2">
                                <br>
                                <a class="btn btn-danger remove-attribute" id="remove"><i class="fa-solid fa-minus"></i></a>
                            </div>
                        </div>
                        <a class="btn btn-danger remove-attribute">Remove</a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>
                    </div>
                    <a class="btn btn-danger" href="/admin/products" role="button">Back</a>
                    <button class="btn btn-primary">Publish</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/admin/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/team1/farm-fresh/resources/views/admin/products/create.blade.php ENDPATH**/ ?>