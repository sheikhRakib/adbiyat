@extends('auth.master')

@section('header-css')
<!-- Font Awesome -->
{!! Html::style('assets/backend/plugins/fontawesome-free/css/all.min.css') !!}

<style>
    body,
    html {
        margin: 0;
        padding: 0;
        height: 100%;
        background: #f8fafc !important;
    }

    .login-card {
        height: 25rem;
        width: 25rem;
        margin-top: 12rem;
        margin-bottom: auto;
        background: #f39c12;
        position: relative;
        display: flex;
        justify-content: center;
        flex-direction: column;
        padding: 0rem;
    }

    .logo-card {
        position: absolute;
        top: -7rem;
        border-radius: 50%;
        background: #363738;
        padding: 0.5rem;
        text-align: center;
    }

    .logo {
        height: 11rem;
        width: 11rem;
        border-radius: 50%;
        border: 0.5rem solid white;
    }

</style>
@endsection

@section('content')
<div class="d-flex justify-content-center">
    <div class="login-card shadow-lg rounded">
        <!-- Brand -->
        <div class="d-flex justify-content-center mb-5">
            <div class="logo-card">
                <img class="logo" alt="Adbiyat" src="{{ asset('uploads/system/logo.svg') }}">
            </div>
        </div>
        <!-- ./Brand -->


        <!-- Login Form -->
        <div class="d-flex justify-content-center mt-5">
            {!! Form::open(['route'=>'login']) !!}
            
            {{-- email --}}
            <div class="input-group mb-2">
                {!! Form::email('email', null, ['class'=>$errors->has('email')?'form-control
                is-invalid':'form-control','placeholder'=>'Email Address']) !!}
                <div class="input-group-append">
                    <div class="input-group-text"><i class="fas fa-envelope"></i></div>
                </div>
            </div>
            {{-- ./email --}}

            {{-- password --}}
            <div class="input-group mb-2">
                {!! Form::password('password', ['class'=>$errors->has('password') ? 'form-control
                is-invalid':'form-control','placeholder'=>'Password']) !!}
                <div class="input-group-append">
                    <div class="input-group-text"><i class="fas fa-lock"></i></div>
                </div>
            </div>
            {{-- ./password --}}

            <div class="form-group">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="remember-me">
                    <label class="custom-control-label" for="remember-me">Remember me</label>
                </div>
            </div>

            {!! Form::submit('Login',['class'=>'form-control btn btn-primary']) !!}

            {!! Form::close() !!}

        </div>
        <!-- ./Login Form -->

        <div class="mt-4">
            <div class="d-flex justify-content-center">
                Don't have an account? <a href="register.html" class="ml-2">Sign Up</a>
            </div>
            <div class="d-flex justify-content-center">
                <a href="#">Forgot your password?</a>
            </div>
        </div>
    </div>
</div>
@endsection


@section('footer-script')
@endsection
