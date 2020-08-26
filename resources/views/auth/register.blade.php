@extends('auth.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    {{-- Registration Form --}}
                    {!! Form::open(['route' => 'register']) !!}

                    {{-- firstname --}}
                    <div class="form-group row">
                        {!! Form::label('firstname', 'Firstname', ['class' => 'col-md-4 col-form-label text-md-right']);
                        !!}
                        <div class="col-md-6">
                            {!! Form::text('firstname', null, ['class'=>'form-control']); !!}
                        </div>
                    </div>
                    {{-- ./firstname --}}

                    {{-- lastname --}}
                    <div class="form-group row">
                        {!! Form::label('lastname', 'Lastname', ['class' => 'col-md-4 col-form-label text-md-right']);
                        !!}
                        <div class="col-md-6">
                            {!! Form::text('lastname', '', ['class'=>'form-control']); !!}
                        </div>
                    </div>
                    {{-- ./lastname --}}

                    {{-- username --}}
                    <div class="form-group row">
                        {!! Form::label('username', 'Username', ['class' => 'col-md-4 col-form-label text-md-right']);
                        !!}
                        <div class="col-md-6">
                            {!! Form::text('username', null, ['class'=>'form-control']); !!}
                        </div>
                    </div>
                    {{-- ./username --}}

                    {{-- email --}}
                    <div class="form-group row">
                        {!! Form::label('email', 'Email', ['class' => 'col-md-4 col-form-label text-md-right']);
                        !!}
                        <div class="col-md-6">
                            {!! Form::email('email', null, ['class'=>'form-control']); !!}
                        </div>
                    </div>
                    {{-- ./email --}}

                    {{-- password --}}
                    <div class="form-group row">
                        {!! Form::label('password', 'Password', ['class' => 'col-md-4 col-form-label text-md-right']);
                        !!}
                        <div class="col-md-6">
                            {!!
                            Form::password('password', ['class'=>'form-control']); !!}
                        </div>
                    </div>
                    {{-- ./password --}}

                    {{-- password confirm --}}
                    <div class="form-group row">
                        {!! Form::label('password_confirmation', 'Confirm Password', ['class' => 'col-md-4
                        col-form-label
                        text-md-right']);
                        !!}
                        <div class="col-md-6">
                            {!!
                            Form::password('password_confirmation', ['class'=>'form-control']); !!}
                        </div>
                    </div>
                    {{-- ./password confirm --}}

                    <div class="form-group row">
                        <div class="col-md-6 offset-md-4">
                            {!! Form::submit('Register', ['class'=>'btn btn-primary']); !!}
                        </div>
                    </div>

                    {!! Form::close() !!}
                    {{-- ./Registration Form --}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
