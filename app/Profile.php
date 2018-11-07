<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
    	'name',
    	'country_id'
    ];
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
    public function country()
    {
    	return $this->belongsTo('App\Country');
    }
}
