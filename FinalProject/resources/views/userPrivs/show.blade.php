@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>User_Pirvilege ID: {{$userPriv->id}}</h1>
        <p>User ID: {{$userPriv->user_id}}</p>
        <p>Privilege ID: {{$userPriv->privilege_id}}</p>
        <p>Created By: {{$userPriv->created_by}}</p>
        <p>Creation Date: {{$userPriv->created_at}}</p>
        <p>Update By: {{$userPriv->updated_by}}</p>
        <p>Updated Date: {{$userPriv->updated_at}}</p>
        <a href="{{ action( 'UserPrivsController@index') }}">
            Go Back
        </a>
    </div>
@endsection