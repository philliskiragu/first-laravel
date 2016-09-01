@extends('base')

@section('content')
    <h2>{{ $entry->title }}</h2>

    <entry>
        {{ $entry->body }}
    </entry>
@stop