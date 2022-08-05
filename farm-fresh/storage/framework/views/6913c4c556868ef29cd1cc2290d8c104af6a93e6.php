<?php $__env->startSection('content'); ?>
<div class="d-flex justify-content-between mb-2 my-3">
    <div class="title black-text"><?php echo e($title); ?> (<?php echo e($categories->total()); ?>)</div>

    <div class="d-flex justify-content-between mb-2">
        <!-- Button trigger modal -->
        <div>
            <form method="get" action="/admin/categories/search">
                <div class="btn-group mx-2">
                    <input class="form-control search-bar" type="search" name="search" placeholder="Search by name or id" value="<?php echo e(app('request')->input('search')); ?>" data-toggle="tooltip" data-placement="bottom" title="Search" />
                    <button class="btn btn-success"><i class="fas fa-search"></i></button>
                </div>
            </form>

        </div>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#categoryModal" data-bs-whatever="Create"><i class="fa-solid fa-plus mx-1" data-toggle="tooltip" data-placement="bottom" title="Create"></i>Create</button>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <table class="table align-middle mb-0 bg-white w-100">
            <thead class="bg-light ">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Parent</th>
                    <th class="w100">Actions</th>
                </tr>
            </thead>
            <tbody class="">
                <?php if(count($categories) == 0): ?>
                <tr colspan="4">No results found!</tr>
                <?php endif; ?>
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($cat->id); ?></td>
                    <td><?php echo e($cat->name); ?></td>
                    <td><?php echo e(null == $cat->parent ? 'NA' : $cat->parent->name); ?></td>
                    <td>
                        <div class="d-flex">
                            <!-- Button trigger modal -->

                            <button type="button" class="btn btn-primary mx-2" data-bs-toggle="modal" data-bs-target="#categoryModal" data-bs-whatever="Edit" data-bs-id="<?php echo e($cat->id); ?>" data-bs-name="<?php echo e($cat->name); ?>" data-bs-parent="<?php echo e(null == $cat->parent ? null : $cat->parent->id); ?>"><i class="fa-solid fa-pencil" data-toggle="tooltip" data-placement="bottom" title="Edit"></i></button>

                            <form method="post" action="<?php echo e(route('cat-delete', ['category' => $cat->id])); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('DELETE'); ?>
                                <input type="hidden" name="id" value="<?php echo e($cat->id); ?>" />
                                <button class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?')"><i class="fa-solid fa-trash-can" data-toggle="tooltip" data-placement="bottom" title="Delete"></i></button>
                            </form>

                        </div>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>
        </table>
        <!-- Button trigger modal -->
        <div class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header blue-bg">
                        <h5 class="modal-title" id="categoryModalLabel">Create Category</h5>
                        <button type="button" class="no-style white-text" data-bs-dismiss="modal"><i class="fa-solid fa-xmark"></i></button>
                    </div>
                    <div class="modal-body">
                        <form id="category_form" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="mb-3">
                                <label for="category-name" class="col-form-label">Category Name:
                                    <span class="text-danger" id="required">*</span>
                                </label>
                                <input type="text" class="form-control" id="category-name" name="category-name" placeholder="Category name">
                                <?php $__errorArgs = ['category-name'];
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
                            <div class="form-outline mb-4">
                                <label class="form-label" for="category_search">Parent Category:
                                </label>
                                <select name="category_id" id="category_search" class="form-control ">
                                    <option value="">Select parent</option>
                                    <?php $__currentLoopData = $parentCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($name->id); ?>">
                                        <?php echo e(ucfirst($name->name)); ?>

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
                            <div class="btn-toolbar justify-content-between">
                                <button type="submit" id="submit_btn" class="btn btn-primary">Create</button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="pagination justify-content-center py-2">

            <?php echo $categories->links('pagination::bootstrap-5'); ?>


        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts/admin/app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/team1/farm-fresh/resources/views/admin/categories/index.blade.php ENDPATH**/ ?>