@extends('main')

@section('title', '| Edit Comment')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Edit Comment</h1>

            {{ Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'PUT']) }}

            {{ Form::text('name', null, ['class' => 'form-control', 'disabled' => '', 'placeholder' => 'Name']) }}
            {{ Form::text('email', null, ['class' => 'form-control form-spacing-top', 'disabled' => '', 'placeholder' => 'Email']) }}
            {{ Form::textarea('comment', null, ['class' => 'form-control form-spacing-top', 'placeholder' => 'Comment']) }}
            {{ Form::submit('Update Comment', ['class' => 'btn btn-block btn-success form-spacing-top']) }}

            {{ Form::close() }}
        </div>
    </div>  
@endsection