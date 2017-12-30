@extends('main')

@section('title', "| $post->title")

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center">{{ $post->title }}</h1>
            <p class="text-justify">{{ $post->body }}</p>
        </div>
    </div>
@endsection