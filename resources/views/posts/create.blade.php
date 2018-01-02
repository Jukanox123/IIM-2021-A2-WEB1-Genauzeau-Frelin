@extends('main')

@section('title', '| Create New Post')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="background: #fff;">Create New Post</div>
                <div class="panel-body">

                    {!! Form::open(array('route' => 'posts.store', 'data-parsley-validate' => '', 'files' => true)) !!}

                    {{ Form::text('title', null, array('class' => 'form-control', 'placeholder' => 'Title', 'required' => '', 'maxlength' => '255')) }}

                    {{ Form::text('slug', null, array('class' => 'form-control form-spacing-top', 'placeholder' => 'Slug', 'required' => '', 'minlength' => '5',
                    'maxlength' => '255')) }}

                    <hr>

                    <h4 class="text-center">Category</h4>
                    <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>

                    <hr>

                    <h4 class="text-center">Tags</h4>
                    <select name="tags[]" class="form-control select2-multi" multiple="multiple">
                        @foreach($tags as $tag)
                            <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                        @endforeach
                    </select>

                    {{ Form::file('featured_image', array('class' => 'form-spacing-top')) }}

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
    {!! Html::script('js/select2.min.js') !!}

    <script type="text/javascript">
        $('.select2-multi').select2();
    </script>
@endsection