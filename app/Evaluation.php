<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable = [
    					'competition_id',
                       'participant_id',
                        'arbiter_id',
                        'criterion_1',
                        'criterion_2',
                        'criterion_3',
                       'date_anulated',
    ];
    protected $date = 'date_anulated';

    public function participant(){
        return $this->belongsTo('App\User', 'participant_id');
    }
    public function arbiter(){
        return $this->belongsTo('App\User', 'arbiter_id');

    }
    public function competition(){
        return $this->belongsTo('App\Competition', 'competition_id');

    }


}
