<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        $category = Category::all();
        $product = Product::all();
        $user = User::all();
        return view()->share('category',$category);
        return view()->share('product',$product);
        return view()->share('user',$user);
        $this->checkuser();
    }

    public function checkuser(){
        if (Auth::check()) {
            # code...
            return view()->share('infor',Auth::user());
        }
    }

    public function getHome(){
        return view('admin.pages.home');
    }
}
