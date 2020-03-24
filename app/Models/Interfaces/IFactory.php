<?php

namespace App\Models\Interfaces;
/**
 * Interface IFactory
 * @package App\Models\Interfaces
 */
interface IFactory {

    public function getAll($table_name);
    public function getById($table_name,$id);
    public function insert($table_name, $data);
    public function updateById($table_name, $data, $id);
    public function deleteById($table_name, $id);

}
