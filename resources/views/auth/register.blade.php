@extends('main')

@section('title', '| Register')

@section('content')
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading" style="background: #fff;">Create your account</div>
                <div class="panel-body">
                    {!! Form::open() !!}

                    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Name']) }}

                    {{ Form::email('email', null, ['class' => 'form-control form-spacing-top', 'placeholder' => 'Email']) }}

                    {{ Form::password('password', ['class' => 'form-control form-spacing-top', 'placeholder' => 'Password']) }}

                    {{ Form::password('password_confirmation', ['class' => 'form-control form-spacing-top', 'placeholder' => 'Confirm Password']) }}

                    {{ Form::submit('Register', ['class' => 'btn btn-primary btn-block form-spacing-top']) }}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection