<?php

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
Route::group(['namespace' => 'Api'], function () {
    Route::group(['namespace' => 'V1', 'prefix' => 'v1'], function () {
        Route::group(['namespace' => 'Contact', 'prefix' => 'contacts'], function () {
            Route::get('/', 'IndexController');
            Route::get('/{contact}', 'ShowController');
            Route::post('/', 'StoreController');
            Route::patch('/{contact}', 'UpdateController');
            Route::delete('/{contact}', 'DeleteController');
        });

        Route::group(['namespace' => 'User', 'prefix' => 'users'], function () {
            Route::get('/', 'IndexController');
            Route::get('/{user}', 'ShowController');
            Route::post('/', 'StoreController');
        });
    });
});
