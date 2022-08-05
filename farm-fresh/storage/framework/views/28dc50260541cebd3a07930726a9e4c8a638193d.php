<?php $__env->startSection('content'); ?>
<div class="container my-4">
    <div class="row justify-content-center text-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                    
                    <img src="/images/404.png" alt="404">
                    <h1 class="head-404">This page does not exist.</h1>
                    <p>Looks like you entered a page which doesn't exist anymore.</p>
                    <p>Let's take you back to home.</p>
                    <a href="/home" class="btn">Go To Home</a>
                </div>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/team1/farm-fresh/resources/views/404.blade.php ENDPATH**/ ?>