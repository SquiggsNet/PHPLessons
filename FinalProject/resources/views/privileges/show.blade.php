@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Privilege ID: {{$privilege->id}}</h1>
        <p>Description: {{$privilege->description}}</p>
        <p>Created By: {{$privilege->created_by}}</p>
        <p>Creation Date: {{$privilege->created_at}}</p>
        <p>Update By: {{$privilege->updated_by}}</p>
        <p>Updated Date: {{$privilege->updated_at}}</p>
        <a href="{{ action( 'PrivilegesController@index') }}">
            Go Back
        </a>
    </div>
@endsection