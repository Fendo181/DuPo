<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Nipo;

class GuestController extends Controller
{
    //

    public function show($id)
    {
        $nipo = Nipo::findOrFail($id);
        return view('guest.show')->with('nipo',$nipo);
    }

    public function top()
    {
        $nipos = Nipo::latest('created_at')->get();
        // 日本形式の時刻に合わせる。
        // $date = $nipos->created_at;
        // $time_japan = date('Y年n月j日', strtotime($date));
        // // withでデータをviewへ渡す。
        return view('guest.dupo')->with('nipos',$nipos);
                                //  ->with('time_japan',$time_japan);
    }

    public function about()
    {
        return view('guest.about');
    }

    // about meページ
    public function aboutme()
    {
        return view('guest.aboutme');
    }


}
