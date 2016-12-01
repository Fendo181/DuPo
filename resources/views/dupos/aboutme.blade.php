@extends('layouts.default')

@section('title')
About me
@endsection


@section('blog_title')
<!-- <h1>Welcome EndoBlog!</h1> -->
@endsection


@section('aboutme')
<h2>製作者:えんどぅー</h2>
<p>年齢:23歳<p>
<p>しいたけが食べれないです。</p>


@endsection

@section('back')
    <a href="{{ url('/') }}">Back Home</a>
@endsection
