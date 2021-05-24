<?php
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, Authorization, Accept,charset,boundary,Content-Length');
header('Access-Control-Allow-Origin: *');
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

Route::view('/register','register');
Route::post('/register', 'UserController@register');
Route::post('/login','UserController@user_login');
Route::get('/chat_user','ChatController@chat');
Route::get('/msg','ChatController@open_chat_messages');
Route::post('/msg_save','ChatController@save_chat');
Route::get('/latest_chat_user','ChatController@latest_chat_user');
Route::get('/msg_send','ChatController@chat_user_name');
Route::get('/search','ChatController@search');

// Route::get('ajaxImageUpload', 'ChatController@ajaxImageUpload');
// Route::post('ajaxImageUpload', 'ChatController@ajaxImageUploadPost')->name('ajaxImageUpload');