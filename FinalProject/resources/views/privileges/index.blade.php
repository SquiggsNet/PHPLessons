@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Privileges</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Privilege ID</th>
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
                @foreach ($privileges as $privilege)
                    <tr>
                        <td>
                            <a href="{{ action( 'PrivilegesController@show', ['id' => $privilege->id]) }}">
                                {{$privilege->id}}
                            </a>
                        </td>
                        <td>{{$privilege->description}}</td>
                        <td>{{$privilege->created_by}}</td>
                        <td>{{$privilege->created_at}}</td>
                        <td>{{$privilege->updated_by}}</td>
                        <td>{{$privilege->updated_at}}</td>
                        <td>
                            {{ Form::open(['action' => ['PrivilegesController@edit', $privilege], 'method' => 'get']) }}
                            <button type="submit" >
                                <span class="glyphicon glyphicon-pencil"></span>
                            </button>
                            {{ Form::close() }}
                        </td>
                        <td>
                            {{ Form::open(['action' => ['PrivilegesController@destroy', $privilege], 'method' => 'delete']) }}
                            <button type="submit" >
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ action( 'PrivilegesController@create') }}">
            Create a New Privelege
        </a>
    </div>
@endsection