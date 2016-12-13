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
// URL(localhost/about)にアクセスしたら,getでIndexContorollerにaboutメソッドを呼び出す。
Route::get('/about','IndexController@about');
// URL(localhost/about)にアクセスしたら,getでIndexContorollerにaboutmeメソッドを呼び出す。
Route::get('/aboutme','IndexController@aboutme');



// URL(localhost/dd)画面にアクセスしたら、にgetでdupoContollerのindexメソッドを呼び出す
Route::get('/dd','DupoController@dd');
// URL(localhost/dupoにアクセスしたら、getでdupoContollerのdupoメソッドを呼び出す)
Route::get('/dupo','DupoController@top');
// URL(localhost/dupo/errorにアクセスしたら、getでdupoContollerのerrorメソッドを呼び出す)
Route::get('/dupo/error','DupoController@error');

// ##DuPoのCRUDルーティング
// URL(localhost/dupo/createにアクセスしたら、getでdupoContollerのcreateメソッドを呼び出す)
Route::get('/dupo/create','DupoController@create');
//dupoのidを呼び出す際になんとしてでもshowメソッドに飛ぶ
Route::get('/dupo/{id}','DupoController@show');

// postで送られたきたデータをDBに挿入する。
// URL(localhost/dupo/にアクセスしたら、dupoでdupoContollerのstoreメソッドを呼び出す)
Route::post('/dupo/store','DupoController@store');

//update画面の編集
Route::patch('/dupo/{id}','DupoController@update');

//Edit画面の編集
Route::get('/dupo/{id}/edit','DupoController@edit');

//deleteメソッド
Route::delete('/dupo/{id}','DupoController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index');
