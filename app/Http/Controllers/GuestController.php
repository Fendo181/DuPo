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
        $month = date('m');
        $year_month = date("Y年m月");
        // $nipos = Nipo::latest('created_at')->get();
        $nipos = Nipo::latest()->whereMonth('created_at', '=', $month)->get();
        return view('guest.dupo')->with('nipos',$nipos)
                                 ->with('year_month',$year_month);
    }

    public function prevLink()
    {
        $month = date('m', strtotime(date('Y-m-1').' -1 month'));
        $year = date('Y', strtotime(date('Y-m-1').' -1 month'));
        $year_month = date($year."年".$month."月");
        $nipos = Nipo::latest()->whereMonth('created_at', '=', $month)->get();
        return view('guest.dupo')->with('nipos',$nipos)
                                 ->with('year_month',$year_month);
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
