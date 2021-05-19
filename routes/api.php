<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/beverages', 'App\Http\Controllers\BeverageController@index')->name('get-beverages');
Route::get('/beverages/{id}', 'App\Http\Controllers\BeverageController@show')->name('get-single-beverage');

Route::get('/user/{user}/drink/{beverage}', 'App\Http\Controllers\UserController@drink')->name('drink-beverages');
Route::get('/user/{user}/consumed', 'App\Http\Controllers\UserController@consumedBeverages')->name('consumed-beverages');
Route::get('/user/{user}/reset', 'App\Http\Controllers\UserController@reset')->name('reset-consumed-beverages');
