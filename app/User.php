<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'email', 'password', 'role_id', 'profile_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function profile(){
        return $this->hasOne('App\Profile');
    }
    public function role(){
        return $this->hasOne('App\Role');
    }
    public function competition(){
        return $this->hasOne('App\Competitions_participant');
    }
    public function evaluation(){
        return $this->hasMany('App\Evaluation');
    }
    // public function evaluation_participant(){
    //     return $this->hasMany('App\Evaluation', 'participant_id', 'id');
    // }
    // public function evaluation_arbiter(){
    //     return $this->hasMany('App\Evaluation', 'arbiter_id', 'id' );
    // }
}
