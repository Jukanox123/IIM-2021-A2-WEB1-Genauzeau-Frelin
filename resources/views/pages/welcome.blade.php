@extends('main')

@section('title', '| Homepage')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="text-center">Welcome to our Laravel Blog!</h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">

            @foreach($posts as $post)

                <div class="post">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ substr($post->body, 0, 300) }}{{ strlen($post->body) > 300 ? "..." : "" }}</p>
                    <a href="{{ url('blog/' . $post->slug) }}" class="btn btn-primary">Read More</a>
                </div>
                <hr>

            @endforeach

        </div>
    </div>
@endsection