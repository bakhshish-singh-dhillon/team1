<?php $__env->startSection('content'); ?>
<div id="products">
    <div class="max-container py-4">
        <div class="row">
            <div class="col-md-3 left-part">
                <div class="title">Categories</div>

                <div class="category-list capitalization">
                    <ul class="p-0">
                        <li>
                            <a href="<?php echo e(route('products', [])); ?>" class="my-2" data-toggle="tooltip" data-placement="bottom" title="All Products"><strong>All Products</strong></a>
                        </li>
                        <?php echo $__env->make('products.recursive', ['categories' => $categories], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="title p-3"><?php echo e($title); ?> (<?php echo e($products->total()); ?>)
                    <div class="float-right">
                        <form action="<?php echo e(route('products-by-search', [])); ?>" method="get" autocomplete="off" novalidate>
                            <input class="form-control p-1" type="text" placeholder="Search" name="search" maxlength="255" data-toggle="tooltip" data-placement="bottom" title="Search" />&nbsp;
                            <input type="submit" hidden value="search" />
                        </form>
                    </div>
                </div>
                <div class="row p-3" id="featured">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4 col-sm-6 col-xs-6 my-2">
                        <div class="card product-item">
                            <img class="card-img-top" src="<?php echo e($images_path . $prod->images()->first()->url); ?>" alt="<?php echo e($prod->images()->first()->url); ?>">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($prod->name); ?></h5>
                                <p class="card-text">$ <?php echo e($prod->price); ?> / <?php echo e($prod->measure_unit); ?></p>
                                <p class="ellipsis-text"><?php echo e($prod->description); ?></p>
                                <a href="/products/show/<?php echo e($prod->id); ?>" class="btn hanging-btn product-item" data-toggle="tooltip" data-placement="bottom" title="<?php echo e($prod->name); ?>">View</a>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="pagination content-center justify-content-center">

                    <?php echo $products->links('pagination::bootstrap-5'); ?>


                </div>

            </div>

        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/team1/farm-fresh/resources/views/products/index.blade.php ENDPATH**/ ?>