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

Route::group(['prefix' => 'gateway/instamojo', 'as' => 'instamojo.', 'namespace' => 'Modules\Instamojo\Http\Controllers', 'middleware' => ['auth', 'permission', 'locale']], function () {
    Route::post('/store', 'InstamojoController@store')->name('store')->middleware('checkForDemoMode');
    Route::get('/edit', 'InstamojoController@edit')->name('edit');
});
