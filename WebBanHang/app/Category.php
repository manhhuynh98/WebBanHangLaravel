<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Category extends Model
{
    //
    protected $table = 'categories';
    protected $guarded = [];

    public function product(){
        return $this->hasMany('Product','idcategory','id');
    }
}
