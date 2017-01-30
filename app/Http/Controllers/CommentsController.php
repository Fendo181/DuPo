<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//Modelを名前空間で取得する
use App\Comment;
use App\Nipo;


class CommentsController extends Controller
{
    //storeメソッド

    public function store(Request $request,$nipoId)
    {
        // $nipo ID は単純にshow.blade.phpから送られきたコメント追加用のクエリーを送る為の変数名
        $this->validate($request, [
            'body' => 'required'
        ]);

        if(empty($request->name)){
            $request->name = "名無しのDupoさん";
        }

        //渡ってきたbodyを元にコメントを作って渡す

        //このコメントをpostに紐付いた形で保存する。
        $comment = new Comment(['name'=>$request->name,'body' => $request->body]);
        $nipo = Nipo::findOrFail($nipoId);
        //$nipo->commentsがわからんなぁ...
        // Comment.php(モデルの)commentsメソッドを呼びだいｓている。
        $nipo->comments()->save($comment);

        return redirect()
                ->action('DupoController@show', $nipo->id);
    }



}
