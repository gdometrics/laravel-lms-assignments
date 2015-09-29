@extends('layouts.master')

@section('content')

    <h1>{{ $assignment->name }}</h1>

    <hr>

    <p>{{ $assignment->description }}</p>
@endsection