@extends('layouts.default')

@section('title')
DuPo Page
@endsection



@section('content')

<div class="center">
        <h2 class="title">『{{ $nipo->title}}』</h2>
        最終更新日:{{ $nipo-> updated_at }}
        <!-- 本文の中身をエスケープする。 -->
        <p class="text">{!! nl2br(e($nipo->body)) !!}</p>
        <a href="{{ action('DupoController@edit', $nipo->id) }}" class="fs12"><i class="fa fa-pencil"></i>編集する</a>
</div>

@endsection

@section('back')
    <a href="{{ url('/dupo') }}"><i class="fa fa-fw fa-book" aria-hidden="true"></i>Back DuPo Page</a>
@endsection
