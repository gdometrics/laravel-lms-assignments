@extends('layouts.master')


@section('content')

    <h1>New Module</h1>

    <hr>

    <form method="POST" action="/module/save">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </form>

@endsection