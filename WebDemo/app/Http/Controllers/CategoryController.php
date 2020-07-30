<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function getCategory(){
        $category = Category::all();
        return view('admin.category.list',['category'=>$category]);
    }
}
