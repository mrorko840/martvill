<?php

use Modules\NGenius\Http\Controllers\NGeniusController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('gateway/ngenius')->namespace('Modules\NGenius\Http\Controllers')->middleware(['auth', 'permission', 'locale'])->name('ngenius.')->group(function () {
    Route::post('/store', [NGeniusController::class, 'store'])->name('store')->middleware('checkForDemoMode');
    Route::get('/edit', [NGeniusController::class, 'viewAddon'])->name('edit');
});
