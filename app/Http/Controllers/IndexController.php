<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{

    public function index(){
        return view('dupos.index');
    }

    // about ページ
    public function about(){
        return view('dupos.about');
    }

    // about meページ
    public function aboutme(){
        return view('dupos.aboutme');
    }

    // select userページ
    public function selectUser(){
        return view('dupos.select_user');
    }

    // user page
    public function userPage()
    {
        return view('home');
    }

}
