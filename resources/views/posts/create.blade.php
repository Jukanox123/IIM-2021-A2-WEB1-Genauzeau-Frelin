@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background: #fff;">Create your post</div>
                <div class="panel-body">
                    {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '')) !!}

                    {{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Title', 'required' => '', 'maxlength' => '255')) }}

                    {{ Form::text('slug', null, array('class' => 'form-control form-spacing-top', 'placeholder' => 'Slug', 'required' => '', 'minlength' => '5',
                    'maxlength' => '255')) }}

                    {{ Form::textarea('body', null, array('class' => 'form-control form-spacing-top', 'placeholder' => 'Body', 'required' => '')) }}

                    {{ Form::submit('Create Post', array('class' => 'btn btn-success btn-lg btn-block form-spacing-top')) }}

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
@endsection