<?php

namespace App\Http\Controllers;

use App\Helpers\ClassHelper\PostPageHelper;
use App\Http\Requests\PostsRequest;
use App\Models\DataFactory;
use App\Models\Table\CategoryTable;
use App\Models\Table\PostTable;
use Illuminate\Http\Request;

class PostController extends Controller {

    public function index() {
        $model = (new DataFactory())->getModel(PostTable::TABLE_NAME);
        $posts = $model->getAll();
        return view(PostPageHelper::INDEX, compact('posts'));
    }

    public function create() {
        $model = (new DataFactory())->getModel(CategoryTable::TABLE_NAME);
        $categories = $model->getAll();
        return view(PostPageHelper::CREATE, compact('categories'));
    }

    public function store(PostsRequest $request) {
        $model = (new DataFactory())->getModel(PostTable::TABLE_NAME);
        $model->insert($request->only([PostTable::TITLE, PostTable::BODY, PostTable::CATEGORY_ID]));
        return redirect()->route('posts');
    }

    public function show($id) {
        $model = (new DataFactory())->getModel(PostTable::TABLE_NAME);
        $post = $model->getById($id);
        return view(PostPageHelper::SHOW, compact('post'));
    }

    public function edit($id) {

    }

    public function update(Request $request, $id) {

    }

    public function destroy($id) {

    }
}
