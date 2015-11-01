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

Route::get('eat', array('uses'=>'TodoController@index'));
Route::post('eat', array('uses'=>'TodoController@create'));
Route::delete('eat', array('uses'=>'TodoController@destroy'));
Route::get('/', function () {
    return view('welcome');
});
Route::get('/mongodb', function () {
    $user = App\Todo::all();
    print_r($user);
});
