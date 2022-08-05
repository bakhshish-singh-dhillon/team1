<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Farm Fresh') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/b23be4ec12.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link rel="icon" href="/images/logo-50.png" />
    <!-- Styles -->
    @yield('custom-css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="light-bottom-border">
            <div class="max-container d-flex justify-content-between">
                <div>
                    <a class="navbar-brand" href="{{ url('/') }}">
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

                @include('includes.nav')

                <div>
                    <?php if (Auth::check() && Auth::user()) : ?>
                        <a href="/user-profile/{{ Auth::user()->id }}" class="text-decoration-none d-inline-block my-2" data-toggle="tooltip" data-placement="bottom" title="User">
                            <i class="fa-solid fa-user-large rounded-circle mx-2 my-4 p-2 text-white bg-green"></i>
                        </a>
                    <?php else : ?>
                        <a href="/login" class="text-decoration-none" data-toggle="tooltip" data-placement="bottom" title="Login">
                            <!-- <span><img src="/images/user.png" alt="User" class="icon mx-2 my-4" /></span> -->
                            <!-- <i class="fa-solid fa-user"></i> -->
                            <i class="fa-solid fa-user rounded-circle mx-2 my-4 p-2 text-white bg-green"></i>

                        </a>
                    <?php endif; ?>


                    <a href="{{ route('cart') }}" class="text-decoration-none cart" data-toggle="tooltip" data-placement="bottom" title="Cart">
                        <span class="cart-box">
                            <!-- <img src="/images/shopping-cart.png" alt="Cart" class="icon mx-2 my-4" /> -->
                            <i class="fa-solid fa-cart-shopping rounded-circle mx-2 my-4 p-2 text-white bg-green"></i>
                            <span class="{{ session()->has('cart') && count(session()->get('cart')) ? 'cart-count' : '' }}">
                                {{ session()->has('cart') && count(session()->get('cart')) > 0 ? count(session()->get('cart')) : '' }} </span>
                        </span>
                    </a>
                    <?php if (Auth::check() && Auth::user()) : ?>
                        <a href="{{ route('logout') }}" data-toggle="tooltip" data-placement="bottom" title="Log-Out" onclick="event.preventDefault();return confirm('Are you sure you want to Log-Out?')?document.getElementById('logout-form').submit():false;">
                            <!-- <img src="/images/power.png" alt="Logout" class="icon mx-2 my-4" /> -->
                            <i class="fa-solid fa-power-off rounded-circle mx-2 my-4 p-2 text-white bg-green"></i>

                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    <?php endif; ?>
                </div>

            </div>
        </div>

        <ul class="mobile-hamburger">
            <li @if (isset($title)) class="<?php if ($title && $title == 'Home') {
                                                echo 'active';
                                            } ?>" @endif><a href="/" data-toggle="tooltip" data-placement="bottom" title="Home">Home</a></li>
            <li @if (isset($title)) class="<?php if ($title && $title == 'Products') {
                                                echo 'active';
                                            } ?>" @endif><a href="/products" data-toggle="tooltip" data-placement="bottom" title="Products">Products</a></li>
            <li @if (isset($title)) class="<?php if ($title && $title == 'About') {
                                                echo 'active';
                                            } ?>" @endif><a href="/about" data-toggle="tooltip" data-placement="bottom" title="About">About</a></li>
            <li @if (isset($title)) class="<?php if ($title && $title == 'Contact') {
                                                echo 'active';
                                            } ?>" @endif><a href="/contact" data-toggle="tooltip" data-placement="bottom" title="Contact">Contact</a></li>
            <?php if (Auth::check() && Auth::user()->is_admin) : ?>
                <li @if (isset($title)) class="<?php if ($title && $title == 'Admin') {
                                                    echo 'active';
                                                } ?>" @endif><a href="/admin" data-toggle="tooltip" data-placement="bottom" title="Admin">Admin</a></li>
            <?php endif; ?>
        </ul>
        @include('includes.flash')

        <main>
            @include('includes.theme-box')