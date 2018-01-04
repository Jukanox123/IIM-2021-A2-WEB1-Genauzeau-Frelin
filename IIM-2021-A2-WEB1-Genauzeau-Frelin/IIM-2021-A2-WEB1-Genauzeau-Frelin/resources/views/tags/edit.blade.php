@extends('main')

@section('title', '| Edit Tag')

@section('content')
    {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PUT']) !!}

    {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Title']) }}
    {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block form-spacing-top']) }}

    {!! Form::close() !!}
@endsection