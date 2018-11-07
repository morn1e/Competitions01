<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
<<<<<<< HEAD
    protected $fillable[
    					'role',
    ];
=======
    protected $fillable = [
        'role',
    ];
    public function user(){
        return $this->hasMany('App\User');
    }
>>>>>>> cdda17f8b061381057d6971763318f21f10eeecc
}
