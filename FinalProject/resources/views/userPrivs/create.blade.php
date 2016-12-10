@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::open(['action' => 'UserPrivsController@store' ]) !!}
            <div class="form-group">
                {!! Form::label('user_id', 'User ID') !!}
                {!! Form::number('user_id',null ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('privilege_id', 'Privilege ID') !!}
                {!! Form::number('privilege_id',null ,['class'=>'form-control']) !!}
            </div>
            {!! Form::submit('Add',['class'=>'btn btn-default']) !!}
        {!! Form::close() !!}

        <a href="{{ action( 'UserPrivsController@index') }}">
            Go Back
        </a>
    </div>
@endsection