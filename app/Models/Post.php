<?php

namespace App\Models;

use App\Models\Interfaces\IModelData;
use App\Models\Table\CategoryTable;
use App\Models\Table\PostTable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

/**
 * Interact with the Database
 * Class Post
 * @author Kevin Teasdale-Dubé
 * @package App\Models
 */
class Post extends Model implements IModelData {

    public $timestamps = true;

    protected $fillable = [PostTable::TITLE, PostTable::BODY, PostTable::CATEGORY_ID];

    /**
     * Return all the posts.
     * @return \Illuminate\Support\Collection
     */
    public function getAll() {
        return $this->getBaseQuery()->orderBy(PostTable::TABLE_NAME.'.'.PostTable::ID, 'desc')->get();
    }

    /**
     * Return a post by his ID
     * @param $id int of the post.
     * @return Model|\Illuminate\Database\Query\Builder|object|null
     */
    public function getById($id) {
        return $this->getBaseQuery()->where(PostTable::TABLE_NAME.'.'.PostTable::ID, $id)->first();
    }

    /**
     * Update the post by his id.
     * @param $data array Updated data of the post.
     * @param $id int The id of the post
     * @return mixed
     */
    public function updateById($data , $id) {
        return Post::find($id)->update($data);
    }

    /**
     * Delete a post by his id.
     * @param $id int The id of the post to delete.
     * @return int
     */
    public function deleteById($id) {
        return Post::destroy($id);
    }

    /**
     * Create a new post.
     * @param $data array The data of a post.
     * @return mixed The new post.
     */
    public function insert($data) {
        return Post::create($data);
    }

    /**
     * Generate a base query to make sure to get all the data needed.
     * @return \Illuminate\Database\Query\Builder
     */
    private function getBaseQuery() {
        return DB::table(PostTable::TABLE_NAME)
            ->join(
                CategoryTable::TABLE_NAME,
                PostTable::TABLE_NAME.'.'.PostTable::CATEGORY_ID,
                '=' ,
                CategoryTable::TABLE_NAME.'.'.CategoryTable::ID
            )
            ->select(
                PostTable::TABLE_NAME.'.'.PostTable::ID ,
                PostTable::TABLE_NAME.'.'.PostTable::TITLE,
                PostTable::TABLE_NAME.'.'.PostTable::BODY,
                PostTable::TABLE_NAME.'.'.PostTable::CATEGORY_ID,
                CategoryTable::TABLE_NAME.'.'.CategoryTable::DESCRIPTION
            );
    }
}
