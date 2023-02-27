<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => 'user', 'namespace' => 'Modules\Refund\Http\Controllers\Api\User', 'middleware' => ['auth:api', 'locale', 'permission-api']], function() {
    // User Refund API
    Route::get('refunds', 'RefundController@index');
    Route::get('refunds/reasons', 'RefundController@getReason');
    Route::post('refunds', 'RefundController@store');
    Route::get('refunds/{id}', 'RefundController@details');
    Route::post('refunds/{id}/messages', 'RefundController@storeMessage');
    Route::get('refunds/{id}/messages', 'RefundController@getMessage');
});
