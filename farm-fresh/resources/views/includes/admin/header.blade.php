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
    <div id="admin">
        @include('includes.flash')
        <div class="row m-0 p-0">
            <div class="col-md-2" id="admin_sidebar">
                @include('includes.admin.sidebar')
            </div>
            <div class="col-md-10">