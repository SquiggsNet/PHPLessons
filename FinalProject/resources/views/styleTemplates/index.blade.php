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
                        <td><a href="{{ action( 'StyleTemplateController@edit', ['id' => $styleTemplate->id]) }}">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a></td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ action( 'StyleTemplateController@create') }}">
            Create a New Stylesheet Template
        </a>
    </div>
@endsection