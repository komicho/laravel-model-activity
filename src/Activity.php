<?php

namespace Komicho\Laravel\UserActivity;

use Komicho\Laravel\UserActivity\App\Models\Activity as ActivityModel;

class Activity
{
    public static function add($user_id = 0, $item_id = 0, $definition_flag = '')
    {
        ActivityModel::create([
            'user_id' => $user_id,
            'item_id' => $item_id,
            'definition_flag' => $definition_flag
        ]);
        return true;
    }

    public static function all()
    {
        return ActivityModel::get();
    }
}