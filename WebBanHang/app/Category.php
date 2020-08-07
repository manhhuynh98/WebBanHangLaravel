<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $table = 'Categories';

    public function product(){
        return $this->hasMany('App\Product','idcategory','id');
    }
}
