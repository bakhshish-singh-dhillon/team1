<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li data-toggle="tooltip" data-placement="bottom" title="<?php echo e($category->name); ?>"><a
            href="<?php echo e(route('products-by-category', ['category' => $category->id])); ?>">
            <?php if(!$category->category_id): ?>
                <strong>
            <?php endif; ?>
            <?php echo e($category->name); ?>

            <?php if(!$category->category_id): ?>
                </strong>
            <?php endif; ?>
        </a>
        <?php if($category->has('children')->get()): ?>
            <ul>
                <?php echo $__env->make('products.recursive', ['categories' => $category->children()->get()], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </ul>
        <?php endif; ?>
    </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /var/www/html/team1/farm-fresh/resources/views/products/recursive.blade.php ENDPATH**/ ?>