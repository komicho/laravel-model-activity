<?php

namespace Komicho\Laravel\ModelActivity\App\Models;

use Illuminate\Database\Eloquent\Model;

use Komicho\Laravel\ModelActivity\Config;

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
        'model_name',
        'definition_flag',
        'definition_note'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [ ];


    public function getDefinitionAttribute()
    {
        $definitions = (new Config())['definitions'];
        
        if (!isset($definitions)) {
            return $this->definition_flag;
        }

        if (!in_array($this->definition_flag, array_keys($definitions))) {
            return $this->definition_flag;
        }

        return $definitions[$this->definition_flag];
    }

    public function getNoteAttribute()
    {
        return $this->definition_note;
    }

    public function user()
    {
        // Get user model
        $userModel = config('auth.providers.users.model');

        // Link the relationship with the user model
        return $this->hasOne($userModel, 'id', 'user_id');
    }
}
