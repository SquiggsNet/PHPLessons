@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::open(['action' => 'UsersController@store' ]) !!}
            <div class="form-group">
                {!! Form::label('first_name', 'First Name') !!}
                {!! Form::text('first_name',null ,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('last_name', 'Last Name') !!}
                {!! Form::text('last_name',null ,['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email',null ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('password', 'Password') !!}
                {!! Form::text('password',null ,['class'=>'form-control']) !!}
            </div>
            {!! Form::submit('Add',['class'=>'btn btn-default']) !!}
        {!! Form::close() !!}

        <a href="{{ action( 'UsersController@index') }}">
            Go Back
        </a>
    </div>
@endsection