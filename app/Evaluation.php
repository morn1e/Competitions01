<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evaluation extends Model
{
    protected $fillable [
    					'competition_id';
           'participant_id',
            'arbiter_id',
            'criterion_1',
            'criterion_2',
            'criterion_3',
           'date_anulated',
    ];
    protected $date = 'date_anulated';
}
