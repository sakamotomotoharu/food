<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Taste extends Model
{
    public function recipes()
    {
        return $this->hasMany('App\Recipe');
    }
    
}
