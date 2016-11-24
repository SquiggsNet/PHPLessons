@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::model($styleTemplate, ['action' => ['StyleTemplateController@update', $styleTemplate], 'method' => 'put']) !!}
            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name',null ,['class'=>'form-control'])!!}
            </div>

            <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::text('description',null ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('content', 'Content') !!}
                {!! Form::text('content',null ,['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('activeState', 'Active State') !!}
                {!! Form::checkbox('activeState') !!}
            </div>

            {!! Form::submit('Save Update',['class'=>'btn btn-default']) !!}
        {!! Form::close() !!}

        <a href="{{ action( 'StyleTemplateController@index') }}">
            Go Back
        </a>
    </div>
@endsection