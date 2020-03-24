<?php

namespace App\Models\Interfaces;

/**
 * Interface IModelData
 * @package App\Models\Interfaces
 */
interface IModelData {

    public function getAll();
    public function getById($id);
    public function insert($data);
    public function updateById($data,$id);
    public function deleteById($id);

}
