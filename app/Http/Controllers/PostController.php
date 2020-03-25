<?php

namespace App\Http\Controllers;

use App\Helpers\ClassHelper\PostPageHelper;
use App\Helpers\ClassHelper\RouteNameHelper;
use App\Http\Requests\PostsRequest;
use App\Models\ModelFactory;
use App\Models\Table\CategoryTable;
use App\Models\Table\PostTable;

/**
 * Get the data from the Models and after give it to the views.
 * Class PostController
 * @author Kevin Teasdale-Dubé
 * @package App\Http\Controllers
 */
class PostController extends Controller {

    /**
     * Get all the posts from Post and give it to the 'index' view.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $model = ModelFactory::getModel(PostTable::TABLE_NAME);
        $posts = $model->getAll();
        return view(PostPageHelper::INDEX, compact('posts'));
    }

    /**
     * Get all the categories to give it to the 'create' view to populate the select tag.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create() {
        $model = ModelFactory::getModel(CategoryTable::TABLE_NAME);
        $categories = $model->getAll();
        return view(PostPageHelper::CREATE, compact('categories'));
    }

    /**
     * When the user submit the form, this function is call and give the data to the appropriate model.
     * @param PostsRequest $request Data from the form already validate.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(PostsRequest $request) {
        $model = ModelFactory::getModel(PostTable::TABLE_NAME);
        $model->insert($request->only([PostTable::TITLE, PostTable::BODY, PostTable::CATEGORY_ID]));
        return redirect()->route(RouteNameHelper::POST_INDEX);
    }

    /**
     * Get the Post by his id and after give it to the 'show' view
     * @param $id int of the Post to show.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show($id) {
        $model = ModelFactory::getModel(PostTable::TABLE_NAME);
        $post = $model->getById($id);
        return view(PostPageHelper::SHOW, compact('post'));
    }

    /**
     * Get the Data of the post the user want to update, also get all the categories so the user will be able to
     * change the category of the Post. Send the data to the 'edit' view.
     * @param $id int The id of the Post the user want to edit.
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id) {
        $model = ModelFactory::getModel(PostTable::TABLE_NAME);
        $cat_model = ModelFactory::getModel(CategoryTable::TABLE_NAME);
        return view(PostPageHelper::EDIT, ['post' => $model->getById($id), 'categories' => $cat_model->getAll()]);
    }

    /**
     * Send data to the Model to update it in the Database. After redirect to the 'show' view.
     * @param PostsRequest $request The data already validate
     * @param $id int The id of the post to update.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(PostsRequest $request, $id) {
        $model = ModelFactory::getModel(PostTable::TABLE_NAME);
        $model->updateById($request->only([PostTable::TITLE, PostTable::BODY, PostTable::CATEGORY_ID]),$id);
        return redirect()->route(RouteNameHelper::POST_SHOW, $id);
    }

    /**
     * Send to the Model the id of the Post to delete. Then after redirect to the 'index' view
     * @param $id int The id of the Post to delete from the Database.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id) {
        $model = ModelFactory::getModel(PostTable::TABLE_NAME);
        $model->deleteById($id);
        return redirect()->route(RouteNameHelper::POST_INDEX);
    }
}
