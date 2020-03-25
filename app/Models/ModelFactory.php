<?php

namespace App\Models;

use App\Models\Interfaces\IModelData;
use App\Models\Table\CategoryTable;
use App\Models\Table\PostTable;

/**
 * Class ModelFactory
 * @author Kevin Teasdale-Dubé
 * @package App\Models
 */
class ModelFactory {

    /**
     * @param $table_name string The name of the table name of the Model needed.
     * @return IModelData a Model that implements the IModelData interface.
     */
    public static function getModel($table_name) : IModelData {
        switch ($table_name) {
            case PostTable::TABLE_NAME:
                return new Post();
            case CategoryTable::TABLE_NAME :
                return new Category();
        }
    }


}
