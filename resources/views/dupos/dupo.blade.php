@extends('layouts.default')

@section('title')
Dupo
@endsection


@section('blog_title')
<h1>今月のDuPo一覧表</h1>
@endsection

<!-- 記事を書く -->
<span >
    <a href="{{ url('/dupo/create') }}" class="fs12"><i class="fa fa-fw fa-pencil-square-o" aria-hidden="true"></i>New DuPo</a>
</span>

<div class="center">
    <a href="{{ url('/') }}"><i class="fa fa-fw fa-home" aria-hidden="true"></i>Back Top Page</a>
</div>


@section('content')
<!-- @foreach ($nipos as $nipo)
<li><a href="">{{ $nipo->title }}</a></li>
@endforeach -->

{{-- ここで配列形式の$nipoをnipoで要素を抜き出す --}}
@forelse ($nipos as $nipo)
{{-- タイトルだけ表示する。 --}}
<div class="col-sm-4">
    <div class="card">
        <div class="card-block">
            <li>
                <div class="card-title">
                    <a href="{{ action('DupoController@show', $nipo->id) }}">『{{ $nipo->title }}』</a>
                </div>
                <div class="card-text">
                    {{ $nipo->body }}
                </div>
                <form action="{{ action('DupoController@destroy', $nipo->id) }}" id="form_{{ $nipo->id }}" method="post" style="display:inline">
                   {{ csrf_field() }}
                   {{ method_field('delete') }}
                   <p><i>投稿日:{{ $nipo->created_at }}</i><p>
                   <a href="{{ action('DupoController@edit', $nipo->id) }}" class="fs12"><i class="fa fa-fw fa-pencil" aria-hidden="true"></i></a>
                   <a href="{{ url('') }}" class="fs12"><i class="fa fa-fw fa-reply" aria-hidden="true"></i></a>
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
