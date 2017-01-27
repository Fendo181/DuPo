<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = ['body'];

    //comment と post の関係性をここで定義する。
    public function post(){
        //CommentモデルはNipoモデルに"所属(belongs)している事をここで定義する
        return $this ->belongs('APP\Nipo');
    }
}
