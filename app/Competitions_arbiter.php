<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competitions_arbiter extends Model
{
	protected $fillable = [
    	'competition_id', 'arbiter_id'
    ];
}
