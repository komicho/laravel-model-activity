<?php

namespace Komicho\Laravel\ModelActivity\Classes;

use Komicho\Laravel\ModelActivity\App\Models\Activity as ActivityModel;

class ActivityClass
{
    public static function add($user_id = 0, $item_id = 0, $model_name = '', $definition_flag = '')
    {
        ActivityModel::create([
            'user_id' => $user_id,
            'item_id' => $item_id,
            'model_name' => $model_name,
            'definition_flag' => $definition_flag
        ]);
        return true;
    }
}