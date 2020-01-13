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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/inscriptions/create', 'Admin\InscriptionController@show_create_form')->name('call_inscription_form');

Route::group(['prefix'=>'ajax'], function(){

    // Inscriptions
    Route::post('add_inscription', 'InscriptionController@create');

});
