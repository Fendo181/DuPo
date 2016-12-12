@extends('layouts.default')

@section('title')
Add New
@endsection


@section('blog_title')
@endsection


@section('content')
<form method="post" action="{{ url('/dupo/store')}}" >
    <div class="form-groupe">
      <!--Lalavel特有のCSRF対策をスルーするための対策(TOkenを仕込む)です。 -->
      {{ csrf_field() }}
        <h3 class="title">タイトル</h3>
        <p>
            <input type="text"  class="form-control" name="title" placeholder="title" value="{{ old('title') }}">
            @if ($errors->has('title'))
            <span class="error">{{ $errors->first('title') }}</span>
            @endif
        </p>
    </div>


    <div class="form-groupe">
        <h3 class="title">今日のDuPo</h3>
        <p>
            <textarea name="body" data-provide="markdown" class="form-control" placeholder="本文を入力してください" cols="10" rows="10">{{ old('body') }}</textarea>
            @if ($errors->has('body'))
            <span class="error">{{ $errors->first('body') }}</span>
            @endif
        </p>
        <p>
            <input type="button" class="btn btn-outline-primary" type="submit"   value="記事を投稿する。">
        </p>
    <div>
</form>
@endsection

@section('tab_menus_down')
<ul class="nav nav-tabs">
       <li class="nav-item">
           <a class="nav-link" href="{{ url('/dupo') }}"><i class="fa fa-fw fa-book" aria-hidden="true"></i>Back DuPo Page</a>
       </li>
</ul>
@endsection
