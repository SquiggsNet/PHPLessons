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
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection