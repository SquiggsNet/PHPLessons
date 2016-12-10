@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Stylesheet Template ID: {{$styleTemplate->id}}</h1>
        <p>Name: {{$styleTemplate->name}}</p>
        <p>Description: {{$styleTemplate->description}}</p>
        <p>Content: {{$styleTemplate->content}}</p>
        <p>activeState: {{$styleTemplate->activeState}}</p>
        <p>Created By: {{$styleTemplate->created_by}}</p>
        <p>Creation Date: {{$styleTemplate->created_at}}</p>
        <p>Update By: {{$styleTemplate->updated_by}}</p>
        <p>Updated Date: {{$styleTemplate->updated_at}}</p>
        <a href="{{ action( 'StyleTemplateController@index') }}">
            Go Back
        </a>
    </div>
@endsection