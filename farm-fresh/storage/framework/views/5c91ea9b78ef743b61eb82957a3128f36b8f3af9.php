<?php $__env->startSection('content'); ?>

<div id="detail">
    <div class="max-container py-4">
        <div class="row">
            <div class="col-md-6">
                
                <div id="product-gallery">
                    

                    <div id="gallery">
                        <ul class="slides">
                            <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <img src="<?php echo e($images_path . $image->url); ?>" alt="<?php echo e($product->name); ?>" />
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>

                    </div>
                    <div id="gallery-slides" class="flexslider">
                        <ul class="slides">
                            <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <img src="<?php echo e($images_path . $image->url); ?>" alt="<?php echo e($product->name); ?>" />
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>

                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="title product-title m-3"><?php echo e($product->name); ?></div>
                <table class="detail-table w-100 m-3">
                    <tr>
                        <th>Price:</th>
                        <td>$ <?php echo e($product->price); ?> / <?php echo e($product->measure_unit); ?></td>
                    </tr>
                    <tr>
                        <th>Availability:</th>
                        <?php if((int) $product->quantity == 0): ?>
                        <td><i class="fa-solid fa-circle-xmark mx-2 text-danger"></i>
                            Out of Stock</td>
                        <?php else: ?>
                        <td><i class="fa-solid fa-circle-check mx-2 text-success"></i>
                            In Stock</td>
                        <?php endif; ?>
                    </tr>
                    <tr>
                        <th>Rating:</th>
                        <td><?php echo e($avgRating); ?> out of 5</td>
                    </tr>
                    <tr>
                        <th>Quantity:</th>
                        <td id="quantity" class="d-flex user-select-none">
                            <form class="d-flex gap-1" action="<?php echo e(route('add-to-cart', ['product' => $product->id])); ?>" method="get">
                                <?php echo csrf_field(); ?>
                                <div>
                                    <i id="plus" class="fa-solid fa-plus m-0 p-2"></i>
                                    <input type="text" name="quantity" maxlength="12" value="1" class="input-text qty" />
                                    <i id="minus" class="fa-solid fa-minus m-0 p-2"></i>
                                </div>
                                <?php if((int) $product->quantity == 0): ?>
                                <button type="submit" class="btn" disabled>Add to Cart </button>
                                <?php else: ?>
                                <button type="submit" class="btn">Add to Cart </button>
                                <?php endif; ?>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
            <hr>
            <div class="more-info">
                <div class="tab">
                    <button class="tablinks active" onclick="changeTab(event, 'Description')">Description</button>
                    <button class="tablinks" onclick="changeTab(event, 'Additional-Info')">Additional Info</button>
                </div>

                <!-- Tab content -->
                <div id="Description" style="display: block;" class="tabcontent">

                    <p><?php echo e($product->description); ?></p>
                </div>

                <div id="Additional-Info" class="tabcontent">
                    <div>
                        <?php if(sizeof($product->product_metas) == 0): ?>
                        <p class="text-left">No additional information provided!</p>
                        <?php else: ?>
                        <table id="metaTable" class="w-100">

                            <tbody>

                                <?php $__currentLoopData = $product->product_metas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meta): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="p-2 w-25"><strong><?php echo e($meta->name); ?>:</strong></td>

                                    <td class="p-2"><?php echo e($meta->value); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                        <?php endif; ?>
                    </div>

                </div>

            </div>

        </div>
        <div id="reviews">

            <div class="row">
                <div class="title py-3 text-center">Customer Reviews</div>
                <div class="col-md-3">

                    <?php if(count($product->reviews()->get()) == 0): ?>
                    <p><?php echo e($avgRating); ?> out of 5
                        <small>(<?php echo e(count($product->reviews()->get())); ?> ratings)</small>
                    </p>
                    <?php else: ?>
                    <p><?php echo e($avgRating); ?> out of 5
                        <small>(<?php echo e(count($product->reviews()->get())); ?> ratings)</small>
                    </p>
                    <div>
                        <div>
                            <div>
                                <?php if($perFives >= 0): ?>
                                <p class="m-0 mt-1"><small>5 star (<?php echo e($perFives ?? 0); ?>%)</small></p>
                                <div class="outer-box">

                                    <div class="bar-5" style="width: <?php echo e($perFives ?? 0); ?>%;"></div>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div>
                                <?php if($perFours >= 0): ?>
                                <p class="m-0 mt-1"><small>4 star (<?php echo e($perFours ?? 0); ?>%)</small></p>
                                <div class="outer-box">

                                    <div class="bar-5" style="width: <?php echo e($perFours ?? 0); ?>%;"></div>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div>
                                <?php if($perThrees >= 0): ?>
                                <p class="m-0 mt-1"><small>3 star (<?php echo e($perThrees ?? 0); ?>%)</small></p>
                                <div class="outer-box">

                                    <div class="bar-5" style="width: <?php echo e($perThrees ?? 0); ?>%;"></div>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div>
                                <?php if($perTwos >= 0): ?>
                                <p class="m-0 mt-1"><small>2 star (<?php echo e($perTwos ?? 0); ?>%)</small></p>
                                <div class="outer-box">

                                    <div class="bar-5" style="width: <?php echo e($perTwos ?? 0); ?>%;"></div>
                                </div>
                                <?php endif; ?>
                            </div>
                            <div>
                                <?php if($perOnes >= 0): ?>
                                <p class="m-0 mt-1"><small>1 star (<?php echo e($perOnes ?? 0); ?>%)</small></p>
                                <div class="outer-box">

                                    <div class="bar-5" style="width: <?php echo e($perOnes ?? 0); ?>%;"></div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-md-9">

                    <div>
                        <?php if(count($product->reviews()->get()) == 0): ?>
                        <p>We found 0 matching reviews</p>
                        <p>Be the first!</p>
                        <?php else: ?>
                        <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div>
                            <div class="review-title"><?php echo e($review->user->first_name); ?>

                                <?php echo e($review->user->last_name); ?>

                            </div>
                            <div><small>Posted on <?php echo e(date('d-m-Y', strtotime($review->created_at))); ?></small></div>
                            <p class="my-2"><select name="rating" class="form-control rating-static">
                                    <option value="1" <?php echo e($review->rating == 1 ? 'selected' : ''); ?>>
                                        1</option>
                                    <option value="2" <?php echo e($review->rating == 2 ? 'selected' : ''); ?>>2</option>
                                    <option value="3" <?php echo e($review->rating == 3 ? 'selected' : ''); ?>>3</option>
                                    <option value="4" <?php echo e($review->rating == 4 ? 'selected' : ''); ?>>4</option>
                                    <option value="5" <?php echo e($review->rating == 5 ? 'selected' : ''); ?>>5</option>
                                </select></p>

                            <p><?php echo e($review->review); ?></p>
                            <hr>
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                        <div class="pagination justify-content-center pb-3">
                            <?php echo $reviews->links(); ?>

                        </div>
                    </div>

                    <div class="card mb-3">
                        <div class="card-header">
                            <h4 class="h4">Write a review</h4>
                        </div>
                        <div class="card-body">
                            <div class="">
                                <form action="<?php echo e(route('store-product-review', ['product' => $product->id])); ?>" method="POST" id="add_review_form">
                                    <?php echo csrf_field(); ?>

                                    <table class="w-100">
                                        <tr>
                                            <td class="px-2 w-25"><label for="rating-bar">Rate the
                                                    product:</label></td>
                                            <td class="py-2"><select name="rating" class="form-control" id="rating-bar">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                                <?php $__errorArgs = ['rating'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"> <?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="px-2"> <label for="review">Review:</label>
                                            </td>
                                            <td>
                                                <textarea class="form-control" name="review" id="review" rows="2"></textarea>
                                                <?php $__errorArgs = ['review'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="text-danger"> <?php echo e($message); ?></span>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </td>
                                        </tr>
                                    </table>

                                    <button class="btn" data-toggle="tooltip" data-placement="bottom" title="Publish">Publish</button>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>

                <hr>
                <?php echo $__env->make('includes.featureProd-loop', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('custom-js'); ?>
<script>
    function changeTab(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/team1/farm-fresh/resources/views/products/show.blade.php ENDPATH**/ ?>