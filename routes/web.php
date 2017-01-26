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

// Route::get('/', function () {
//     return view('welcome');
// });

//phponfo
Route::get('/php',function(){
    return phpinfo();
});


//## DuPoのTOPルーティング
Route::get('/','IndexController@index');

// Guestページ
Route::get('/guest_dupo','GuestController@top');
Route::get('/guest_dupo/{id}','GuestController@show');
Route::get('/guest_about','GuestController@about');
Route::get('/guest_aboutme','GuestController@aboutme');

//ログイン成功した人だけアクセスできる。
Route::group(['middleware' => 'auth'], function () {

    // DuPo裏ページ
    Route::get('/dupo_ura','DupoController@top_ura');

    //前の月に戻れるようなルーティング
    Route::get('/prevLink','DupoController@prevLink');

    //静的なページ
    Route::get('/about','IndexController@about');
    Route::get('/aboutme','IndexController@aboutme');
    Route::get('/dupo/error','IndexController@error');

    // DuPoCRUD操作
    Route::get('/dupo','DupoController@top');
    Route::get('/dupo/create','DupoController@create');
    Route::post('/dupo/store','DupoController@store');
    Route::get('/dupo/{id}','DupoController@show');
    Route::patch('/dupo/{id}','DupoController@update');
    Route::get('/dupo/{id}/edit','DupoController@edit');
    Route::delete('/dupo/{id}','DupoController@destroy');
});


Auth::routes();
//ログイン後のユーザページ
Route::get('/dupo_auth', 'LoginUserController@UserPage');
// ログイン後のプロフィールぺージ
Route::get('/user', 'LoginUserController@UserPage');
