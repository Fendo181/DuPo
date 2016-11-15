@extends('layouts.default')

@section('title')
遠藤ブログ
@endsection


@section('blog_title')
<!-- <h1>Welcome EndoBlog!</h1> -->
@endsection


@section('about')
<h2  class="message" style="background:skyblue;">DuPoの使い方</h2>
<p>DuPoは今日一日あった良い事やくだらないことをとりあえず書いてみる<u>日報サービス</u>です!
因みに現在急ピッチで製作しています。</p>

@endsection

@section('back')
    <a href="{{ url('/') }}">Back Home</a>
@endsection

