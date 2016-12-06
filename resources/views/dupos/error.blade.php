@extends('layouts.default')

@section('title')
遠藤ブログ
@endsection


@section('blog_title')
<!-- <h1>Welcome EndoBlog!</h1> -->
@endsection


@section('about')
このページは、まだ作られてません。

@endsection

@section('back')
    <div class="center">
        <a href="{{ url('/') }}"><i class="fa fa-fw fa-home" aria-hidden="true"></i>Back Top Page</a>
    </div>
@endsection
