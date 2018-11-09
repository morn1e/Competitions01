<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $fillable=[
    	'name', 'info',
    ];
    public function evaluation(){
        return $this->hasMany('App\Evaluation');
    }
    public function Competition(){
        return $this->hasMany('App\Competitions_participant');
    }
    
}
