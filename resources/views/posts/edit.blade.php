@extends('main')

@section('title', '| Edit Blog Post')

@section('stylesheets')
    {!! Html::style('css/select2.min.css') !!}
@endsection

@section('content')

    <div class="row">
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true]) !!}

        <div class="col-md-8">
            {{ Form::text('title', null, ['class' => 'form-control input-lg', 'placeholder' => 'Title']) }}

            {{ Form::text('slug', null, ['class' => 'form-control form-spacing-top', 'placeholder' => 'Slug']) }}

            {{ Form::select('category_id', $categories, null, ['class' => 'form-control form-spacing-top', 'placeholder' => 'Category']) }}
            <br>
            {{ Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multi', 'placeholder' => 'Tags', 'multiple' => 'multiple']) }}

            {{ Form::file('featured_image', array('class' => 'form-spacing-top')) }}

            {{ Form::textarea('body', null, ['class' => 'form-control form-spacing-top', 'placeholder' => 'Body']) }}
        </div>

        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Create At:</dt>
                    <dd>{{ date('j M Y h:ia', strtotime($post->created_at)) }}</dd>
                </dl>

                <dl class="dl-horizontal">
                    <dt>Last Updated:</dt>
                    <dd>{{ date('j M Y h:ia', strtotime($post->updated_at)) }}</dd>
                </dl>

                <hr>

                <div class="row">
                    <div class="col-sm-6">
                        {{ Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) }}
                    </div>
                    <div class="col-sm-6">
                        {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn
                        btn-danger btn-block')) !!}
                    </div>
                </div>
            </div>
        </div>

        {!! Form::close() !!}
    </div>

@stop

@section('scripts')
    {!! Html::script('js/select2.min.js') !!}

    <script type="text/javascript">
        $('.select2-multi').select2();
    </script>
@endsection