<?php

namespace App\Models;

use App\Models\Interfaces\IModelData;
use App\Models\Table\CategoryTable;
use App\Models\Table\PostTable;

class DataFactory {

    public function getModel($table_name) : IModelData {
        switch ($table_name) {
            case PostTable::TABLE_NAME:
                return new Post();
            case CategoryTable::TABLE_NAME :
                return new Category();
        }
    }


}
