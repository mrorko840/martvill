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

Route::group(['prefix' => 'gateway/paystack', 'as' => 'paystack.', 'namespace' => 'Modules\Paystack\Http\Controllers', 'middleware' => ['auth', 'permission', 'locale']], function () {
    Route::post('/store', 'PaystackController@store')->name('store')->middleware('checkForDemoMode');
    Route::get('/edit', 'PaystackController@edit')->name('edit');
});
