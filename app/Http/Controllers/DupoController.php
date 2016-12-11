<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NipoRequest;
use App\Http\Controllers\Controller;
use App\Nipo;


class DupoController extends Controller
{

        public function top(){
            $nipos = Nipo::latest('created_at')->get();

            // 日本形式の時刻に合わせる。
            // $date = $nipos->created_at;
            // $time_japan = date('Y年n月j日', strtotime($date));
            // // withでデータをviewへ渡す。
            return view('dupos.dupo')->with('nipos',$nipos);
                                    //  ->with('time_japan',$time_japan);

        }

        // 引数に$idを受け取る。
        public function show($id){
            // 見つかったらとりあえず、とりあえず使っまえて来る。
            // $nipos = Nipo::find('id');

            // 見つからない場合は例外を投げる。
            $nipo = Nipo::findOrFail($id);
            return view('dupos.show')->with('nipo',$nipo);
        }

        // 単純に記事を投稿するページへ飛ばす。
        public function create(){
           return view('dupos.create');
        }

        public function error(){
           return view('dupos.error');
        }

        public function edit($id){
            //idが無かったら例外処理を行う
            $nipo = Nipo::findOrFail($id);
            return view('dupos.edit')->with('nipo',$nipo);
        }


        //storeメソッド
        public function store(NipoRequest $request){
            $nipo = new Nipo();
            $nipo->title =$request->title;
            $nipo->body  =$request->body;
            $nipo->save();
            return redirect('/dupo')->with('flash_message', '新規記事を作成しました！');
        }

        public function update(NipoRequest $request,$id){
            //記事を取得
            $nipo = Nipo::findOrFail($id);
            $nipo->title =$request->title;
            $nipo->body  =$request->body;
            $nipo->save();
            return redirect('/dupo')->with('flash_message', '記事を更新しました。');
        }
        public function destroy($id){
           //idが無かったら例外処理を行う
           $nipo = Nipo::findOrFail($id);
           $nipo -> delete();
           return redirect('/dupo')->with('flash_message', '記事を消去しました。');
       }





        //debag用
        // public function dd(){
        //
        //     $nipos = Nipo::latest('created_at')->get();
        //     dd($nipos->toArray());
        //     return view('nipos.dd');
        // }


}
