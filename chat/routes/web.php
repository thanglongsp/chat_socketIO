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
    return view('write');
});

Route::get('write', 'ChatController@write');

Route::post('send', 'ChatController@send');

Route::get('receive', 'ChatController@receive');