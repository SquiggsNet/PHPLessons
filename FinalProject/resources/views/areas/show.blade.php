@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Area ID: {{$area->id}}</h1>
        <p>Name: {{$area->name}}</p>
        <p>Alias: {{$area->alias}}</p>
        <p>Display Order: {{$area->displayOrder}}</p>
        <p>Description: {{$area->description}}</p>
        <p>Created By: {{$area->created_by}}</p>
        <p>Creation Date: {{$area->created_at}}</p>
        <p>Update By: {{$area->updated_by}}</p>
        <p>Updated Date: {{$area->updated_at}}</p>
        <a href="{{ action( 'AreasController@index') }}">
            Go Back
        </a>
    </div>
@endsection