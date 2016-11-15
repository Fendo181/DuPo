<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //index
    public function index(){
        return view('posts.index');
    }
    
    //aboutメソッドに飛ぶ
    public function about(){
        return view('posts.about');
    }
    
    //aboutmeメソッドに飛ぶ
    public function aboutme(){
        return view('posts.aboutme');
    }
    
}
