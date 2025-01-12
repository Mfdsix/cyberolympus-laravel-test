<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/users/{type?}', 'UserController@index')->name('users');
    Route::get('/products', 'ProductController@index')->name('products');
    Route::get('/orders', 'OrderController@index')->name('orders');
    Route::get('/reports/{type?}', 'ReportController@index')->name('reports');
});
