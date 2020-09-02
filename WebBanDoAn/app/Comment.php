<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function user(){
        return $this->belongsTo('App\User','idUser','id');
    }

    public function product(){
        return $this->belongsTo('App\Product','idProduct','id');
    }
}
