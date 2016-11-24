@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Areas:</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Area ID</th>
                    <th>Name</th>
                    <th>Alias</th>
                    <th>Display Order</th>
                    <th>Description</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($areas as $area)
                    <tr>
                        <td>
                            <a href="{{ action( 'AreasController@show', ['id' => $area->id]) }}">
                                {{$area->id}}
                            </a>
                        </td>
                        <td>{{$area->name}}</td>
                        <td>{{$area->alias}}</td>
                        <td>{{$area->displayOrder}}</td>
                        <td>{{$area->description}}</td>
                        <td><a href="{{ action( 'AreasController@edit', ['id' => $area->id]) }}">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a></td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ action( 'AreasController@create') }}">
            Create a New Area
        </a>
    </div>
@endsection