@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-1">
    <h3>Make entry</h3>
    {!! Form::open(['url'=> 'journals']) !!}
    <div class="form-group">
        {!! Form::label('title', 'Title:') !!}
        {!! Form::text('title', null, ['class' =>'form-control']) !!}
    </div>
    <div>
        {!! Form::label('body', 'Body:') !!}
        {!! Form::textarea('body', null, ['class' =>'form-control']) !!}
    </div>
    <div>
        {!! Form::label('tags', 'Tags:') !!}
        {!! Form::text('tags', null, ['class' =>'form-control']) !!}
    </div>
    <div>
        {!! Form::submit('Add Entry', ['class' =>'btn btn-primary form-control']) !!}

    </div>
    {!!Form::close()  !!}
    </div>
    </div>
@stop
 