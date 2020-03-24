<?php

namespace App\Models;

use App\Models\Interfaces\IModelData;
use App\Models\Table\CategoryTable;
use App\Models\Table\PostTable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Post extends Model implements IModelData {

    public $timestamps = true;

    protected $fillable = [PostTable::TITLE, PostTable::BODY, PostTable::CATEGORY_ID];

    public function getAll() {
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
                CategoryTable::TABLE_NAME.'.'.CategoryTable::DESCRIPTION
            )
            ->get();
    }

    public function getById($id) {
        return Post::findOrFail($id);
    }

    public function updateById($data , $id) {

    }

    public function deleteById($id) {

    }

    public function insert($data) {
        return Post::create($data);
    }
}
