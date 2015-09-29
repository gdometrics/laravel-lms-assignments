@extends('layouts.master')

@section('content')

    <h1>Modules</h1>

    <hr>

    <ul class="list-group">
        @foreach($modules as $module)
            <li class="list-group-item">
                <a href="module/{{ $module->id }}">
                    {{ $module->name }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection