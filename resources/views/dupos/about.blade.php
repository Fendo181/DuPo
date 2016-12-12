@extends('layouts.default')

@section('title')
DuPoとは?
@endsection


@section('blog_title')
<!-- <h1>Welcome EndoBlog!</h1> -->
@endsection


@section('about')
<h2  class="message" style="background:skyblue;">DuPoとは?</h2>
<p>DuPoは遠藤が<u>勢いで作ってしまった日報サービス</u>です。</p>
<p>日報的な事はできますが、それ以上を望むと制作者である遠藤が夜逃げするので、止めて下さい。</p>


@endsection

@section('tab_menus_down')
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/') }}"><i class="fa fa-fw fa-home" aria-hidden="true"></i>Back Top Page</a>
    </li>
    <li class="nav-item">
         <a class="nav-link" href="{{ url('/dupo') }}"><i class="fa fa-fw fa-book" aria-hidden="true"></i>Back DuPo Page</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="{{ url('/dupo/create') }}" class="fs12"><i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i>New DuPo</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="{{ url('/aboutme') }}"><i class="fa fa-fw fa-male" aria-hidden="true"></i>About me</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="https://github.com/Fendo181/DuPo"><i class="fa fa-fw fa-github" aria-hidden="true"></i>GitHub</a>
     </li>
</ul>
@endsection
