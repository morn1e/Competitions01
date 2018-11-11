<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
    	'name',
    	'country_id',
        'user_id'
    ];
    public function user()
    {
    	return $this->belongsTo('Laravel\User');
    }
    public function country()
    {
    	return $this->belongsTo('Laravel\Country');
    }
}
