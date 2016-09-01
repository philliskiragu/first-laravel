@extends('base')

@section('content')
    <h2>This week</h2>
    @foreach($entries as $entry)
        <h2>
            <a href="/journals/{{$entry->id}}">{{ $entry->title }}</a>
        </h2>
        <div class="body">{{$entry->body}}</div>
    @endforeach
@stop