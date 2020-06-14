@extends('welcome')

@section('content')
    <div>
        <h3>Edit</h3>
        <form method="POST" action="{{ route(\App\Helpers\ClassHelper\RouteNameHelper::POST_UPDATE, $post->id) }}">
            @method('PUT')
            @csrf
            <div>
                <label for="{{ \App\Models\Table\PostTable::TITLE }}">Titre: </label>
                <input
                    id="{{ \App\Models\Table\PostTable::TITLE }}"
                    name="{{ \App\Models\Table\PostTable::TITLE }}"
                    type="text"
                    value="{{ $post->title }}" >
            </div>
            <div>
                <label for="{{ \App\Models\Table\PostTable::BODY }}">Body: </label>
                <textarea
                    id="{{ \App\Models\Table\PostTable::BODY }}"
                    name="{{ \App\Models\Table\PostTable::BODY }}"
                >{{ $post->body }}</textarea>
            </div>
            <div>
                <label for="{{ \App\Models\Table\PostTable::CATEGORY_ID }}">Catégories: </label>
                <select id="{{ \App\Models\Table\PostTable::CATEGORY_ID }}" name="{{ \App\Models\Table\PostTable::CATEGORY_ID }}">
                    @foreach($categories as $category)
                        <option
                            value="{{ $category->id }}"
                            {{$category->id === $post->category_id ? 'selected' : ''}}>{{ $category->description }}</option>
                    @endforeach
                </select>
            </div>
            <input type="submit" value="Modifier">
        </form>

        <a href="{{ route(\App\Helpers\ClassHelper\RouteNameHelper::POST_SHOW, $post->id) }}">Annuler</a>
    </div>
@endsection
