@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Stylesheet Templates:</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Template ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Content</th>
                    <th>Active State</th>
                    <th>Created By</th>
                    <th>Created Date</th>
                    <th>Updated By</th>
                    <th>Updated Date</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($styleTemplates as $styleTemplate)
                    <tr>
                        <td>
                            <a href="{{ action( 'StyleTemplateController@show', ['id' => $styleTemplate->id]) }}">
                                {{$styleTemplate->id}}
                            </a>
                        </td>
                        <td>{{$styleTemplate->name}}</td>
                        <td>{{$styleTemplate->description}}</td>
                        <td>{{$styleTemplate->content}}</td>
                        <td>{{$styleTemplate->activeState}}</td>
                        <td>{{$styleTemplate->created_by}}</td>
                        <td>{{$styleTemplate->created_at}}</td>
                        <td>{{$styleTemplate->updated_by}}</td>
                        <td>{{$styleTemplate->updated_at}}</td>
                        <td>
                            {{ Form::open(['action' => ['StyleTemplateController@edit', $styleTemplate], 'method' => 'get']) }}
                            <button type="submit" >
                                <span class="glyphicon glyphicon-pencil"></span>
                            </button>
                            {{ Form::close() }}
                        </td>
                        <td>
                            {{ Form::open(['action' => ['StyleTemplateController@destroy', $styleTemplate], 'method' => 'delete']) }}
                            <button type="submit" >
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ action( 'StyleTemplateController@create') }}">
            Create a New Stylesheet Template
        </a>
    </div>
@endsection