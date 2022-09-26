<?php

use App\Http\Controllers\Api\V1\Admin\GuestController;

Route::group([
    'prefix' => 'guest',
    'namespace' => 'Guest'
], function () {
    Route::post('/login', [GuestController::class, 'login']);
});
