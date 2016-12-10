@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::open(['action' => 'PrivilegesController@store' ]) !!}
            <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::text('description',null ,['class'=>'form-control']) !!}
            </div>
            {!! Form::submit('Add',['class'=>'btn btn-default']) !!}
        {!! Form::close() !!}

        <a href="{{ action( 'PrivilegesController@index') }}">
            Go Back
        </a>
    </div>
@endsection