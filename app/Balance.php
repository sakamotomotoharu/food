<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Balance extends Model
{
    public function recipe()
    {
        return $this->hasMany('App\Recipe');
    }
}
