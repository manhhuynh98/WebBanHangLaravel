<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $table = 'Comment';

    public function user(){
        return $this->belongsTo('App\User','iduser','id');
    }

    public function product(){
        return $this->belongsTo('App\Product','idproduct','id');
    }
}
