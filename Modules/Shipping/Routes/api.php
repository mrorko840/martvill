<?php

use Illuminate\Http\Request;

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

Route::group(['namespace' => 'Modules\Shipping\Http\Controllers\Api', 'middleware' => ['auth:api', 'locale', 'permission-api']], function () {
    // Shipping Zone
    Route::get('shipping/zones', 'ShippingZoneController@index');
    Route::post('shipping/zones', 'ShippingZoneController@store');
    Route::get('shipping/zones/{id}', 'ShippingZoneController@detail');
    Route::post('shipping/zones/{id}', 'ShippingZoneController@update');
    Route::delete('shipping/zones/{id}', 'ShippingZoneController@destroy');

    // Shipping Class
    Route::get('shipping/classes', 'ShippingClassController@index');
    Route::post('shipping/classes', 'ShippingClassController@store');
    Route::get('shipping/classes/{id}', 'ShippingClassController@detail');
    Route::post('shipping/classes/{id}', 'ShippingClassController@update');
    Route::delete('shipping/classes/{id}', 'ShippingClassController@destroy');

    // Shipping Method
    Route::get('shipping/methods', 'ShippingMethodController@index');
    Route::get('shipping/method/{id}', 'ShippingMethodController@detail');

    // Shipping Zone Geolocale
    Route::get('shipping/zone/geolocales', 'ShippingZoneGeolocaleController@index');
    Route::post('shipping/zone/geolocale', 'ShippingZoneGeolocaleController@store');
    Route::get('shipping/zone/geolocale/{id}', 'ShippingZoneGeolocaleController@detail');
    Route::post('shipping/zone/geolocale/{id}', 'ShippingZoneGeolocaleController@update');
    Route::delete('shipping/zone/geolocale/{id}', 'ShippingZoneGeolocaleController@destroy');

    // Shipping Zone Class
    Route::get('shipping/zone/classes', 'ShippingZoneClassController@index');
    Route::post('shipping/zone/class', 'ShippingZoneClassController@store');
    Route::get('shipping/zone/class/{id}', 'ShippingZoneClassController@detail');
    Route::post('shipping/zone/class/{id}', 'ShippingZoneClassController@update');
    Route::delete('shipping/zone/class/{id}', 'ShippingZoneClassController@destroy');

    // Shipping Zone Method
    Route::get('shipping/zone/methods', 'ShippingZoneMethodController@index');
    Route::post('shipping/zone/method', 'ShippingZoneMethodController@store');
    Route::get('shipping/zone/method/{id}', 'ShippingZoneMethodController@detail');
    Route::post('shipping/zone/method/{id}', 'ShippingZoneMethodController@update');
    Route::delete('shipping/zone/method/{id}', 'ShippingZoneMethodController@destroy');
});
