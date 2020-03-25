<?php

namespace App\Models;

use App\Models\Interfaces\IModelData;
use App\Models\Table\CategoryTable;
use Illuminate\Database\Eloquent\Model;

/**
 * Interact with the Database.
 * Class Category
 * @author Kevin Teasdale-Dubé
 * @package App\Models
 */
class Category extends Model implements IModelData {

    protected $fillable = [CategoryTable::DESCRIPTION];
    public $timestamps = true;

    /**
     * Return all the categories.
     * @return Category[]|\Illuminate\Database\Eloquent\Collection
     */
    public function getAll() {
        return Category::all();
    }

    /**
     * Return a category by her id.
     * @param $id int the id of the category
     */
    public function getById($id) {
        // TODO implement function.
    }

    /**
     * Create a new Category.
     * @param $data array Data of the category
     */
    public function insert($data) {
        // TODO implement function.
    }

    /**
     * Update a category by her id.
     * @param $data array Updated data of a category.
     * @param $id int Id of the category to update.
     */
    public function updateById($data, $id) {
        // TODO implement function.
    }

    /**
     * Delete a category by her id.
     * @param $id int The id of the category to delete.
     */
    public function deleteById($id) {
        // TODO implement function.
    }
}
