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
                    <th>Created By</th>
                    <th>Created Date</th>
                    <th>Updated By</th>
                    <th>Updated Date</th>
                    <th></th>
                    <th></th>
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
                        <td>{{$page->created_by}}</td>
                        <td>{{$page->created_at}}</td>
                        <td>{{$page->updated_by}}</td>
                        <td>{{$page->updated_at}}</td>
                        <td>
                            {{ Form::open(['action' => ['PagesController@edit', $page], 'method' => 'get']) }}
                            <button type="submit" >
                                <span class="glyphicon glyphicon-pencil"></span>
                            </button>
                            {{ Form::close() }}
                        </td>
                        <td>
                            {{ Form::open(['action' => ['PagesController@destroy', $page], 'method' => 'delete']) }}
                            <button type="submit" >
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ action( 'PagesController@create') }}">
            Create a New Page
        </a>
    </div>
@endsection