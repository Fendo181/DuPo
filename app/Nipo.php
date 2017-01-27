<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

#モデルです
class Nipo extends Model
{
    //dataを挿入してもいいようにする。
    protected $fillable = ['title', 'body'];

    //comment と post の関係性をここで定義する。
    public function post(){
        //Nipoモデルからcommentsモデルのデータを引っ張ってくる(hasmany)
        return $this ->hasMany('APP\comment');
    }

}
