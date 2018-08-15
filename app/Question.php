<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    /*
    *Relationship with verification code
    */
    public function motivation(){
        return $this->hasOne('App\Motivation');
    }
}
