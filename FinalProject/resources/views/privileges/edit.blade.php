@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::model($privilege, ['action' => ['PrivilegesController@update', $privilege], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('description', 'Description') !!}
                {!! Form::text('description',null ,['class'=>'form-control']) !!}
            </div>
            {!! Form::submit('Save Update',['class'=>'btn btn-default']) !!}
        {!! Form::close() !!}

        <a href="{{ action( 'PrivilegesController@index') }}">
            Go Back
        </a>
    </div>
@endsection