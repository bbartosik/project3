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

Route::get('/', 'MainController@getIndex');


Route::get('/lorem', 'Loremipsum@getIndex');

Route::post('/lorem', 'Loremipsum@postIpsum');

Route::get('/randomu', 'Randomuser@getIndex');

Route::post('/randomu', 'Randomuser@postGen');
