<?php

namespace Komicho\Laravel\UserActivity\App\Models;

use Illuminate\Database\Eloquent\Model;

use Komicho\Laravel\UserActivity\Config;

class Activity extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'komicho_activities';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'item_id',
        'definition_flag'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['definition'];


    public function getDefinitionAttribute()
    {
        $definitions = (new Config())['definitions'];

        if (!in_array($this->definition_flag, array_keys($definitions))) {
            return $this->definition_flag;
        }

        return $definitions[$this->definition_flag];
    }
}
