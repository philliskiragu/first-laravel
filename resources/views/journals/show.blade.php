@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel panel-heading">
                        {{$entry->title}}
                    </div>
                    <div class="panel-body">
                        <entry>
                            {{ $entry->body }}
                        </entry>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop