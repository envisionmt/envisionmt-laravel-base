<?php
use App\Http\Controllers\Api\V1\Admin\CommonController;

Route::group([
    'prefix' => 'commons',
], function () {
    Route::post('/upload-image', [CommonController::class, 'uploadImage']);
});
