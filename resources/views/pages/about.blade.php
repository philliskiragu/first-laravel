@extends('base')

@section('content')
    <h2>About Me</h2>
    {{--using conditional statements--}}
    @if ($name== "Phillis")
        <p>Welcome {{$name}}</p>
    @else
        <p>Welcome Stranger</p>
    @endif
@stop