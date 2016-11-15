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
    <a href="{{ url('/about') }}">DuPoの使い方</a>
@endsection

@section('aboutme')
    <a href="{{ url('/aboutme') }}">About me</a>
@endsection



@section('content')
<h1>WelCome DuPo</h1>
@endsection








