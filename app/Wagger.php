<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Illuminate\Support\Facades\DB;

class Wagger extends Model
{
    protected $guarded=[''];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function game_date()
    {
        return $this->belongsTo(game_date::class,'game_dates_id');
    }

    public function wins(User $user)
    {
        $wins = Wagger::where('winner_user_id',$user->id)->count();
        return $wins;
    }
}
