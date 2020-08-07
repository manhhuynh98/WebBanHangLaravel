<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Product;

class Comment extends Model
{
    //
    protected $table = 'comment';

    public function user(){
        return $this->belongsTo('User','iduser','id');
    }

    public function product(){
        return $this->belongsTo('Product','idproduct','id');
    }
}
