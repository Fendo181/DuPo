<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginUserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    //  ログイン後、ユーザページへ遷移する。
    public function UserPage()
    {
        return view('auth.user');
    }

    public function NewUserPage()
    {
        return view('auth.newuser');
    }

}
