<?php

use App\Http\Controllers\Api\V1\App\GuestController;

Route::group([
    'prefix' => 'guest',
    'namespace' => 'Guest'
], function () {
    Route::post('/login', [GuestController::class, 'login']);
});
