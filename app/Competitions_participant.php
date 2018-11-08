<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Competitions_participant extends Model
{
    protected $fillable = [
    	'competition_id', 'participant_id', 'date_withdrawn', 'result'
    ];

    public function user(){
        return $this->hasMany('App\User');
    }
}
