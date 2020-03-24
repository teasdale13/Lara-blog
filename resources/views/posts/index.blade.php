
@extends('welcome')

@section('content')
    <div>
        <h3>Index</h3>
        @foreach($posts as $post )
            <h2>Titre: <a href="{{ route('post', $post->id) }}">{{ $post->title }}</a></h2>
            <h4>Catégorie: {{ $post->description }}</h4>
            <p>{{ $post->body }}</p>

        @endforeach
    </div>
@endsection
