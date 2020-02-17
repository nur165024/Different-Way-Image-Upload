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
//multiple image intervention route list
Route::get('intervention/multiple/image/create','InterventionMultipleImageController@create')->name('intervention_multiple_image.create');
Route::post('intervention/multiple/image/store','InterventionMultipleImageController@store')->name('intervention_multiple_image.store');
//multiple folder image upload
Route::get('multiple/folder/image/create','MultipleFolderImageController@create')->name('multiple.create');
Route::post('multiple/folder/image/store','MultipleFolderImageController@store')->name('multiple.store');
