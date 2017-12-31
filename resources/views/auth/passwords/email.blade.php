@extends('main')

@section('title', '| Forgot my Password')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading" style="background: #fff;">Reset Password</div>
                <div class="panel-body">

                    {!! Form::open(['url' => 'password/email', 'method' => "POST"]) !!}

                    {{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email']) }}

                    {{ Form::submit('Reset Password', ['class' => 'btn btn-primary btn-block form-spacing-top']) }}

                    {!! Form::close() !!}

                    <hr>

                    <div class="form-group">
                        <div class="col-md-4 col-md-offset-4">
                            <a class="btn btn-success btn-block" href="{{ url('auth/login') }}">Return</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection