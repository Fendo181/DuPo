@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <h1>DuPoへようこそ!</h1>
                    <p>{{ Auth::user()->name }}さん、いらっしゃい！</p>
                    <p>登録が完了しました。</p>
                </div>
                <li class="nav-item" style="list-style:none;">
                    <a class="nav-link" href="{{ url('/dupo') }}"><i class="fa fa-fw fa-book" aria-hidden="true"></i>Dupo</a>
                    <a class="nav-link" href="{{ url('/user') }}"><i class="fa fa-fw fa-user-o" aria-hidden="true"></i>login page</a>
                </li>
            </div>
        </div>
    </div>
</div>
@endsection
