<?php

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

Auth::routes(['verify' => true]);
Route::get('auth/{provider}', 'Auth\SocialiteController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\SocialiteController@handleProviderCallback');

Route::group(['middleware' => ['web', 'verified']], function () {
    Route::get('/', 'IndexController@index');
    Route::get('/result', 'IndexController@search');
    Route::get('/category/{name}', 'IndexController@category');
    Route::get('/product/{id}', 'IndexController@product');
    Route::get('/cart', 'CartController@show');
    Route::get('/cart/add/{id}', 'CartController@add');
    Route::get('/cart/remove/{id}', 'CartController@remove');
    Route::get('/checkout', 'IndexController@checkout');
    Route::post('/order/process', 'IndexController@order');
    Route::get('/profile', 'IndexController@profile');
    Route::get('/contact', function () {
        return view('contact');
    });
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
