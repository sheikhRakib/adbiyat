<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('meta')

    <title>{{ env('APP_NAME','Adbiyat') }} | @yield('title','Administration')</title>

    <!-- Css links -->
    {!! Html::style('assets/backend/google-font/font.css') !!}
    {!! Html::style('assets/backend/plugins/fontawesome-free/css/all.min.css') !!}
    {!! Html::style('assets/backend/dist/css/adminlte.min.css') !!}
    {!! Html::style('assets/backend/dist/css/custom.css') !!}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    @yield('header-css')
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
    <!-- Navbar -->
    @include('backend.includes.header')

    <!-- Main Sidebar Container -->
    @include('backend.includes.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">

        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @include('backend.includes.messages')
                @yield('content')
            </div>
            <!--/. container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    @include('backend.includes.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
{!! Html::script('assets/backend/plugins/jquery/jquery.min.js') !!}
{!! Html::script('assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}
{!! Html::script('assets/backend/dist/js/adminlte.js') !!}
{!! Html::script('assets/backend/plugins/jquery/jquery.validate.min.js') !!}
{!! Html::script('assets/backend/plugins/sweet-alert/js/sweetalert.min.js') !!}
{!! Html::script('assets/backend/custom/js/sweetalert.js') !!}

@yield('footer-script')
</body>

</html>
