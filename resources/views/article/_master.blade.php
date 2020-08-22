@extends('layouts.app')

@section('content')
{{-- navbar --}}
@include('article._navbar')

<!-- Content -->
<div class="container my-4">
    <div class="row">
        {{-- main section --}}
        <div class="col-md-8">
            @yield('main')
        </div>
        {{-- aside section --}}
        <div class="col-md-4">
            @include('article._aside')
        </div>
    </div>
</div>
<!-- ./Content -->

{{-- footer --}}
@include('article._footer')

@endsection
