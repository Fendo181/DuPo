@extends('layouts.default')

@section('title')
Dupo
@endsection


@section('blog_title')
<h1>今月のDuPo一覧表</h1>
@endsection


@section('content')
<!-- 記事を書く -->
<span class="pen_marker">
    Start Dupo!→
    <a href="{{ url('/dupo/create') }}" class="fs12">[New DuPo]</a>
</span>

<!-- @foreach ($nipos as $nipo)
<li><a href="">{{ $nipo->title }}</a></li>
@endforeach -->

{{-- ここで配列形式の$nipoをnipoで要素を抜き出す --}}
@forelse ($nipos as $nipo)
{{-- タイトルだけ表示する。 --}}
<li>
    <p>投稿日:{{ $nipo->created_at }}</p>
    <a href="{{ action('DupoController@show', $nipo->id) }}">{{ $nipo->title }}</a>
    <a href="{{ action('DupoController@edit', $nipo->id) }}" class="fs12">[編集する]</a>
    <form action="{{ action('DupoController@destroy', $nipo->id) }}" id="form_{{ $nipo->id }}" method="post" style="display:inline">
       {{ csrf_field() }}
       {{ method_field('delete') }}
     <a href="#" data-id="{{ $nipo->id }}" onclick="deletePost(this);" class="fs12">[削除する]</a>
   </form>
</li>

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
