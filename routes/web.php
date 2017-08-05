<?php

Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');
Route::get('cart', 'CartController@index');

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
});

Route::get('index', [
    "as" => "home",
    "uses" => "PageController@getIndex"
]);

Route::get('product_type', [
    "as" => "producttype",
    "uses" => "PageController@getProductType"
]);

Route::get('product_detail/{id}', [
    "as" => "productdetail",gvb
    "uses" => "PageController@getProductDetail"
]);
Route::get('cart', [
    "as" => "cart",
    "uses" => "CartController@index"
]);

Route::get('cart/add/{id}', 'CartController@store');
Route::get('cart/destroy', 'CartController@destroy');
