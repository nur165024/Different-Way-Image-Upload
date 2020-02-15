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

Route::get('/', function () {
    return view('welcome');
});
// single image route list
Route::get('single/image/create','SingleImageController@single_image_create')->name('single_image.create');
Route::post('single/image/store','SingleImageController@single_image_store')->name('single_image.store');

//image intervention route list
Route::get('intervention/single/image/create','InterventionSingleImageController@intervention_single_image_create')->name('intervention_single_image.create');
Route::post('intervention/single/image/store','InterventionSingleImageController@intervention_single_image_store')->name('intervention_single_image.store');
