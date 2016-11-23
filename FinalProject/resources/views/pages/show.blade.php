@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Page ID: {{$page->id}}</h1>
        <p>Name: {{$page->name}}</p>
        <p>Alias: {{$page->alias}}</p>
        <p>Description: {{$page->description}}</p>
        <a href="{{ action( 'PagesController@index') }}">
            Go Back
        </a>
    </div>
@endsection