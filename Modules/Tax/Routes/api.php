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

Route::group(['namespace' => 'Modules\Tax\Http\Controllers\Api', 'middleware' => ['auth:api', 'locale', 'permission']], function() {
    // Tax Class
    Route::get('taxes/classes','TaxClassController@index');
    Route::post('taxes/classes','TaxClassController@store');
    Route::delete('taxes/classes/{slug}','TaxClassController@destroy');

    // Tax Rate
    Route::get('taxes', 'TaxRateController@index');
    Route::post('taxes', 'TaxRateController@store');
    Route::get('taxes/{id}', 'TaxRateController@detail');
    Route::post('taxes/{id}', 'TaxRateController@update');
    Route::delete('taxes/{id}', 'TaxRateController@destroy');
});
