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

Route::get('/', function () {
    return view('welcome');
});

Route::get('tasks', 'TaskController@index');

Route::get('task/add/{content}', 'TaskController@add');
Route::get('task/update/{id}/{new_content}', 'TaskController@update');
Route::get('task/delete/{id}', 'TaskController@delete');





