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

    Route::middleware('auth.admin')->group(function(){

        Route::get('/', 'Admin\DashboardController@show')->name('admin_dashboard');

        Route::get('/user', 'Admin\UserController@show')->name('admin_user');
        Route::get('user/create', 'Admin\UserController@create_form')->name('create_user_form');
        Route::post('user/create', 'Admin\UserController@create')->name('create_user');

        Route::get('/product', 'Admin\ProductController@show')->name('admin_product');

        Route::get('/category', 'Admin\CategoryController@show')->name('admin_category');

        Route::get('/order', 'Admin\OrderController@show')->name('admin_order');

        Route::get('/logout', 'Admin\LogoutController@logout')->name('admin_logout');
    });
    Route::middleware('auth.admin.logined')->group(function(){
        Route::get('/login', 'Admin\LoginController@show')->name('admin_login_form');
        Route::post('/login', 'Admin\LoginController@login')->name('admin_login');
    });
});


