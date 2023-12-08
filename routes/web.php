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

Route::post('/dashboard','App\Http\Controllers\LoginController@loginperform');
Route::get('/login','App\Http\Controllers\LoginController@loginform');
Route::get('/','App\Http\Controllers\RegisterController@registerForm')->name('home.register');
Route::post('/register','App\Http\Controllers\RegisterController@registerData')->name('home.registerData');
Route::post('/store-products','App\Http\Controllers\homeController@storeProducts');
Route::post('/dashboard','App\Http\Controllers\homeController@viewProducts');
Route::get('/product/{id}','App\Http\Controllers\homeController@productDetails');
Route::post('/reject-status/{id}','App\Http\Controllers\homeController@rejectStatus');
Route::post('/approve-status/{id}','App\Http\Controllers\homeController@approveStatus');
Route::get('/products','App\Http\Controllers\homeController@viewProducts');