@extends('layouts.default')

@section('title')
About me
@endsection


@section('blog_title')
<!-- <h1>Welcome EndoBlog!</h1> -->
@endsection

@section('img1')
<img src="/assets/img/me.jpg" alt="fendo181" width="280" height="280">
@endsection  

@section('aboutme')
<h2>製作者</h2>
<p>名前:<a href="https://github.com/Fendo181">Fendo181</a></p>
<p>年齢:22歳<p>
<p>大学選考:情報通信工学</p>
<p>趣味:webサービス開発</p>
<p>一言:このブログサービスもっとよくしたいですね。手抜きですみません。</p>
<p>もう一言:自作でPHPのフレームワーク作りたい!</p>

@endsection

@section('back')
    <a href="{{ url('/') }}">Back Home</a>
@endsection

