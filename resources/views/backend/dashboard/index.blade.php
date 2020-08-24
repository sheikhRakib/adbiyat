@extends('backend.layouts.app')
@section('content')
    <!-- Info boxes -->
    <div class="row">
        <!-- /.col start -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
                <span class="info-box-icon bg-warning elevation-1">
                    <i class="nav-icon fa fa-industry"></i>
                </span>

                <div class="info-box-content">
                    <span class="info-box-text">Total Company</span>
                    <span class="info-box-number">0</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col end -->

        <!-- /.col start -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1">
                    <i class="nav-icon fa fa-sun-o"></i>
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Product</span>
                    <span class="info-box-number">9</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col end -->

        <!-- /.col start -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1">
                    <i class="fas fa-users"></i>
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Employee</span>
                    <span class="info-box-number">10</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col end -->
        <!-- /.col start -->
        <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
                <span class="info-box-icon bg-info elevation-1">
                    <i class="nav-icon fa fa-sun-o"></i>
                </span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Service</span>
                    <span class="info-box-number">9</span>
                </div>
                <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
        <!-- /.col end -->

        <!-- fix for small devices only -->
        <div class="clearfix hidden-md-up"></div>
    </div>
@endsection
@section('footer-script')
    <script src="{{ asset('/assets/backend/dist/js/Chart.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('/assets/backend/dist/js/dashboard-chart.min.js') }}" type="text/javascript"></script>
@endsection
