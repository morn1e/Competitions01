<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
<<<<<<< HEAD
    protected $fillable[
    					'country',
    ];
=======
    protected $fillable = [
    	'country'
    ];
    public function profile(){
        return $this->hasMany('App\Profile');
    }
>>>>>>> cdda17f8b061381057d6971763318f21f10eeecc
}
