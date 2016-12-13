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
            return view('dupos.dupo')->with('nipos',$nipos);

        }

        public function top_ura(){
            return redirect('/dupo')->with('flash_message', 'root権限を手に入れました!');
        }

        public function create(){
           return view('dupos.create');
        }

        public function show($id){
            $nipo = Nipo::findOrFail($id);
            return view('dupos.show')->with('nipo',$nipo);
        }

        public function edit($id){
            $nipo = Nipo::findOrFail($id);
            return view('dupos.edit')->with('nipo',$nipo);
        }


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
           $nipo = Nipo::findOrFail($id);
           $nipo -> delete();
           return redirect('/dupo')->with('flash_message', '記事を消去しました。');
       }
}
