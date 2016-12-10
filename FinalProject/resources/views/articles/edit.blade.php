@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::model($article, ['action' => ['ArticlesController@update', $article], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name',null ,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title',null ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('allPages', 'All Pages') !!}
                {!! Form::checkbox('allPages') !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::text('description',null ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('htmlSnippet', 'HTML Snippet') !!}
                {!! Form::text('htmlSnippet',null ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('areas_id', 'Area ID') !!}
                {!! Form::number('areas_id',null ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('pages_id', 'Page ID') !!}
                {!! Form::number('pages_id',null ,['class'=>'form-control']) !!}
            </div>
            {!! Form::submit('Save Update',['class'=>'btn btn-default']) !!}
        {!! Form::close() !!}

        <a href="{{ action( 'ArticlesController@index') }}">
            Go Back
        </a>
    </div>
@endsection