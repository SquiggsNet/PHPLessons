@extends('layout')

@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <h1>{{ $card->title }}</h1>

            <ul class="list-group">
            @foreach($card->notes as $note)

                    <li class="list-group-item clearfix">

                        {{$note->body}}

                        <div class="pull-right">

                            <a href="#">{{ $note->user->username }}</a>
                            {{--<a href="{{ $note->path() }}"><img src="../images/edit_icon.png"/></a>--}}
                            <form method="GET" action="{{ $note->path() }}" class="pull-right">
                                {{csrf_field()}}
                                <button type="submit" class="btn">Edit Note</button>
                            </form>
                        </div>

                    </li>

            @endforeach
            </ul>

            <hr>

            <h3>Add a New Note</h3>

            <form method="POST" action="/cards/{{ $card->id }}/notes">
                {{csrf_field()}}

                <div class="form-group">
                    <textarea name="body" class="form-control"> {{old('body')}}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Add Note</button>
                </div>
            </form>

            @if (count($errors))
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
            @endif

        </div>
    </div>
@stop