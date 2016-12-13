@extends('layouts.default')

@section('title')
Dupo
@endsection


@section('blog_title')
<h1>12月のDuPo一覧表</h1>
@endsection

<!-- 記事を書く -->

@section('tab_menus_up')
<ul class="nav nav-tabs">
       <li class="nav-item">
           <a class="nav-link" href="{{ url('/dupo/create') }}" class="fs12"><i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i>New DuPo</a>
       </li>
       <li class="nav-item">
           <a class="nav-link" href="{{ url('/dupo/user') }}"><i class="fa fa-fw fa-user-o" aria-hidden="true"></i>login page</a>
       </li>
       <li class="nav-item">
           <a class="nav-link" href="{{ url('/about') }}"><i class="fa fa-fw fa-question" aria-hidden="true"></i>DuPoとは</a>
       </li>
       <li class="nav-item">
           <a class="nav-link" href="{{ url('/aboutme') }}"><i class="fa fa-fw fa-male" aria-hidden="true"></i>About me</a>
       </li>
       <li class="nav-item">
           <a class="nav-link" href="{{ url('/') }}"><i class="fa fa-fw fa-home" aria-hidden="true"></i>Back Top Page</a>
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
                    <a href="{{ action('DupoController@show', $nipo->id) }}">『{{ $nipo->title }}』</a>
                </div>
                <!-- <div class="card-text">
                    {{ $nipo->body }}
                </div> -->
                <form action="{{ action('DupoController@destroy', $nipo->id) }}" id="form_{{ $nipo->id }}" method="post" style="display:inline">
                   {{ csrf_field() }}
                   {{ method_field('delete') }}
                   <p><i>投稿日:{{ $nipo->created_at }}</i><p>
                   <a href="{{ action('DupoController@edit', $nipo->id) }}" class="fs12"><i class="fa fa-fw fa-pencil" aria-hidden="true"></i></a>
                   <a href="{{ url('/dupo/error') }}" class="fs12"><i class="fa fa-fw fa-reply" aria-hidden="true"></i></a>
                   <a href="{{ url('/dupo/error') }}" class="fs12"><i class="fa fa-fw fa-heart-o" aria-hidden="true"></i></i></a>
                   <a href="#" data-id="{{ $nipo->id }}" onclick="deletePost(this);" class="fs12"><i class="fa fa-fw fa-times" aria-hidden="true"></i></a>
                </form>
            </li>
        </div>
    </div>
</div>

@empty
{{-- 何もこなかった場合の処理 --}}
<li>No dupo! Sorry</li>
@endforelse

<script>
function deletePost(e) {
  'use strict';
  if (confirm('記事を本当に削除しますか?')) {
    document.getElementById('form_' + e.dataset.id).submit();
  }
}
</script>
@endsection
