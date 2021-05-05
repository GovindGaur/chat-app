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

Route::get('/login', function () {
    return view('login');
});
Route::get('/logout', function () {
    Session::forget('user');
    return view('/login');
});
Route::post('/login','UserController@user_login');
Route::get('/chat','chatController@chat');
Route::get('/open_chat_messages','chatController@open_chat_messages');
Route::post('/save_chat','chatController@save_chat');