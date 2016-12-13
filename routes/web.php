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

//phponfo
Route::get('/php',function(){
    return phpinfo();
});



//## DuPoのTOPルーティング

// URL(localhost/)画面にアクセスしたら、にgetでIndexContollerのindexメソッドを呼び出す
Route::get('/','IndexController@index');
Route::get('/select_user','IndexController@selectUser');
Route::get('/about','IndexController@about');
Route::get('/aboutme','IndexController@aboutme');

// ログインぺージ
Route::get('/dupo/user', 'IndexController@userPage');

// 静的なページ
Route::get('/dupo','DupoController@top');
Route::get('/dupo/error','DupoController@error');

// ##DuPoのCRUDルーティング(1)
Route::get('/dupo/create','DupoController@create');
Route::post('/dupo/store','DupoController@store');

// Guestページ
Route::get('/guest_dupo','GuestController@top');
Route::get('/dupo/{id}','GuestController@show');


// ##DuPoのCRUDルーティング(2)
Route::get('/dupo/{id}','DupoController@show');
Route::patch('/dupo/{id}','DupoController@update');
Route::get('/dupo/{id}/edit','DupoController@edit');
Route::delete('/dupo/{id}','DupoController@destroy');


Auth::routes();
Route::get('/dupo_auth', 'HomeController@index');
