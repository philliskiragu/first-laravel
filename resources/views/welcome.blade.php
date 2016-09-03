@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    Welcome to the JournalX
                <div><br>

                    {{--check if user is authenticated--}}
                @if(Auth::user())
                    <a href="/journals">View all Journal Entries</a>

{{--                    @include('journals.index')--}}
                    @elseif("Login to view Journals")

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
