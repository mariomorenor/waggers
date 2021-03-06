<?php

namespace App;

use App\Mail\ConfirmAccountMail;
use App\Mail\ResetPasswordMail;
use App\Notifications\ResetPasswordNotification;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use App\Wagger;
use App\game_date;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;
    use SoftDeletes;
    use CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','confirmation_code','nickname'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function sendEmailVerificationNotification()
    {   
     
        Mail::to($this)
            ->send(new ConfirmAccountMail($this->confirmation_code));
       
    }

    public function sendPasswordResetNotification($token)
    {
        Mail::to($this)->send(new ResetPasswordMail($token,$this->email));
    }

    public function waggersWon()
    {
        return $this->hasMany(Wagger::class,'winner_user_id');
    }
    public function waggersFailed()
    {
        return $this->hasMany(Wagger::class,'loser_user_id');
    }


    // public function where_has_been_local_user()
    // {
    //     return $this->hasMany(game_date::class,'local_user_id');
    // }

}
