<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <nav>
            <a href="{{ route('home') }}">Home</a>
            <a href="{{ route('posts') }}">Posts</a>
            <a href="{{ route('post_create') }}">Add post</a>
        </nav>
        <div class="content">
            @yield('content')
        </div>
    </body>
</html>
