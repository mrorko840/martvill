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

Route::group(['prefix' => 'admin', 'namespace' => 'Modules\Tax\Http\Controllers', 'middleware' => ['auth', 'locale', 'permission']], function () {
    Route::get('taxes', 'TaxClassController@index')->name('tax.index');
    Route::post('tax/store', 'TaxClassController@store')->middleware(['checkForDemoMode'])->name('tax.store');
    Route::post('tax/update', 'TaxClassController@update')->middleware(['checkForDemoMode'])->name('tax.update');
    Route::post('tax/delete/{id}', 'TaxClassController@destroy')->middleware(['checkForDemoMode'])->name('tax.delete');
    Route::post('tax-setting/update', 'TaxClassController@setting')->middleware(['checkForDemoMode'])->name('tax_setting.update');

    Route::post('tax-rate/update', 'TaxRateController@update')->middleware(['checkForDemoMode'])->name('tax_rate.update');
});

