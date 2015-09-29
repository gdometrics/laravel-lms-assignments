<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1">
    <title>Whiteboard</title>
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
</head>
<body>
    <div class="container">

        @include('layouts.partials.nav')

        @yield('content')
    </div>
    <script src="{{ elixir('js/app.js') }}"></script>
</body>
</html>