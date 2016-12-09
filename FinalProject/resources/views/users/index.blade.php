@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Users:</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Created By</th>
                    <th>Created Date</th>
                    <th>Updated By</th>
                    <th>Updated Date</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>
                            <a href="{{ action( 'UsersController@show', ['id' => $user->id]) }}">
                                {{$user->id}}
                            </a>
                        </td>
                        <td>{{$user->first_name}}</td>
                        <td>{{$user->last_name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->created_by}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>{{$user->updated_by}}</td>
                        <td>{{$user->updated_at}}</td>
                        <td>
                            {{ Form::open(['action' => ['UsersController@edit', $user], 'method' => 'get']) }}
                            <button type="submit" >
                                <span class="glyphicon glyphicon-pencil"></span>
                            </button>
                            {{ Form::close() }}
                        </td>
                        <td>
                            {{ Form::open(['action' => ['UsersController@destroy', $user], 'method' => 'delete']) }}
                            <button type="submit" >
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ action( 'UsersController@create') }}">
            Create a New User
        </a>
    </div>
@endsection