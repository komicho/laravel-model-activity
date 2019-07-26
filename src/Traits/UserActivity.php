<?php

namespace Komicho\Laravel\UserActivity\Traits;

use Komicho\Laravel\UserActivity\App\Models\Activity;

trait UserActivity
{
    public function activitys()
    {
        return $this->hasMany(Activity::class, 'user_id', 'id');
    }
}