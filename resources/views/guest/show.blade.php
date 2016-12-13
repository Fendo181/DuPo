@extends('layouts.default')

@section('title')
DuPo Page
@endsection

@section('content')
<div class="col-sm-6">
    <h4>『{{ $nipo->title}}』</h4>
    <!-- 本文の中身をエスケープする。 -->
    <p>{!! nl2br(e($nipo->body)) !!}</p>
</div>
@endsection

@section('tab_menus_down')
<ul class="nav nav-tabs">
    <li class="nav-item">
       <a class="nav-link" href="{{ url('/guest_dupo') }}"><i class="fa fa-fw fa-book" aria-hidden="true"></i>Back DuPo Page</a>
    </li>
</ul>
@endsection
