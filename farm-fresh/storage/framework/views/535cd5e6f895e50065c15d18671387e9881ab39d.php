<?php if(session()->has('success')): ?>
<div class="alert alert-success error-message">
    <i class="fa-solid fa-circle-check mx-2"></i> <?php echo e(session('success')); ?>

    <i class="fa-solid fa-xmark float-right py-1 cursor-pointer close"></i>
</div>
<?php endif; ?>

<?php if(session()->has('warning')): ?>
<div class="alert alert-warning error-message">
    <i class="fa-solid fa-triangle-exclamation mx-2"></i><?php echo e(session('warning')); ?>

    <i class="fa-solid fa-xmark float-right py-1 cursor-pointer close"></i>
</div>
<?php endif; ?>

<?php if(session()->has('error')): ?>
<div class="alert alert-danger error-message">
    <i class="fa-solid fa-circle-exclamation mx-2"></i> <?php echo e(session('error')); ?>

    <i class="fa-solid fa-xmark float-right py-1 cursor-pointer close"></i>
</div>
<?php endif; ?><?php /**PATH /var/www/html/team1/farm-fresh/resources/views/includes/flash.blade.php ENDPATH**/ ?>