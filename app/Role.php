<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{


    protected $fillable = [
        'role',
    ];
    public function user(){
        return $this->hasMany('Laravel\User');
    }
}
