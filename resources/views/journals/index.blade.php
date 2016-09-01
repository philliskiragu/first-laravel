@extends('layouts.app')

@section('content')

    @foreach($entries as $entry)

        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel panel-heading">
                            <a href="/journals/{{$entry->id}}">Title: {{ $entry->title }}</a>
                        </div>
                        <div class="panel-body">
                            {{$entry->body}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

@stop