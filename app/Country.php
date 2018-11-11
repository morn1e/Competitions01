<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{

    protected $fillable = [
    	'country'
    ];
    public function profile(){
        return $this->hasMany('Laravel\Profile');
    }
}
