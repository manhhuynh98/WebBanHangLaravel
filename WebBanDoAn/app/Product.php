<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category(){
        return $this->belongsTo('App\Category','idCategory','id');
    }

    public function comment(){
        return $this->hasMany('App\Comment','idProduct','id');
    }
}
