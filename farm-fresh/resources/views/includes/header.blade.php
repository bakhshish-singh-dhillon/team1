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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <div class="normal-shadow">
            <div class="max-container d-flex justify-content-between">
                <div>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <picture>
                            <!-- Desktop logo -->
                            <source media="(min-width: 768px)"
                                srcset="/images/logo-100.png 1x, /images/logo-200.png 2x" />
                            <!-- Mobile logo -->
                            <source media="(max-width: 767px)"
                                srcset="/images/logo-50.png 1x, /images/logo-100.png 2x, /images/logo-200.png 3x" />
                            <!-- Logo by default -->
                            <img src="/images/logo-100.png" width="100" height="100" alt="Farm Fresh" />
                        </picture>
                    </a>
                </div>

                @include('includes.nav')

                <div>
                    <?php if (Auth::check() && Auth::user()) : ?>
                    <a href="/userProfile/{{ Auth::user()->id }}" class="text-decoration-none">
                        <span><img src="/images/user.png" alt="User" class="icon mx-2 my-4" /></span>
                    </a>
                    <?php else : ?>
                    <a href="/login" class="text-decoration-none">
                        <span><img src="/images/user.png" alt="User" class="icon mx-2 my-4" /></span>
                    </a>
                    <?php endif; ?>


                    <a href="{{ route('cart') }}" class="text-decoration-none cart">
                        <span class="cart-box">
                            <img src="/images/shopping-cart.png" alt="Cart" class="icon mx-2 my-4" />
                            <span
                                class="{{ session()->has('cart') && count(session()->get('cart')) ? 'cart-count' : '' }}">
                                {{ session()->has('cart') ? count(session()->get('cart')) : '' }} </span>
                        </span>
                    </a>
                    <?php if (Auth::check() && Auth::user()) : ?>
                    <span>
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit(); return confirm('Are you sure you want to Log-Out?')">
                            <img src="/images/power.png" alt="Logout" class="icon mx-2 my-4" />
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </span>
                    <?php endif; ?>
                </div>

            </div>
        </div>
        @include('includes.flash')

        <main>
