<?php

use App\Http\Controllers\Api\V1\App\GuestController;

Route::group([
    'prefix' => 'guest',
], function () {
    Route::post('/login', [GuestController::class, 'login']);
});
