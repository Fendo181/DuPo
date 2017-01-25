<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NipoRequest;
use App\Http\Controllers\Controller;
use App\Nipo;


class DupoController extends Controller
{

        // 裏ページ表示メソッド
        public function top_ura()
        {
            return redirect('/dupo')->with('flash_message', 'root権限を手に入れました!');
        }

        
        public function top()
        {
            $month = date('m');
            $year_month = date("Y年m月");
            // $nipos = Nipo::latest('created_at')->get();
            $nipos = Nipo::latest()->whereMonth('created_at', '=', $month)->get();
            return view('dupos.dupo')->with('nipos',$nipos)
                                     ->with('year_month',$year_month);
        }

        public function prevLink()
        {
            $month = date('m', strtotime(date('Y-m-1').' -1 month'));
            $year = date('Y', strtotime(date('Y-m-1').' -1 month'));
            $year_month = date($year."年".$month."月");
            $nipos = Nipo::latest()->whereMonth('created_at', '=', $month)->get();
            return view('dupos.dupo')->with('nipos',$nipos)
                                     ->with('year_month',$year_month);
        }

        public function create()
        {
            return view('dupos.create');
        }

        public function show($id)
        {
            $nipo = Nipo::findOrFail($id);
            return view('dupos.show')->with('nipo',$nipo);
        }

        public function edit($id)
        {
            $nipo = Nipo::findOrFail($id);
            return view('dupos.edit')->with('nipo',$nipo);
        }


        public function store(NipoRequest $request)
        {
            $nipo = new Nipo();
            $nipo->title =$request->title;
            $nipo->body  =$request->body;
            $nipo->save();
            return redirect('/dupo')->with('flash_message', '新規記事を作成しました！');
        }

        public function update(NipoRequest $request,$id)
        {
            //記事を取得
            $nipo = Nipo::findOrFail($id);
            $nipo->title =$request->title;
            $nipo->body  =$request->body;
            $nipo->save();
            return redirect('/dupo')->with('flash_message', '記事を更新しました。');
        }

        public function destroy($id)
        {
            $nipo = Nipo::findOrFail($id);
            $nipo -> delete();
            return redirect('/dupo')->with('flash_message', '記事を消去しました。');
       }
}
