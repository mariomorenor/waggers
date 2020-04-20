<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Support\Facades\DB;

class Wagger extends Model
{
    protected $guarded=[''];

    public function winner()
    {
        return $this->hasOne(User::class,'id','winner_user_id');
    }
    public function loser()
    {
        return $this->hasOne(User::class,'id','loser_user_id');
    }
    
    public function game_date()
    {
        return $this->belongsTo(game_date::class,'game_dates_id');
    }



    // public function wins(User $user)
    // {
    //     $wins = Wagger::where('winner_user_id',$user->id)->count();
    //     return $wins;
    // }


}
