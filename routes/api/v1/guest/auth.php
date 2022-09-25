<?php
Route::group([
    'prefix' => 'guest',
    'namespace' => 'Guest'
], function () {
    Route::post('/login', 'AuthController@login')->name('auth.login');
});

