@extends('layouts.master')


@section('content')

    <h1>Assignments</h1>

    <hr>

    <ul class="list-group">
        @foreach($assignments as $assignment)
            <li class="list-group-item">
                <a href="assignment/{{ $assignment->id }}">
                    {{ $assignment->name }}
                </a>
            </li>
        @endforeach
    </ul>

@endsection