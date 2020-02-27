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
    return view('home');
});

Route::group(['middleware' => ['web']], function () {
    Route::get('login', function () {
        return view('login');
    });
    Route::get('register', function () {
        return view('register');
    });
    Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login');
});

Route::get('/dashboard/orders', function () {
    return view('admin.dashboard');
});
Route::get('dashboard/orders/create', function () {
    return view('admin.create-orders');
});
Route::get('dashboard/orders/update', function () {
    return view('admin.update-orders');
});
Route::get('dashboard/orders/remove', function () {
    return view('admin.remove-orders');
});

Route::get('/dashboard/products', function () {
    return view('admin.products');
});
Route::get('dashboard/products/create', function () {
    return view('admin.create-products');
});
Route::get('dashboard/products/update', function () {
    return view('admin.update-products');
});
Route::get('dashboard/products/remove', function () {
    return view('admin.remove-products');
});

Route::get('/dashboard/suppliers', function () {
    return view('admin.suppliers');
});
Route::get('dashboard/suppliers/create', function () {
    return view('admin.create-suppliers');
});
Route::get('dashboard/suppliers/update', function () {
    return view('admin.update-suppliers');
});
Route::get('dashboard/suppliers/remove', function () {
    return view('admin.remove-suppliers');
});


Route::get('/dashboard/order_details', function () {
    return view('admin.order-details');
});
Route::get('dashboard/order_details/create', function () {
    return view('admin.create-order-details');
});
Route::get('dashboard/order_details/update', function () {
    return view('admin.update-order-details');
});
Route::get('dashboard/order_details/remove', function () {
    return view('admin.remove-order-details');
});


Route::get('/dashboard/supplier_products', function () {
    return view('admin.supplier-products');
});
Route::get('dashboard/supplier_products/create', function () {
    return view('admin.create-supplier-products');
});
Route::get('dashboard/supplier_products/update', function () {
    return view('admin.update-supplier-products');
});
Route::get('dashboard/supplier_products/remove', function () {
    return view('admin.remove-supplier-products');
});
