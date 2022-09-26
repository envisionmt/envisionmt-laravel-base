<?php

use App\Http\Controllers\Api\V1\Guest\AuthController;

Route::group([
    'prefix' => 'guest',
    'namespace' => 'Guest'
], function () {
    Route::post('/login', [AuthController::class, 'login']);
});

