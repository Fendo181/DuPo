@extends('layouts.default')

@section('title')
About me
@endsection


@section('blog_title')
<!-- <h1>Welcome EndoBlog!</h1> -->
@endsection


@section('aboutme')
<div class="container">
<h2  class="message" style="background:skyblue;">製作者:えんどぅー</h2>
<p>年齢:23歳<p>
<p>しいたけが食べれないです。</p>
</div>
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
         <a class="nav-link" href="{{ url('/about') }}"><i class="fa fa-fw fa-question" aria-hidden="true"></i>DuPoとは</a>
     </li>
     <li class="nav-item">
         <a class="nav-link" href="https://github.com/Fendo181/DuPo"><i class="fa fa-fw fa-github" aria-hidden="true"></i>GitHub</a>
     </li>
</ul>
@endsection
