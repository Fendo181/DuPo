@extends('layouts.default')

@section('title')
遠藤ブログ
@endsection


@section('blog_title')
<!-- <h1>Welcome EndoBlog!</h1> -->
@endsection


@section('about')
<h2  class="message" style="background:skyblue;">DuPoとは?</h2>
<p>DuPoは遠藤が<u>勢いで作ってしまった日報サービス</u>です。</p>
<p>日報的な事はできますが、それ以上を望むと制作者である遠藤が夜逃げするので、止めて下さい。</p>


@endsection

@section('back')
    <a href="{{ url('/') }}">Back Home</a>
@endsection
