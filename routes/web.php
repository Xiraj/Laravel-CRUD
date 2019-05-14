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

Route::group(['middleware' => ['auth']], function(){
    Route::get('/view', 'FormController@view');
});

Route::get('/form', 'FormController@input');
Route::post('/form/input-process','FormController@inputprocess');
//Route::get('/view', 'FormController@view');
Route::get('/destroy/{id}', 'FormController@destroy');
Route::get('/edit/{id}', 'FormController@edit');
Route::post('/update/{id}', 'FormController@update');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
