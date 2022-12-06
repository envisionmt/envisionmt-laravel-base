<?php

use App\Http\Controllers\Api\V1\Admin\GuestController;

Route::group([
    'prefix' => 'guest',
], function () {
    Route::post('/login', [GuestController::class, 'login']);
});
