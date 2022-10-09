<?php

use App\Http\Controllers\Api\V1\Admin\CategoryController;

Route::group([
    'prefix' => 'categories',
], function () {
    Route::put('/{id}', [CategoryController::class, 'update']);
    Route::post('/', [CategoryController::class, 'create']);
    Route::get('/{id}', [CategoryController::class, 'show']);
    Route::get('/', [CategoryController::class, 'index']);
    Route::delete('/{id}', [CategoryController::class, 'delete']);
    Route::delete('/', [CategoryController::class, 'deleteByIds']);
});
