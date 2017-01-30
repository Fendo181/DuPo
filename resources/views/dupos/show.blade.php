@extends('layouts.default')

@section('title')
DuPo Page
@endsection

@section('content')
<div class="col-sm-12 col-md-12 col-lg-12">
    <h4>『{{ $nipo->title}}』</h4>
    <!-- 本文の中身をエスケープする。 -->
    <p>{!! nl2br(e($nipo->body)) !!}</p>
</div>

<u>Comment</u>
<ul>
    @forelse ($nipo->comments as $comment)
    <li>{{ $comment->name }}:{{ $comment->body }}</li>
    @empty
    <li>No comment yet</li>
    @endforelse
</ul>


<form method="post" action="{{ action('CommentsController@store',$nipo->id) }}" >
      {{ csrf_field() }}
    <div class="form-groupe">
        <p>
            お名前<input type="text" name="name" class="form-control" placeholder="何もなければ名無しのDuPoさんが入ります" value="" >
            @if ($errors->has('name'))
            <span class="error">{{ $errors->first('name') }}</span>
            @endif
        </p>
        <p>
            コメント<input type="text" name="body" class="form-control" placeholder="body" value="{{ old('body') }}">
            @if ($errors->has('body'))
            <span class="error">{{ $errors->first('body') }}</span>
            @endif
        </p>
        <p>
            <input type="submit"  class="btn btn-outline-info"   value="コメントする。">
        </p>
    <div>
</form>

@endsection

@section('tab_menus_down')
<ul class="nav nav-tabs">
    <li class="nav-item">
        <a class="nav-link" href="{{ action('DupoController@edit', $nipo->id) }}" class="fs12"><i class="fa fa-pencil"></i>編集する</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ url('/dupo') }}"><i class="fa fa-fw fa-book" aria-hidden="true"></i>Back DuPo Page</a>
    </li>
</ul>
@endsection
