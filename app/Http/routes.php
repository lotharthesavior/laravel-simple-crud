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
    return view('home',array(
    	'header' => view('header'),
    	'menu' => view('menu')
    ));
});

Route::get('/home', function () {
    return view('home',array(
    	'header' => view('header'),
    	'menu' => view('menu')
    ));
});

// Auth
Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/messages/{message?}', ['uses' => 'MessageController@index']);

Route::get('/newmessage', ['uses' => 'MessageController@create']);

Route::post('/newmessage', ['uses' => 'MessageController@store']);

Route::get('/editmessage/{id}/{message?}', ['uses' => 'MessageController@edit']);

Route::get('/editmessage/{id}/{message?}', ['uses' => 'MessageController@edit']);

Route::put('/editmessage/{id}', ['uses' => 'MessageController@update']);

Route::delete('/deletemessage/{id}', ['uses' => 'MessageController@destroy']);
