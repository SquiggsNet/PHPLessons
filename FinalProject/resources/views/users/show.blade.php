@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>User ID: {{$user->id}}</h1>
        <p>First Name: {{$user->first_name}}</p>
        <p>Last Name: {{$user->last_name}}</p>
        <p>Email (User Name): {{$user->email}}</p>
        <p>Created By: {{$user->created_by}}</p>
        <p>Created Date: {{$user->created_at}}</p>
        <p>Updated By: {{$user->updated_by}}</p>
        <p>Updated Date: {{$user->updated_at}}</p>
        <a href="{{ action( 'UsersController@index') }}">
            Go Back
        </a>
    </div>
@endsection