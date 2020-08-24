@extends('frontend.layouts.app')
@section('header-css')
<!-- Font Awesome -->
{!! Html::style('assets/backend/plugins/fontawesome-free/css/all.min.css') !!}
{!! Html::style('assets/backend/dist/css/adminlte.min.css') !!}
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
@endsection
@section('content')
<div class="login-box mx-auto">
    <div class="login-logo">
        <a><b>Admin</b> Login</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            @include('backend.includes.messages')
            <p class="login-box-msg">Login to start your session</p>
            {!! Form::open(['url'=>'login','method'=>'post']) !!}
            <div class="form-group">
                <label>Email Address</label>
                <div class="input-group mb-3">
                    {!! Form::email('email','',['class'=>$errors->has('email')?'form-control is-invalid':'form-control','placeholder'=>'Email Address']) !!}
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <strong><label>Password</label> <a class="float-right" href="{{ route('password.request') }}">Forgot password?</a></strong>
                <div class="input-group mb-3">
                    {!! Form::password('password',['class'=>$errors->has('password')?'form-control is-invalid':'form-control','placeholder'=>'Password']) !!}
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    {!! Form::submit('Login',['class'=>'form-control btn btn-primary']) !!}
                </div>
                <!-- /.col -->
            </div>
            {!! Form::close() !!}
      </div>
  </div>
</div>
@endsection
@section('footer-script')
<!-- jQuery -->
{!! Html::script('assets/backend/plugins/jquery/jquery.min.js') !!}
{!! Html::script('assets/backend/plugins/bootstrap/js/bootstrap.bundle.min.js') !!}
{!! Html::script('assets/backend/dist/js/adminlte.min.js') !!}
@endsection
