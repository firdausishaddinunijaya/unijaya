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

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'App\Http\Controllers\Api\Auth\AuthController@login');
    Route::post('signup', 'App\Http\Controllers\Api\Auth\AuthController@signup');
    Route::group(['middleware' => 'auth:api'], function () { 
        Route::get('logout', 'App\Http\Controllers\Api\Auth\AuthController@logout');
        Route::get('user', 'App\Http\Controllers\Api\Auth\AuthController@user');
    });
});

Route::group(['middleware' => 'auth:api'], function () {
    Route::resources([
        'users' => 'App\Http\Controllers\Api\UserController'
    ]);

    Route::group(['prefix' => 'users'], function () {
        Route::post('import-update-create', 'App\Http\Controllers\Api\UserController@importUpdateOrCreate')->name('import.update.create');
        Route::post('import-delete', 'App\Http\Controllers\Api\UserController@importDelete')->name('import.delete');
    });
});
