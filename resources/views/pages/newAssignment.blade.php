@extends('layouts.master')


@section('content')

    <h1>New Assignmet</h1>

    <hr>

    <form method="POST" action="/assignment/save">
        {!! csrf_field() !!}

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
        </div>

        <div class="form-group">
        <select id="module_id" name="module_id" class="form-control">
            @foreach ($modules as $id => $name)
                <option value="{{ $id }}">{{ $name }}</option>
            @endforeach
        </select>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" rows="10" id="description" name="description"></textarea>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </form>

@endsection