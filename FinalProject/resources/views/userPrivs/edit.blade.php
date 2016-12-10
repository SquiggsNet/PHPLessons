@extends('layouts.app')

@section('content')
    <div class="container">
        {!! Form::model($userPriv, ['action' => ['UserPrivsController@update', $userPriv], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('user_id', 'User ID') !!}
                {!! Form::number('user_id',null ,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('privilege_id', 'Privilege ID') !!}
                {!! Form::number('privilege_id',null ,['class'=>'form-control']) !!}
            </div>
            {!! Form::submit('Save Update',['class'=>'btn btn-default']) !!}
        {!! Form::close() !!}

        <a href="{{ action( 'UserPrivsController@index') }}">
            Go Back
        </a>
    </div>
@endsection