@extends('layouts.default')

@section('title')
DuPo Page
@endsection



@section('content')
<div class="center">
        <h1>{{ $nipo->title}}</h1>
        <!-- 本文の中身をエスケープする。 -->
        <p>{!! nl2br(e($nipo->body)) !!}</p>
</div>
@endsection

@section('back')
<a href="{{ url('/dupo') }}">Back Home</a>
@endsection
