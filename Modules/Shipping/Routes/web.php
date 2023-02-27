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

Route::group(['prefix' => 'admin', 'namespace' => 'Modules\Shipping\Http\Controllers', 'middleware' => ['auth', 'locale', 'permission']], function () {
    // Shipping
    Route::get('shippings', 'ShippingController@index')->name('shipping.index');
    Route::post('shipping-zone/store', 'ShippingController@store')->middleware(['checkForDemoMode'])->name('shippingZone.store');
    Route::post('shipping-class/store', 'ShippingController@storeClass')->middleware(['checkForDemoMode'])->name('shipping.storeClass');
    Route::post('shipping-setting/store', 'ShippingController@storeSetting')->middleware(['checkForDemoMode'])->name('shipping-setting.store');
});
