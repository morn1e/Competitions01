<?php

namespace Laravel;

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
        return $this->hasOne('Laravel\Profile');
    }
    public function role(){
        return $this->hasOne('Laravel\Role');
    }
    public function competition(){
        return $this->hasOne('Laravel\Competitions_participant');
    }
    public function evaluation(){
        return $this->hasMany('Laravel\Evaluation');
    }
    // public function evaluation_participant(){
    //     return $this->hasMany('Laravel\Evaluation', 'participant_id', 'id');
    // }
    // public function evaluation_arbiter(){
    //     return $this->hasMany('Laravel\Evaluation', 'arbiter_id', 'id' );
    // }
}
