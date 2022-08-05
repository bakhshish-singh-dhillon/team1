<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between mb-2 my-3">
    <div class="title black-text"><?php echo e($title); ?> (<?php echo e($users->total()); ?>)</div>

    <div class="d-flex">
        <form method="get" action="/admin/users/">
            <div class="btn-group mb-2 float-right">
                <input class="form-control search-bar" type="search" name="search" placeholder="Search by id, name or email" value="<?php echo e(app('request')->input('search')); ?>" data-toggle="tooltip" data-placement="bottom" title="Search" />
                <button class="btn btn-success"><i class="fas fa-search"></i></button>
            </div>
        </form>
    </div>
</div>

<div class="card">
    <div class="card-body">

        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light ">
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody class="">
                <?php if(count($users) == 0): ?>
                <tr>
                    <td colspan="5" class="text-center">No results found!</td>
                </tr>
                <?php endif; ?>
                <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->id); ?></td>
                    <td><?php echo e($user->first_name); ?></td>
                    <td><?php echo e($user->last_name); ?></td>
                    <td><?php echo e($user->email); ?></td>
                    <td>
                        <div class="">
                            <form method="post" action="<?php echo e(route('user-update', ['user' => $user->id])); ?>" onsubmit="return confirm('Are you sure you want to <?= $user->is_active ? 'Deactivate' : 'Activate'; ?> user?');">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('PUT'); ?>
                                <input type="hidden" name="id" value="<?php echo e($user->id); ?>" />
                                <?php if($user->is_active): ?>
                                <button class="btn btn-danger">
                                    <i class="fa-solid fa-ban" data-toggle="tooltip" data-placement="bottom" title="Deactivate"></i>
                                </button>
                                <?php else: ?>
                                <button class="btn btn-success">
                                    <i class="fa-solid fa-check" data-toggle="tooltip" data-placement="bottom" title="activate"></i>
                                </button>
                                <?php endif; ?>
                            </form>
                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <div class="pagination justify-content-center py-2">

            <?php echo $users->links('pagination::bootstrap-5'); ?>


        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/admin/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/team1/farm-fresh/resources/views/admin/users/index.blade.php ENDPATH**/ ?>