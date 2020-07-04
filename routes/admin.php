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


Route::get('/admin', function () {
    return  "hi this is  defolt page";
});
Route::get('scand','Admin\ScandController@show');

Route::resource('news','NewsController');
Route::get('offer','NewsController@getoffer');

Route::get('create','OffersController@create');
Route::post('store','OffersController@store') ->name('insert');