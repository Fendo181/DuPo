<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index()
    {
        return view('dupos.index');
    }

    // about ページ
    public function about()
    {
        return view('dupos.about');
    }

    // about meページ
    public function aboutme()
    {
        return view('dupos.aboutme');
    }


    // errorページ
    public function error(){
       return view('dupos.error');
    }

}
