<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class game_date extends Model
{
    protected $guarded=[''];


    public function waggers()
    {
        return $this->hasMany(Wagger::class);
    }


    public function local_user()
    {
        return $this->hasOne(User::class,'id','local_user_id');
    }

    public function visitor_user()
    {
        return $this->hasOne(User::class,'id','visitor_user_id');
    }
    
}
