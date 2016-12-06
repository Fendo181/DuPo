@extends('layouts.default')

@section('title')
Errorページ
@endsection


@section('blog_title')
<!-- <h1>Welcome EndoBlog!</h1> -->
@endsection


@section('about')
<h2  class="message" style="background:skyblue;">ページがまだ作られてません！</h2>
もう少しお待ち下さい!!
@endsection

@section('back')
    <div class="center">
        <a href="{{ url('/') }}"><i class="fa fa-fw fa-home" aria-hidden="true"></i>Back Top Page</a>
    </div>
@endsection
