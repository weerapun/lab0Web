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

Route::get('/landing', function (Request $request) {
    return view('landing');
});

Route::get('/','User\UserController@index' );

Route::post('login', 'User\UserController@login');

Route::post('register', 'User\UserController@register');

Route::get('userinfo', 'User\UserController@userinfo');


