@extends('frontend.layouts.app')
@section('meta')
@endsection
@section('content')

<!-- ============== Error page start ============== -->
<div class="error-page-area bg-gray text-center default-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-lg-offset-2 col-md-offset-2">
                    <div class="error-box">
                        <h1>404</h1>
                        <h2>Sorry Page Was Not Found!</h2>
                        <a class="btn btn-theme effect btn-md" href="{{route('frontend.home')}}">Back To Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- ============== Error page end ============== -->
@endsection
