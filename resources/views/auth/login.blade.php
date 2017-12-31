@extends('main')

@section('title', '| Login')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading" style="background: #fff;">Access your account</div>
                <div class="panel-body">
                    {!! Form::open() !!}

                    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder'=>'Email']) }}

                    {{ Form::password('password', ['class' => 'form-control form-spacing-top', 'placeholder'=>'Password']) }}

                    {{ Form::checkbox('remember') }}
                    {{ Form::label('remember', 'Remember Me', ['class' => 'form-spacing-top']) }}
                    
                    {{ Form::submit('Login', ['class' => 'btn btn-primary btn-block form-spacing-top']) }}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection