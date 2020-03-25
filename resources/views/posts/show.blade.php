@extends('welcome')

@section('content')
    <div>
        <h3>Show</h3>
        <h2>Titre: {{ $post->title }}</h2>
        <p>{{ $post->body }}</p>
        <h4>Catégorie: {{ $post->description }}</h4>

        <a href="{{ route(\App\Helpers\ClassHelper\RouteNameHelper::POST_EDIT, $post->id) }}">Modifier</a>
        <form method="POST" action="{{ route(\App\Helpers\ClassHelper\RouteNameHelper::POST_DESTROY, $post->id) }}">
            @csrf
            @method('DELETE')
            <input type="submit" value="Supprimer">
        </form>
    </div>
@endsection
