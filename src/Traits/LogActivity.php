<?php

namespace Komicho\Laravel\ModelActivity\Traits;

use Illuminate\Support\Facades\Auth;

use Komicho\Laravel\ModelActivity\App\Models\Activity;
use Komicho\Laravel\ModelActivity\Classes\ActivityClass;

trait LogActivity
{
    public function activityAdd($definition_flag = '')
    {
        $user_id = Auth::id();
        ActivityClass::add($user_id, $this->id, get_class($this), $definition_flag);
    }

    public function activitys()
    {
        return $this->hasMany(Activity::class, 'item_id', 'id')
            ->where('model_name', '=', get_class($this));
    }
}