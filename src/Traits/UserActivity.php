<?php

namespace Komicho\Laravel\ModelActivity\Traits;

use Illuminate\Support\Facades\Auth;

use Komicho\Laravel\ModelActivity\App\Models\Activity;

trait UserActivity
{
    public function allActivitys()
    {
        return $this->hasMany(Activity::class, 'user_id', 'id');
    }
}