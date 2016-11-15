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

//DuPoのTOPルーティング

//URL(localhost/)画面にアクセスしたら、にgetでPostsContollerのindexメソッドを呼び出す
Route::get('/','PostsController@index');
//URL(localhost/about)にアクセスしたら,getでPostcontorollerにaboutメソッドを呼び出す。
Route::get('/about','PostsController@about');
////URL(localhost/about)にアクセスしたら,getでPostcontorollerにaboutmeメソッドを呼び出す。
Route::get('/aboutme','PostsController@aboutme');

//DuPoのCRUDルーティング

//URL(localhost/posts/createにアクセスしたら、getでPostsContollerのicreateメソッドを呼び出す)
Route::get('/posts/create','PostsController@create');
//postsのidを呼び出す際になんとしてでもshowに飛ぶ
Route::get('/posts/{id}','PostsController@show');
//postsのidを呼び出す際になんとしてでもeditに飛ぶ
Route::get('/posts/{id}/edit','PostsController@edit');
//update画面の編集
Route::patch('/posts/{id}','PostsController@update');
//deleteメソッド
Route::delete('/posts/{id}','PostsController@destroy');
//URL(localhost/posts/にアクセスしたら、postsでPostsContollerのstoreメソッドを呼び出す)
Route::post('/posts','PostsController@store');
