@extends('app')
@section('content')
    <h3>People I admire</h3>
    @if(count($people))
    <ul>
        @foreach($people as $person)
            <li>{{ $person }}</li>
            @endforeach
    </ul>
    @endif
@stop
