<div id="featured">
    <div class="title text-center py-3">Featured Products</div>

    <div class="py-4" id="featured-slider">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prod): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="px-2">

            <div class="card product-item">

                <img class="card-img-top" src="<?php echo e($images_path.$prod->images()->first()->url); ?>" alt="<?php echo e($prod->name); ?>">
                <div class="card-body">
                    <h5 class="card-title green-text text-bold"><?php echo e($prod->name); ?></h5>
                    <p class="card-text">$ <?php echo e($prod->price); ?> / <?php echo e($prod->measure_unit); ?></p>
                </div>
                <a href="/products/show/<?php echo e($prod->id); ?>" class="btn hanging-btn product-item">View</a>

            </div>
        </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div><?php /**PATH /var/www/html/team1/farm-fresh/resources/views/includes/featureProd-loop.blade.php ENDPATH**/ ?>