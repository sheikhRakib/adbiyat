<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('meta')

    <title>{{ config('app.name', 'Adbiyat') }}</title>

    <!-- Styles -->
    {!! Html::style('assets/frontend/css/app.css') !!}
    @yield('header-css')
</head>

<body>
    <div id="app">
        <!-- ========== Start header ========== -->
        @include('frontend.includes.header')
        <!-- ========== end header ========== -->
        <div class="container my-4">
            @yield('content')
        </div>
    </div>

    {!! Html::script('assets/frontend/js/app.js') !!}
    @yield('footer-script')
</body>
</html>
