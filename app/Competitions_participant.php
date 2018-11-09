<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Competitions_participant extends Model
{
    protected $fillable = [
    	'competition_id', 'participant_id', 'date_withdrawn', 'result'
    ];

    public function participant(){
        return $this->belongsTo('App\User', 'participant_id');
    }
    public function competition(){
        return $this->belongsTo('App\Competition', 'competition_id');
    }
}
