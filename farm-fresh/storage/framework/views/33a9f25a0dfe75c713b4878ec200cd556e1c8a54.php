<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between mb-2 my-3">
    <div class="title black-text"><?php echo e($title); ?> (<?php echo e($reviews->total()); ?>)</div>

    <div class="d-flex justify-content-between mb-2">
        <!-- Button trigger modal -->
        <div>
            <form method="get" action="/admin/reviews/">
                <div class="btn-group mx-2">
                    <input class="form-control search-bar" type="search" name="search" placeholder="Search by id, name or rating" value="<?php echo e(app('request')->input('search')); ?>" data-toggle="tooltip" data-placement="bottom" title="Search" />
                    <button class="btn btn-success"><i class="fas fa-search"></i></button>
                </div>
            </form>

        </div>
    </div>
</div>

<div class="card">
    <table class="table align-middle mb-0 bg-white">
        <thead class="bg-light ">
            <tr>
                <th>#</th>
                <th>Review</th>
                <th>Rating</th>
                <th class="w100">Actions</th>
            </tr>
        </thead>
        <tbody class="">
            <?php if(count($reviews) == 0): ?>
            <tr colspan="4">No results found!</tr>
            <?php endif; ?>
            <?php $__currentLoopData = $reviews; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $review): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($review->id); ?></td>
                <td><?php echo e($review->review); ?></td>
                <td><?php echo e($review->rating); ?></td>
                <td>
                    <div class="btn-group">
                        <form method="post" action="<?php echo e(route('review-update', ['review' => $review->id])); ?>" onsubmit="return confirm('Are you sure you want to <?= $review->is_approved ? 'Disapprove' : 'Approve'; ?> review?');">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <input type="hidden" name="id" value="<?php echo e($review->id); ?>" />
                            <?php if($review->is_approved): ?>
                            <button class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Dis-approve" style="margin-right: 10px;">
                                Disapprove
                            </button>
                            <?php else: ?>
                            <button class="btn btn-success" data-toggle="tooltip" data-placement="bottom" title="Approved" style="margin-right: 10px;">
                                Approve
                            </button>
                            <?php endif; ?>
                        </form>
                    </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>

<div class="pagination justify-content-center py-2">

    <?php echo $reviews->links('pagination::bootstrap-5'); ?>


</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/admin/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/team1/farm-fresh/resources/views/admin/reviews/index.blade.php ENDPATH**/ ?>