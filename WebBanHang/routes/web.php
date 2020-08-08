<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('home');
});
Route::get('/home', 'HomeController@getHome')->name('home');

view()->composer('*', function ($view) {
    if (Auth::check()) {
        return view()->share('infor',Auth::user());
    }
});

Route::get('/login', 'HomeController@getLogin');
Route::post('/login', 'HomeController@postLogin');
Route::get('/logout', 'HomeController@getLogout');
Route::get('/register', 'HomeController@getRegister');
Route::post('/register', 'HomeController@postRegister');

Route::get('/product-list', 'HomeController@getProductList');
Route::get('/product-detail/{id}', 'HomeController@getProductDetail');
Route::post('/post-comment/{id}/{iduser}', 'HomeController@postComment');
Route::get('/about', 'HomeController@getAbout');
Route::get('/profile', 'HomeController@getProfile');
Route::get('/contast', 'HomeController@getContast');
Route::post('/profile', 'HomeController@postEditProfile');
Route::post('/test', 'HomeController@test');


Route::group(['prefix' => 'admin','middleware'=>'adminlogin'], function () {
    Route::get('home', 'Controller@getHome');

    Route::group(['prefix' => 'category'], function () {
        Route::get('list', 'CategoryController@getList');

        Route::get('add', 'CategoryController@getAddList');
        Route::post('add', 'CategoryController@postAddList');

        Route::get('edit/{id}', 'CategoryController@getEditList');
        Route::post('edit/{id}', 'CategoryController@postEditList');

        Route::get('delete/{id}', 'CategoryController@getDelete');
    });

    Route::group(['prefix' => 'product'], function () {
        Route::get('list', 'ProductController@getList');

        Route::get('add', 'ProductController@getAddList');
        Route::post('add', 'ProductController@postAddList');

        Route::get('edit/{id}', 'ProductController@getEditList');
        Route::post('edit/{id}', 'ProductController@postEditList');

        Route::get('delete/{id}', 'ProductController@getDelete');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('list', 'UserController@getList');

        Route::get('add', 'UserController@getAddList');
        Route::post('add', 'UserController@postAddList');

        Route::get('edit/{id}', 'UserController@getEditList');
        Route::post('edit/{id}', 'UserController@postEditList');

        Route::get('delete/{id}', 'UserController@getDelete');
    });

    Route::group(['prefix' => 'comment'], function () {
        Route::get('list', 'CommentController@getList');

        Route::get('edit/{id}', 'CommentController@getEditList');
        Route::post('edit/{id}', 'CommentController@postEditList');

        Route::get('delete/{id}', 'CommentController@getDelete');
    });
});


