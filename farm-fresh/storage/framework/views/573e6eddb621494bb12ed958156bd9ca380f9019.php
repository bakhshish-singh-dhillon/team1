<?php $__env->startSection('content'); ?>


<div class="d-flex justify-content-between mb-2 my-3">
    <div class="title black-text"><?php echo e($title); ?> (<?php echo e($orders->total()); ?>)</div>

    <div class="d-flex">
        <form method="get" action="/admin/orders/">
            <div class="btn-group mx-2">
                <input class="form-control search-bar" type="search" name="search" placeholder="Search by id, status, subtotal" value="<?php echo e(app('request')->input('search')); ?>" data-toggle="tooltip" data-placement="bottom" title="Search" />
                <button class="btn btn-success"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>
</div>
<div class="card">
    <div class="card-body">

        <table class="table align-middle mb-0 bg-white w-100">
            <thead class="bg-light ">
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Total</th>
                    <th class="w100">Actions</th>

                </tr>
            </thead>
            <tbody class="">
                <?php if(count($orders) == 0): ?>
                <tr>
                    <td colspan="5" class="text-center">No results found!</td>
                </tr>
                <?php else: ?>
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($order->id); ?></td>
                    <td><?php echo e($order->created_at); ?></td>
                    <td><?php echo e($order->order_status); ?></td>
                    <td><?php echo e($order->total); ?></td>


                    <td>
                        <div class="">
                            <a class="btn btn-secondary mx-2" href="<?php echo e(route('order-edit', ['order' => $order->id])); ?>"><i class="fa-solid fa-pencil" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></a>
                            <form method="post" action="<?php echo e(route('order-delete', ['order' => $order->id])); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <input type="hidden" name="id" value="<?php echo e($order->id); ?>" />
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </tbody>
        </table>

        <div class="pagination justify-content-center py-2">

            <?php echo $orders->links('pagination::bootstrap-5'); ?>


        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/admin/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/team1/farm-fresh/resources/views/admin/orders/index.blade.php ENDPATH**/ ?>