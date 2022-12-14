<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function recipe()
    {
        return $this->belongsTo('App\Recipe');
    }
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
