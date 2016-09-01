@extends('base')

@section('content')
    <h2>Make entry</h2>
    {!! Form::open(['url'=> 'journals']) !!}
    <div>
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null) !!}
    </div>
    <div>
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', null) !!}
    </div>
    <div>
        {!! Form::submit('Add Entry') !!}

    </div>
    {!!Form::close()  !!}
@stop
 