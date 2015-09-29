@extends('layouts.master')

@section('content')

    <h1>{{ $module->name }}</h1>

    <hr>

    <h1>Assignments</h1>

    <ul class="list-group">
        @foreach($module->assignments as $assignment)
            <li class="list-group-item">
                <a href="/assignment/{{ $assignment->id }}">
                    {{ $assignment->name }}
                </a>
            </li>
        @endforeach
    </ul>

@endsection