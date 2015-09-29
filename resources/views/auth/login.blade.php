@extends('layouts.master')


@section('content')

    <div class="col-md-6 col-md-offset-3">
        <form method="POST" action="/auth/login">
            {!! csrf_field() !!}

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}">
            </div>

            <div class="form-group">
                <input type="checkbox" name="remember"> Remember me
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-default">Login</button>
            </div>
        </form>
    </div>

@endsection