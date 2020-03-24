<?php

namespace App\Models;

use App\Models\Interfaces\IModelData;
use App\Models\Table\CategoryTable;
use Illuminate\Database\Eloquent\Model;

class Category extends Model implements IModelData {

    protected $fillable = [CategoryTable::DESCRIPTION];
    public $timestamps = true;

    public function getAll() {
        return Category::all();
    }

    public function getById($id) {

    }

    public function insert($data) {

    }

    public function updateById($data, $id) {

    }

    public function deleteById($id) {

    }
}
