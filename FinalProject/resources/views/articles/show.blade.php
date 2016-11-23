@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Article ID: {{$article->id}}</h1>
        <p>Name: {{$article->name}}</p>
        <p>Title: {{$article->title}}</p>
        <p>Page: {{$article->page}}</p>
        <p>All Pages: {{$article->allPages}}</p>
        <p>Description: {{$article->description}}</p>
        <p>Content Area: {{$article->contentArea}}</p>
        <p>HTML Snippet: {{$article->htmlSnippet}}</p>
        <p>Area ID:{{$article->area_id}}</p>
        <p>Page ID:{{$article->page_id}}</p>


        <a href="{{ action( 'ArticlesController@index') }}">
            Go Back
        </a>
    </div>
@endsection
