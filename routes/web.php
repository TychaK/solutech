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
