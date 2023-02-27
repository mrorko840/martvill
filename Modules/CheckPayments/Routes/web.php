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

Route::prefix('checkpayments')->as('checkPayment.')->namespace('Modules\CheckPayments\Http\Controllers')->group(function() {
    Route::post('/store', 'CheckPaymentsController@store')->name('store')->middleware('checkForDemoMode');
    Route::get('/edit', 'CheckPaymentsController@edit')->name('edit');
});
