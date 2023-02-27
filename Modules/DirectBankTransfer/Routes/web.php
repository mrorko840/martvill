<?php

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

Route::prefix('directbanktransfer')->as('bank.')->namespace('Modules\DirectBankTransfer\Http\Controllers')->group(function() {
    Route::post('/store', 'DirectBankTransferController@store')->name('store')->middleware('checkForDemoMode');
    Route::get('/edit', 'DirectBankTransferController@edit')->name('edit');
});
