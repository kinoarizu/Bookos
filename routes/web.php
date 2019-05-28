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
    Route::get('/cart/checkout/{id}', 'CartController@addToCheckout');
    Route::get('/cart/remove/{id}', 'CartController@remove');
    Route::post('/discount/check', 'CartController@checkDiscount');
    Route::get('/checkout', 'IndexController@checkout');
    Route::post('/order/process', 'IndexController@order');
    Route::get('/profile', 'IndexController@profile');
    Route::post('/payment/{id}', 'UserController@payment');
    Route::get('/wishlist', 'WishlistController@show');
    Route::get('/wishlist/add/{id}', 'WishlistController@add');
    Route::get('/wishlist/destroy/{id}', 'WishlistController@destroy');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
