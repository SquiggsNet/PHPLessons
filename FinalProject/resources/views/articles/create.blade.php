@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::open(['action' => 'ArticlesController@store' ]) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name',null ,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('title', 'Title') !!}
                {!! Form::text('title',null ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('page', 'Page') !!}
                {!! Form::number('page',null ,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('allPages', 'All Pages') !!}
                {!! Form::checkbox('allPages',null ,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::text('description',null ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('contentArea', 'Content Area') !!}
                {!! Form::text('contentArea',null ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('htmlSnippet', 'HTML Snippet') !!}
                {!! Form::text('htmlSnippet',null ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('area_id', 'Area ID') !!}
                {!! Form::number('area_id',null ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('page_id', 'Page ID') !!}
                {!! Form::number('page_id',null ,['class'=>'form-control']) !!}
            </div>
            {!! Form::submit('Add',['class'=>'btn btn-default']) !!}
        {!! Form::close() !!}

        <a href="{{ action( 'ArticlesController@index') }}">
            Go Back
        </a>
    </div>
@endsection