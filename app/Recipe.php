<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'name',
        'user_id',
        'taste_id',
        'balance_id',
        ];
    
    public function taste()
    {
        return $this->belongsTo('App\Taste');
    }
    
    public function balance()
    {
        return $this->belongsTo('App\Balance');
    }
    
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
