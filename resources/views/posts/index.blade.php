@extends('layouts.default')


@section('title')
Blog Posts
@endsection


@section('blog_title')
<!-- <h1>Welcome EndoBlog!</h1> -->
@endsection

@section('img1')
<img src="/assets/img/top.png" alt="" width="800" height="600">
@endsection



@section('about')
    <a href="{{ url('/about') }}">遠藤ブログの使い方</a>
@endsection

@section('aboutme')
    <a href="{{ url('/aboutme') }}">About me</a>
@endsection

<!-- @section('git')
    <a href="{{ url('https://github.com/Fendo181/Laravel_repos') }}">Souce Code(GitHub)</a>
@endsection -->

<!-- @section('Dot')
    <a href="{{ url('/Dot') }}">その他のコンテンツ(簡易掲示板)</a>
@endsection -->


@section('content')
<h1>WelCome DuPo</h1>
@endsection








