<?php

use Stellar\Route;

Route::get('/path/{name}/{number}', [\App\TestController::class, 'test'])->name('cleber');
Route::get('/aaa/{name}', [\App\TestController::class, 'test']);
Route::post('/path/{name}/{number}', [\App\TestController::class, 'test'])->name('cleber1');
Route::put('/path/{name}/{number}', [\App\TestController::class, 'test'])->name('cleber2');
Route::patch('/path/{name}/{number}', [\App\TestController::class, 'test'])->name('cleber3');
Route::connect('/path/{name}/{number}', [\App\TestController::class, 'test'])->name('cleber4');
Route::head('/path/{name}/{number}', [\App\TestController::class, 'test'])->name('cleber5');
Route::delete('/path/{name}/{number}', [\App\TestController::class, 'test'])->name('cleber6');
Route::options('/path/{name}/{number}', [\App\TestController::class, 'test'])->name('cleber7');
Route::fallback('/404', [\App\TestController::class, 'test']);
