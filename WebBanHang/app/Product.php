<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\Comment;

class Product extends Model
{
    //
    protected $table = 'products';

    public function category(){
        return $this->belongsTo('Category','idcategory','id');
    }

    public function comment(){
        return $this->hasMany('Comment');
    }


}
