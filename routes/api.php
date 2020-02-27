<?php

use Illuminate\Http\Request;
use App\Order;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::group(['middleware' => ['auth:api']], function () {

// orders api routes
Route::get('orders', 'OrderController@index');
Route::get('orders/{id}', 'OrderController@show');
Route::post('orders', 'OrderController@store');
Route::put('orders/{id}', 'OrderController@update');
Route::delete('orders/{id}', 'OrderController@delete');

// products api routes
Route::get('products', 'ProductController@index');
Route::get('products/{id}', 'ProductController@show');
Route::post('products', 'ProductController@store');
Route::put('products/{id}', 'ProductController@update');
Route::delete('products/{id}', 'ProductController@delete');

// suppliers api routes
Route::get('suppliers', 'SupplierController@index');
Route::get('suppliers/{id}', 'SupplierController@show');
Route::post('suppliers', 'SupplierController@store');
Route::put('suppliers/{id}', 'SupplierController@update');
Route::delete('suppliers/{id}', 'SupplierController@delete');

// order details routes...
Route::get('order_details', 'OrderDetailController@index');
Route::get('order_details/{order_id}/{product_id}', 'OrderDetailController@show');
Route::post('order_details', 'OrderDetailController@store');
Route::put('order_details/{order_id}', 'OrderDetailController@update');
Route::delete('order_details/{order_id}', 'OrderDetailController@delete');

// supplier products routes...
Route::get('supplier_products', 'SupplierProductController@index');
Route::get('supplier_products/{supply_id}/{product_id}', 'SupplierProductController@show');
Route::post('supplier_products', 'SupplierProductController@store');
Route::put('supplier_products/{supply_id}', 'SupplierProductController@update');
Route::delete('supplier_products/{supply_id}', 'SupplierProductController@delete');

//});

// account registration routes...

Route::post('register', 'Api\AuthController@register');
Route::post('login', 'Api\AuthController@login');

