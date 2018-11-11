<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable=[
    	'name', 'info',
    ];
    public function evaluation(){
        return $this->hasMany('Laravel\Evaluation');
    }
    public function Competition(){
        return $this->hasMany('Laravel\Competitions_participant');
    }
    
}
