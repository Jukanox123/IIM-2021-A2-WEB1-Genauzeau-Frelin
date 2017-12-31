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

                    <hr>

                    <h4 class="text-center">Not a member ?</h4>
                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-4">
                            <a class="btn btn-success btn-block" href="{{ url('auth/register') }}">Join now</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection