<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between mb-2 my-3">
    <div class="title black-text"><?php echo e($title); ?> (<?php echo e($products->total()); ?>)</div>

    <div class="d-flex">
        <form method="get" action="<?php echo e(route('admin-get-products', [])); ?>">
            <div class="btn-group mx-2">
                <input class="form-control search-bar" type="search" name="search" placeholder="Search by id, title or price" value="<?php echo e(app('request')->input('search')); ?>" data-toggle="tooltip" data-placement="bottom" title="Search" />
                <button class="btn btn-success"><i class="fas fa-search"></i></button>
            </div>
        </form>
        <a class="btn" href="/admin/products/create" role="button"><i class="fa-solid fa-plus mx-1" data-toggle="tooltip" data-placement="bottom" title="Create"></i>Create</a>
    </div>
</div>
<div class="card">
    <div class="card-body">

        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light ">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th class="w100">Actions</th>
                </tr>
            </thead>
            <tbody class="">
                <?php if(count($products) == 0): ?>
                <tr colspan="4">No results found!</tr>
                <?php endif; ?>
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($product->id); ?></td>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->price); ?> $</td>
                    <td><?php echo e($product->quantity); ?></td>
                    <td>
                        <div class="d-flex">
                            <a class="btn btn-secondary mx-2" href="<?php echo e(route('product-edit', ['product' => $product->id])); ?>"><i class="fa-solid fa-pencil" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a>
                            <form method="post" action="<?php echo e(route('product-delete', ['product' => $product->id])); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <input type="hidden" name="id" value="<?php echo e($product->id); ?>" />
                                <button class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Delete" onclick="return confirm('Are you sure you want to delete this product?')"><i class="fa-solid fa-trash-can"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <div class="pagination justify-content-center py-2">

            <?php echo $products->links('pagination::bootstrap-5'); ?>


        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/admin/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/team1/farm-fresh/resources/views/admin/products/index.blade.php ENDPATH**/ ?>