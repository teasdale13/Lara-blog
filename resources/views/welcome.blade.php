<!DOCTYPE html>

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
            crossorigin="anonymous">

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <nav>
            <a href="{{ route(\App\Helpers\ClassHelper\RouteNameHelper::HOME) }}">Home</a>
            <a href="{{ route(\App\Helpers\ClassHelper\RouteNameHelper::POST_INDEX) }}">Posts</a>
            <a href="{{ route(\App\Helpers\ClassHelper\RouteNameHelper::POST_CREATE) }}">Add post</a>
            <a href="{{ route(\App\Helpers\ClassHelper\RouteNameHelper::ABOUT) }}">À propos</a>
        </nav>
        <div class="content">
            <div class="container">
                @yield('content')
            </div>

        </div>
    </body>
</html>
