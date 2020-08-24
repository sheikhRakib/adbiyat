<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')

    <title>{{ config('app.name', 'Adbiyat') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

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
          <div class="row">
            @yield('content')
          </div>
      </div>
      <!-- ========== Start footer ========== -->
        @include('frontend.includes.footer')
      <!-- ========== end footer ========== -->
    </div>
    {!! Html::script('assets/frontend/js/app.js') !!}
    @yield('footer-script')
</body>

</html>
