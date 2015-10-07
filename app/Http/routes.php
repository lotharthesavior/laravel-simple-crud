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
    return view('home',[
        'header' => view('header'),
        'breadcrumb' => view('breadcrumb',['breadcrumb'=>Breadcrumbs::render('home')]),
        'menu' => view('menu'),
        'footer' => view('footer')
    ]);
});

Route::get('/home', ['as'=>'home', 'uses'=>function () {
    return view('home',[
        'header' => view('header'),
        'breadcrumb' => view('breadcrumb',['breadcrumb'=>Breadcrumbs::render('home')]),
        'menu' => view('menu'),
        'footer' => view('footer')
    ]);
}]);

// Authentication routes...
Route::get('auth/login', ['as'=>'login', 'uses'=>'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', ['as'=>'register', 'uses'=>'Auth\AuthController@getRegister']);
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Messages Crud routes...
Route::get('/messages/{message?}', ['as'=>'messages', 'uses' => 'MessageController@index']);
Route::get('/newmessage', ['as'=>'newmessage', 'uses' => 'MessageController@create']);
Route::post('/newmessage', ['as'=>'newmessagepost', 'uses' => 'MessageController@store']);
Route::get('/editmessage/{id}/{message?}', ['as'=>'editmessage', 'uses' => 'MessageController@edit']);
Route::put('/editmessage/{id}', ['uses' => 'MessageController@update']);
Route::delete('/deletemessage/{id}', ['uses' => 'MessageController@destroy']);
