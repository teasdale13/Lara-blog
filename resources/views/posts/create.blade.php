@extends('welcome')

@section('content')
    <div>
        <h3>Create</h3>
        <form method="POST" action="{{ route( \App\Helpers\ClassHelper\RouteNameHelper::POST_STORE ) }}">
            @csrf
            <label for="{{ \App\Models\Table\PostTable::TITLE }}">Title :</label><br>
            <input type="text" id="{{ \App\Models\Table\PostTable::TITLE }}" name="{{ \App\Models\Table\PostTable::TITLE }}"><br>
            <label for="{{ \App\Models\Table\PostTable::BODY }}">Body :</label><br>
            <input type="text" id="{{ \App\Models\Table\PostTable::BODY }}" name="{{ \App\Models\Table\PostTable::BODY }}"><br>
            <label for="{{ \App\Models\Table\PostTable::CATEGORY_ID }}">Catégories</label><br>
            <select id="{{ \App\Models\Table\PostTable::CATEGORY_ID }}" name="{{ \App\Models\Table\PostTable::CATEGORY_ID }}">
                <option value="none">À déterminer</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->description }}</option>
                @endforeach
            </select><br><br>
            <input type="submit" value="Submit">

        </form>
    </div>
@endsection
