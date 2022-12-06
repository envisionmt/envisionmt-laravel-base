<?php

use App\Http\Controllers\Api\V1\Admin\UserController;

Route::group([
    'prefix' => 'users',
], function () {
    Route::get('/', [UserController::class, 'index']);
});
