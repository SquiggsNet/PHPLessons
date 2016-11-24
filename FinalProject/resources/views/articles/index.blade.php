@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Articles:</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Article ID</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>page</th>
                    <th>allPages</th>
                    <th>Description</th>
                    <th>Content Area</th>
                    <th>HTML Snippet</th>
                    <th>Area ID</th>
                    <th>Page ID</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $article)
                    <tr>
                        <td>
                            <a href="{{ action( 'ArticlesController@show', ['id' => $article->id]) }}">
                                {{$article->id}}
                            </a>
                        </td>
                        <td>{{$article->name}}</td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->page}}</td>
                        <td>{{$article->allPages}}</td>
                        <td>{{$article->description}}</td>
                        <td>{{$article->contentArea}}</td>
                        <td>{{$article->htmlSnippet}}</td>
                        <td>{{$article->area_id}}</td>
                        <td>{{$article->page_id}}</td>
                        <td>
                            {{ Form::open(['action' => ['ArticlesController@edit', $article], 'method' => 'get']) }}
                            <button type="submit" >
                                <span class="glyphicon glyphicon-pencil"></span>
                            </button>
                            {{ Form::close() }}
                        </td>
                        <td>
                            {{ Form::open(['action' => ['ArticlesController@destroy', $article], 'method' => 'delete']) }}
                            <button type="submit" >
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ action( 'ArticlesController@create') }}">
            Create a New Article
        </a>
    </div>
@endsection