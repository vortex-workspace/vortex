<?php

use Stellar\Core\Routes\Route;

Route::post('jose', ['wddwd', 'dewdwed'])->name('jose');

Route::groupMiddleware('swsw', function () {
    Route::groupPrefix('aaa', function () {

        Route::get('test', function () {
            dd('aaaaa');
        });
    });
});

Route::get('jose', ['wddwd', 'dewdwed'])->queryParameters([
    'name' => 'jose'
]);
