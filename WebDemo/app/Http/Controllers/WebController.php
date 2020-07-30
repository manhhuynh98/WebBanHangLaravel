<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    //
    public function home(){
        return view('pages.home');
    }

    public function about(){
        return view('pages.about');
    }
}
