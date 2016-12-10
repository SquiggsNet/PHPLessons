@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Page ID: {{$page->id}}</h1>
        <p>Name: {{$page->name}}</p>
        <p>Alias: {{$page->alias}}</p>
        <p>Description: {{$page->description}}</p>
        <p>Created By: {{$page->created_by}}</p>
        <p>Creation Date: {{$page->created_at}}</p>
        <p>Update By: {{$page->updated_by}}</p>
        <p>Updated Date: {{$page->updated_at}}</p>
        <a href="{{ action( 'PagesController@index') }}">
            Go Back
        </a>
    </div>
@endsection