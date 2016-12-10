@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>User Privileges</h1>
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>User_Privilege ID</th>
                    <th>User ID</th>
                    <th>Privilege ID</th>
                    <th>Created By</th>
                    <th>Created Date</th>
                    <th>Updated By</th>
                    <th>Updated Date</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($userPrivs as $userPriv)
                    <tr>
                        <td>
                            <a href="{{ action( 'UserPrivsController@show', ['id' => $userPriv->id]) }}">
                                {{$userPriv->id}}
                            </a>
                        </td>
                        <td>{{$userPriv->user_id}}</td>
                        <td>{{$userPriv->privilege_id}}</td>
                        <td>{{$userPriv->created_by}}</td>
                        <td>{{$userPriv->created_at}}</td>
                        <td>{{$userPriv->updated_by}}</td>
                        <td>{{$userPriv->updated_at}}</td>
                        <td>
                            {{ Form::open(['action' => ['UserPrivsController@edit', $userPriv], 'method' => 'get']) }}
                            <button type="submit" >
                                <span class="glyphicon glyphicon-pencil"></span>
                            </button>
                            {{ Form::close() }}
                        </td>
                        <td>
                            {{ Form::open(['action' => ['UserPrivsController@destroy', $userPriv], 'method' => 'delete']) }}
                            <button type="submit" >
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                            {{ Form::close() }}
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ action( 'UserPrivsController@create') }}">
            Give a User a Privelege
        </a>
    </div>
@endsection