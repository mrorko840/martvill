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


Route::group(['namespace' => 'Modules\Coupon\Http\Controllers\Api', 'middleware' => ['auth:api', 'locale', 'permission']], function() {
    // Coupon
    Route::get('coupon/list', 'CouponController@index');
    Route::post('coupon/store', 'CouponController@store');
    Route::post('coupon/update/{id}', 'CouponController@update');
    Route::get('coupon/view/{id}', 'CouponController@detail');
    Route::delete('coupon/delete/{id}', 'CouponController@destroy');
});
