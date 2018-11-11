<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;
use Laravel\User;

class Competitions_participant extends Model
{
    protected $fillable = [
    	'competition_id', 'participant_id', 'date_withdrawn', 'result'
    ];

    public function participant(){
        return $this->belongsTo('Laravel\User', 'participant_id');
    }
    public function competition(){
        return $this->belongsTo('Laravel\Competition', 'competition_id');
    }
}
