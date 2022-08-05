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
    <div id="app">
        <div class="light-bottom-border">
            <div class="max-container d-flex justify-content-between">
                <div>
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <picture>
                            <!-- Desktop logo -->
                            <source media="(min-width: 768px)" srcset="/images/logo-100.png 1x, /images/logo-200.png 2x" />
                            <!-- Mobile logo -->
                            <source media="(max-width: 767px)" srcset="/images/logo-50.png 1x, /images/logo-100.png 2x, /images/logo-200.png 3x" />
                            <!-- Logo by default -->
                            <img src="/images/logo-100.png" width="100" height="100" alt="Farm Fresh" />
                        </picture>
                    </a>
                </div>

                <?php echo $__env->make('includes.nav', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <div>
                    <?php if (Auth::check() && Auth::user()) : ?>
                        <a href="/user-profile/<?php echo e(Auth::user()->id); ?>" class="text-decoration-none d-inline-block my-2" data-toggle="tooltip" data-placement="bottom" title="User">
                            <i class="fa-solid fa-user-large rounded-circle mx-2 my-4 p-2 text-white bg-green"></i>
                        </a>
                    <?php else : ?>
                        <a href="/login" class="text-decoration-none" data-toggle="tooltip" data-placement="bottom" title="Login">
                            <!-- <span><img src="/images/user.png" alt="User" class="icon mx-2 my-4" /></span> -->
                            <!-- <i class="fa-solid fa-user"></i> -->
                            <i class="fa-solid fa-user rounded-circle mx-2 my-4 p-2 text-white bg-green"></i>

                        </a>
                    <?php endif; ?>


                    <a href="<?php echo e(route('cart')); ?>" class="text-decoration-none cart" data-toggle="tooltip" data-placement="bottom" title="Cart">
                        <span class="cart-box">
                            <!-- <img src="/images/shopping-cart.png" alt="Cart" class="icon mx-2 my-4" /> -->
                            <i class="fa-solid fa-cart-shopping rounded-circle mx-2 my-4 p-2 text-white bg-green"></i>
                            <span class="<?php echo e(session()->has('cart') && count(session()->get('cart')) ? 'cart-count' : ''); ?>">
                                <?php echo e(session()->has('cart') && count(session()->get('cart')) > 0 ? count(session()->get('cart')) : ''); ?> </span>
                        </span>
                    </a>
                    <?php if (Auth::check() && Auth::user()) : ?>
                        <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();document.getElementById('logout-form').submit(); return confirm('Are you sure you want to Log-Out?')" data-toggle="tooltip" data-placement="bottom" title="Log-Out">
                            <!-- <img src="/images/power.png" alt="Logout" class="icon mx-2 my-4" /> -->
                            <i class="fa-solid fa-power-off rounded-circle mx-2 my-4 p-2 text-white bg-green"></i>

                        </a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                    <?php endif; ?>
                </div>

            </div>
        </div>

        <ul class="mobile-hamburger">
            <li <?php if(isset($title)): ?> class="<?php if ($title && $title == 'Home') {
                                                echo 'active';
                                            } ?>" <?php endif; ?>><a href="/" data-toggle="tooltip" data-placement="bottom" title="Home">Home</a></li>
            <li <?php if(isset($title)): ?> class="<?php if ($title && $title == 'Products') {
                                                echo 'active';
                                            } ?>" <?php endif; ?>><a href="/products" data-toggle="tooltip" data-placement="bottom" title="Products">Products</a></li>
            <li <?php if(isset($title)): ?> class="<?php if ($title && $title == 'About') {
                                                echo 'active';
                                            } ?>" <?php endif; ?>><a href="/about" data-toggle="tooltip" data-placement="bottom" title="About">About</a></li>
            <li <?php if(isset($title)): ?> class="<?php if ($title && $title == 'Contact') {
                                                echo 'active';
                                            } ?>" <?php endif; ?>><a href="/contact" data-toggle="tooltip" data-placement="bottom" title="Contact">Contact</a></li>
            <?php if (Auth::check() && Auth::user()->is_admin) : ?>
                <li <?php if(isset($title)): ?> class="<?php if ($title && $title == 'Admin') {
                                                    echo 'active';
                                                } ?>" <?php endif; ?>><a href="/admin" data-toggle="tooltip" data-placement="bottom" title="Admin">Admin</a></li>
            <?php endif; ?>
        </ul>
        <?php echo $__env->make('includes.flash', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <main>
            <?php echo $__env->make('includes.theme-box', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/team1/farm-fresh/resources/views/includes/header.blade.php ENDPATH**/ ?>