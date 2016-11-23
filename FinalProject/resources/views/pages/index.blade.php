@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Pages:</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Page ID</th>
                    <th>Name</th>
                    <th>Alias</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pages as $page)
                    <tr>
                        <td>
                            <a href="{{ action( 'PagesController@show', ['id' => $page->id]) }}">
                                {{$page->id}}
                            </a>
                        </td>
                        <td>{{$page->name}}</td>
                        <td>{{$page->alias}}</td>
                        <td>{{$page->description}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ action( 'PagesController@create') }}">
            Create a New Page
        </a>
    </div>
@endsection