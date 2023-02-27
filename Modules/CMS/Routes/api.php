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

Route::group(['namespace' => 'Modules\CMS\Http\Controllers\Api', 'middleware' => ['locale']], function() {
    // Slider
    Route::get('/sliders', 'SliderController@index');
});
