<?php

use App\Http\Controllers\Api\V1\Admin\AccountController;

Route::group([
    'prefix' => 'account',
], function () {
    Route::get('/profile', [AccountController::class, 'profile']);
    Route::post('/logout', [AccountController::class, 'logout']);
});
