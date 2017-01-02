@extends('layouts.default')

@section('title')
Dupo
@endsection


@section('blog_title')
<h1>{{ $year_month }}のDuPo一覧表</h1>
@endsection

<!-- 記事を書く -->

@section('tab_menus_up')
<ul class="nav nav-tabs">
       <li class="nav-item">
           <a class="nav-link" href="{{ url('/guest_about') }}"><i class="fa fa-fw fa-question" aria-hidden="true"></i>DuPoとは</a>
       </li>
       <li class="nav-item">
           <a class="nav-link" href="{{ url('/guest_aboutme') }}"><i class="fa fa-fw fa-male" aria-hidden="true"></i>About me</a>
       </li>
       <li class="nav-item">
           <a class="nav-link" href="{{ url('/') }}"><i class="fa fa-fw fa-home" aria-hidden="true"></i>Back Top Page</a>
       </li>
       <li class="nav-item">
           <a class="nav-link" href="https://github.com/Fendo181/DuPo"><i class="fa fa-fw fa-github" aria-hidden="true"></i>GitHub</a>
       </li>
</ul>
@endsection

@section('content')
<!-- @foreach ($nipos as $nipo)
<li><a href="">{{ $nipo->title }}</a></li>
@endforeach -->

{{-- ここで配列形式の$nipoをnipoで要素を抜き出す --}}
@forelse ($nipos as $nipo)
{{-- タイトルだけ表示する。 --}}
<div class="col-sm-4  col-md-4 col-lg-3">
    <div class="card">
        <div class="card-block">
            <li  style="list-style:none;">
                <div class="card-title">
                    <a href="{{ action('GuestController@show', $nipo->id) }}">『{{ $nipo->title }}』</a>
                </div>
                <!-- <div class="card-text">
                    {{ $nipo->body }}
                </div> -->
                   {{ csrf_field() }}
                   <p><i>投稿日:{{ $nipo->created_at }}</i><p>
                   <a href="{{ url('/dupo/error') }}" class="fs12"><i class="fa fa-fw fa-reply" aria-hidden="true"></i></a>
                   <a href="{{ url('/dupo/error') }}" class="fs12"><i class="fa fa-fw fa-heart-o" aria-hidden="true"></i></i></a>            </li>
        </div>
    </div>
</div>

@empty
{{-- 何もこなかった場合の処理 --}}
<li>No dupo! Sorry</li>
@endforelse

@endsection

@section('back_months')
<div class="btn-group" >
    <a class="btn btn-link" href="{{ url('/dupo') }}" role="button">NOW</a>
    <a class="btn btn-link" href="{{ url('/prevLink') }}"  role="button">PREV<i class="fa fa-fw fa-caret-right" aria-hidden="true"></i></a>
</div>
@endsection
