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

Route::get('/', function () { return view('index'); });
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/product-details', function () { return view('product-details'); });
Route::get('/shop', function () { return view('shop'); });
Route::get('/checkout', function () { return view('checkout'); });
Route::get('/cart', function () { return view('cart'); });
//Route::get('/login', function () { return view('login'); });

Route::group(['middleware' => ['auth']], function (){
    //login thi vao duoc ko can phai la admin

    Route::group(['middleware' => ['ckAdmin']], function (){
        //login va phai la admin
        Route::get('admin', 'Admin\DashboardController@index');
        Route::resource('admin/category', 'Admin\CategoryController');
        Route::resource('admin/users','Admin\UserController');
        Route::resource('admin/product','Admin\ProductController');
        Route::resource('admin/purchase','Admin\PurchaseController');
        Route::resource('admin/export','Admin\ExportController');
    });
});
