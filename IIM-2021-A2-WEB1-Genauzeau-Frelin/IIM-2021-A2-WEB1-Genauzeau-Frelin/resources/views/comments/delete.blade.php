@extends('main')

@section('title', '| Delete Comment')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center">Delete this comment ?</h1>

            {{ Form::model($comment, ['route' => ['comments.destroy', $comment->id]]) }}

            {{ Form::text('name', null, ['class' => 'form-control', 'disabled' => '', 'placeholder' => 'Name']) }}
            {{ Form::text('email', null, ['class' => 'form-control form-spacing-top', 'disabled' => '', 'placeholder' => 'Email']) }}
            {{ Form::textarea('comment', null, ['class' => 'form-control form-spacing-top','disabled' => '', 'placeholder' => 'Comment']) }}

            {{ Form::close() }}

            {{ Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) }}

            {{ Form::submit('YES DELETE THIS COMMENT', ['class' => 'btn btn-block btn-danger btn-lg form-spacing-top']) }}

            {{ Form::close() }}
        </div>
    </div>
@endsection