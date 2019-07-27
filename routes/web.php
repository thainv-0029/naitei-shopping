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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/admin')->group(function(){
    Route::get('/', 'Admin\DashboardController@show')->name('admin_dashboard');
    Route::get('/user', 'Admin\UserController@show')->name('admin_user');
    Route::get('/product', 'Admin\ProductController@show')->name('admin_product');
    Route::get('/category', 'Admin\CategoryController@show')->name('admin_category');
    Route::get('/order', 'Admin\OrderController@show')->name('admin_order');
    Route::get('/login', 'Admin\LoginController@login');
    Route::get('/logout', 'Admin\LoginController@logout')->name('admin_logout');
});



