<?php

Auth::routes();
Route::get('/','HomeController@index');
Route::get('home','HomeController@index');
Route::get('cart/add/{id}','CartController@store');
Route::get('cart','CartController@index');
Route::get('cart/destroy/{id}','CartController@destroy');
Route::get('product','HomeController@ProductType');
Route::get('product_detail/{id}','HomeController@ProductDetail');
Route::get('news','HomeController@getNews');


Route::group(['middleware' => ['auth']], function () {
    //login thi vao duoc ko can phai la admin


    Route::group(['middleware' => ['ckAdmin']], function () {
        //login va phai la admin
        Route::get('admin', 'Admin\DashboardController@index');
        Route::resource('admin/category', 'Admin\CategoryController');
        Route::resource('admin/users', 'Admin\UserController');
        Route::resource('admin/product', 'Admin\ProductController');
        Route::resource('admin/purchase', 'Admin\PurchaseController');
        Route::resource('admin/export', 'Admin\ExportController');
       
    });
   
    Route::get('admin/logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
});



