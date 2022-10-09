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

Route::group(['namespace' => 'Api\\V1', 'prefix' => 'v1', 'as' => 'api.v1', 'middleware' => ['api']], function () {
    Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'as' => '.admin'], function () {
        require 'api/v1/admin/guest.php';
        Route::group(['middleware' => ['auth:sanctum', 'role:' . \App\Models\User::ADMIN_ROLE]], function () {
            require 'api/v1/admin/account.php';
            require 'api/v1/admin/user.php';
            require 'api/v1/admin/category.php';
            require 'api/v1/admin/common.php';
        });
    });

    Route::group(['namespace' => 'App', 'prefix' => 'app', 'as' => '.app'], function () {
        require 'api/v1/app/guest.php';
        Route::group(['middleware' => ['auth:sanctum', 'role:' . \App\Models\User::USER_ROLE]], function () {
        });
    });
});
