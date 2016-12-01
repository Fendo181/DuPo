<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

#モデルです
class Nipo extends Model
{
    //dataを挿入してもいいようにする。
    protected $fillable = ['title', 'body'];

}
