<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Nipo;

class GuestController extends Controller
{
    //

    public function show($id){
        // 見つかったらとりあえず、とりあえず使っまえて来る。
        // $nipos = Nipo::find('id');

        // 見つからない場合は例外を投げる。
        $nipo = Nipo::findOrFail($id);
        return view('guest.show')->with('nipo',$nipo);
    }

    public function top(){
        $nipos = Nipo::latest('created_at')->get();

        // 日本形式の時刻に合わせる。
        // $date = $nipos->created_at;
        // $time_japan = date('Y年n月j日', strtotime($date));
        // // withでデータをviewへ渡す。
        return view('guest.dupo')->with('nipos',$nipos);
                                //  ->with('time_japan',$time_japan);
    }


}