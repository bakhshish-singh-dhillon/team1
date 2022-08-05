<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Farm Fresh')); ?></title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="https://kit.fontawesome.com/b23be4ec12.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="icon" href="/images/logo-50.png" />
    <!-- Styles -->
    <?php echo $__env->yieldContent('custom-css'); ?>
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">

</head>

<body>
    <div id="admin">
        <?php echo $__env->make('includes.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="row m-0 p-0">
            <div class="col-md-2" id="admin_sidebar">
                <?php echo $__env->make('includes.admin.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-md-10"><?php /**PATH /var/www/html/team1/farm-fresh/resources/views/includes/admin/header.blade.php ENDPATH**/ ?>