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

Route::group(['namespace' => 'Modules\GeoLocale\Http\Controllers\Api\User', 'middleware' => ['locale']], function() {

    // Country
    Route::get('/countries','CountryController@index');
    Route::get('/countries/{ciso}','CountryController@show');
    Route::post('/country/store', 'CountryController@store');
    Route::post('/country/update/{id}', 'CountryController@update');
    Route::delete('/country/delete/{id}', 'CountryController@destroy');

    // State
    Route::get('/states','StateController@index');
    Route::get('/countries/{ciso}/states/{siso}','StateController@show');
    Route::get('/countries/{ciso}/states','StateController@getCountryStates');
    Route::post('/state/store', 'StateController@store');
    Route::post('/state/update/{id}', 'StateController@update');
    Route::delete('/state/delete/{id}', 'StateController@destroy');

    // City
    Route::get('/countries/{ciso}/cities','CityController@getCountryCities');
    Route::get('/countries/{ciso}/states/{siso}/cities','CityController@getStateCities');
    Route::post('/city/store', 'CityController@store');
    Route::post('/city/update/{id}', 'CityController@update');
    Route::delete('/city/delete/{id}', 'CityController@destroy');

});
