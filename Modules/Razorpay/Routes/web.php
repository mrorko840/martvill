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

Route::group(['prefix' => 'razorpay', 'as' => 'razorpay.', 'namespace' => 'Modules\Razorpay\Http\Controllers', 'middleware' => ['auth', 'permission', 'locale']], function () {
    Route::post('/store', 'RazorpayController@store')->name('store')->middleware('checkForDemoMode');
    Route::get('/edit', 'RazorpayController@edit')->name('edit');
});
