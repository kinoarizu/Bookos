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

Route::get('/admin/login', 'Admin\AdminController@login');
Route::post('/admin/auth', 'Admin\AdminController@auth');
Route::get('/admin/logout', 'Admin\AdminController@logout');
Auth::routes(['verify' => true]);

Route::group(['middleware' => ['web', 'verified']], function () {
    Route::get('/', 'IndexController@index');
    Route::get('/category/{name}', 'IndexController@category');
    Route::get('/product/{id}', 'IndexController@product');
    Route::get('/cart', 'CartController@show');
    Route::get('/cart/add/{id}', 'CartController@add');
    Route::get('/cart/remove/{id}', 'CartController@remove');
    Route::get('/checkout', 'IndexController@checkout');
    Route::get('/contact', function () {
        return view('contact');
    });
});

Route::group(['middleware' => ['checkrole', 'revalidate', 'auth:admin']], function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    });
    Route::get('/admin/products', 'Admin\ProductController@index');
    Route::post('/admin/products', 'Admin\ProductController@index');
    Route::get('/admin/product/add', 'Admin\ProductController@create');
    Route::get('/admin/product/{id}', 'Admin\ProductController@detail');
    Route::post('/admin/product/store', 'Admin\ProductController@store');
    Route::get('/admin/product/edit/{id}', 'Admin\ProductController@edit');
    Route::post('admin/product/update/{id}', 'Admin\ProductController@update');
    Route::get('/admin/brands', 'Admin\BrandController@index');
    Route::post('/admin/brands', 'Admin\BrandController@index');
    Route::get('/admin/brand/add', 'Admin\BrandController@create');
    Route::post('/admin/brand/store', 'Admin\BrandController@store');
    Route::get('/admin/brand/edit/{id}', 'Admin\BrandController@edit');
    Route::post('/admin/brand/update/{id}', 'Admin\BrandController@update');
    Route::get('/admin/categories', 'Admin\CategoryController@index');
    Route::get('/admin/category/add', 'Admin\CategoryController@create');
    Route::post('/admin/category/store', 'Admin\CategoryController@store');
    Route::get('/admin/category/edit/{id}', 'Admin\CategoryController@edit');
    Route::post('/admin/category/update/{id}', 'Admin\CategoryController@update');
    Route::get('/admin/transactions', 'Admin\TransactionController@index');
    Route::get('/admin/transactions/{id}', 'Admin\TransactionController@detail');
});
