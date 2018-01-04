@extends('main')

@section('title', '| Forgot my Password')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading" style="background: #fff;">Reset Password</div>
                <div class="panel-body">

                    {!! Form::open(['url' => 'password/reset', 'method' => "POST"]) !!}

                    {{ Form::hidden('token', $token) }}

                    {{ Form::email('email', $email, ['class' => 'form-control', 'placeholder' => 'Email']) }}

                    {{ Form::password('Password', ['class' => 'form-control form-spacing-top', 'placeholder' => 'New Password']) }}

                    {{ Form::password('Password_confirmation', ['class' => 'form-control form-spacing-top', 'placeholder' => 'Confirm New Password']) }}

                    {{ Form::submit('Reset Password', ['class' => 'btn btn-primary btn-block form-spacing-top']) }}

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection