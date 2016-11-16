<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'uses'          => 'TaskController@index',    
]);

Route::post('task/store', [
    'before'        => 'csrf',
    'uses'          => 'TaskController@store'
]);

Route::post('task/delete/{id}', [
    'before'        => 'csrf',
    'uses'          => 'TaskController@destroy'
]);
