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

Route::group(['prefix' => 'gateway/authorizenet', 'namespace' => 'Modules\AuthorizeNet\Http\Controllers', 'as' => 'authorizenet.', 'middleware' => ['auth', 'permission']], function () {
    Route::post('/store', 'AuthorizeNetController@store')->name('store')->middleware('checkForDemoMode');
    Route::get('/edit', 'AuthorizeNetController@edit')->name('edit');
});