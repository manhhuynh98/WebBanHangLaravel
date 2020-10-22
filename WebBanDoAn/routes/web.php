<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/','HomeController@index' );

Route::get('home','HomeController@index' );

view()->composer('*', function ($view) {
    if (Auth::check()) {
        return view()->share('infoUser',Auth::user());
    }
});

Route::get('login', 'HomeController@getLogin');
Route::post('login', 'HomeController@postLogin');
Route::get('logout', 'HomeController@logout');

Route::get('loginwithgoogle', 'HomeController@getLoginWithGoogle');
Route::get('loginwithgoogle/callback', 'HomeController@getLoginWithGoogleCallBack');


Route::get('register', 'HomeController@getRegister');
Route::post('register', 'HomeController@postRegister');

Route::get('product-detail/{id}', 'HomeController@getProductDetail');

Route::get('add-cart/{id}', 'CartController@addCart')->name('cart.add');
Route::get('edit-cart-minus/{id}', 'CartController@editCartMinus');
Route::get('edit-cart-plus/{id}', 'CartController@editCartPlus');
Route::get('edit-cart-quanty/{id}/{sl}', 'CartController@editCartInput');
Route::get('delete-item-cart/{id}', 'CartController@removeItemCart');
Route::get('get-cart', 'CartController@getCart');

Route::get('profile', 'HomeController@getProfile');

Route::group(['prefix' => 'admin','middleware' => 'adminlogin'], function () {

    Route::get('home', function () {
        return view('admin.home');
    });

    Route::group(['prefix' => 'category'], function () {
        Route::get('list', 'CategoryController@list');
        Route::get('edit/{id}', 'CategoryController@getEdit');
        Route::post('edit/{id}', 'CategoryController@postEdit');
        Route::post('add', 'CategoryController@postAdd');
        Route::get('delete/{id}', 'CategoryController@getDelete');
    });

    Route::group(['prefix' => 'product'], function () {
        Route::get('list', 'ProductController@list');
        Route::get('edit/{id}', 'ProductController@getEdit');
        Route::post('edit/{id}', 'ProductController@postEdit');
        Route::post('add', 'ProductController@postAdd');
        Route::get('delete/{id}', 'ProductController@getDelete');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('list', 'UserController@list');
        Route::get('edit/{id}', 'UserController@getEdit');
        Route::post('edit/{id}', 'UserController@postEdit');
        Route::post('add', 'UserController@postAdd');
        Route::get('delete/{id}', 'UserController@getDelete');
    });

    Route::group(['prefix' => 'role', 'middleware'=>'permission'], function () {
        Route::get('list', 'UserController@listRole');
        Route::get('add/{id}', 'UserController@addRole');
        Route::post('add/{id}', 'UserController@postAddRole');
    });
});

