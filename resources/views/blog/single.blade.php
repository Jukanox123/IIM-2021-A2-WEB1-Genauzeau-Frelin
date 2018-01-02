@extends('main')

@section('title', "| $post->title")

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <img src="{{ asset('images/' . $post->image) }}" height="400" width="750">
            <h1 class="text-center">{{ $post->title }}</h1>
            <p class="text-justify">{{ $post->body }}</p>
            <hr>
            <p class="text-center">Posted In: <em>{{ $post->category->name }}</em></p>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3 class="comments-title">
                <span class="glyphicon glyphicon-comment"></span>
                {{ $post->comments()->count() }} Comments
            </h3>
            @foreach($post->comments as $comment)
                <div class="comment">
                    <div class="author-info">
                        <img src="{{ "https://www.gravatar.com/avatar/" . md5(trim($comment->email)) . "?s=50&d=wavatar" }}"
                             class="author-image">
                        <div class="author-name">
                            <h4>{{ $comment->name }}</h4>
                            <p class="author-time">{{ date('F nS, Y - g:iA', strtotime($comment->created_at)) }}</p>
                        </div>
                    </div>

                    <div class="comment-content">
                        {{ $comment->comment }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="row">
        <div id="comment-form" class="col-md-8 col-md-offset-2">
            {{ Form::open(['route' => ['comments.store', $post->id], 'method' => 'POST']) }}

            <div class="row">
                <div class="col-md-6">
                    {{ Form::text('name', null, ['class' => 'form-control form-spacing-top', 'placeholder' => 'Name']) }}
                </div>

                <div class="col-md-6">
                    {{ Form::email('email', null, ['class' => 'form-control form-spacing-top', 'placeholder' => 'Email']) }}
                </div>

                <div class="col-md-12">
                    {{ Form::textarea('comment', null, ['class' => 'form-control form-spacing-top',
                    'placeholder' => 'Comment', 'rows' => '5']) }}
                    {{ Form::submit('Add comment', ['class' => 'btn btn-success btn-block form-spacing-top']) }}
                </div>
            </div>

            {{ Form::close() }}
        </div>
    </div>
@endsection