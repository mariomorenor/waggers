<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class game_date extends Model
{
    protected $guarded=[''];


    public function waggers()
    {
        return $this->hasMany(Wagger::class);
    }
}
