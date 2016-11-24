@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::model($page, ['action' => ['PagesController@update', $page], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name',null ,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('alias', 'Alias') !!}
                {!! Form::text('alias',null ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::text('description',null ,['class'=>'form-control']) !!}
            </div>
            {!! Form::submit('Save Update',['class'=>'btn btn-default']) !!}
        {!! Form::close() !!}

        <a href="{{ action( 'PagesController@index') }}">
            Go Back
        </a>
    </div>
@endsection