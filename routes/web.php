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
Route::prefix('/admin')->group(function(){
    Route::get('/', 'Admin\DashboardController@index')->name('admin_dashboard_index');
    Route::get('/user', 'Admin\UserController@index')->name('admin_user_index');
    Route::get('/product', 'Admin\ProductController@index')->name('admin_product_index');
    Route::get('/category', 'Admin\CategoryController@index')->name('admin_category_index');
    Route::get('/order', 'Admin\OrderController@index')->name('admin_order_index');
    Route::get('/login', 'Admin\LoginController@index')->name('admin_login_index');
    Route::get('/logout', 'Admin\LoginController@logout')->name('admin_logout');
});
Route::get('/', 'HomeController@index')->name('home');
Route::get('/product/{id?}', 'ProductController@show')->name('product_detail');
