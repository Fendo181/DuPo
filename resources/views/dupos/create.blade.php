@extends('layouts.default')

@section('title')
Add New
@endsection


@section('blog_title')
<h2 class="title">『Add DuPo』</h2>
@endsection


@section('content')
<div class="center">
    <form method="post" action="{{ url('/dupo/store')}}" >
      <!--Lalavel特有のCSRF対策をスルーするための対策(TOkenを仕込む)です。 -->
      {{ csrf_field() }}

        <h3 class="title">タイトル</h3>
        <p>
            <input type="text" name="title" placeholder="title" value="{{ old('title') }}">
            @if ($errors->has('title'))
            <span class="error">{{ $errors->first('title') }}</span>
            @endif
        </p>


        <h3 class="title">今日のDuPo</h3>
        <p>
            <textarea name="body" placeholder="本文を入力してください" cols="30" rows="20">{{ old('body') }}</textarea>
            @if ($errors->has('body'))
            <span class="error">{{ $errors->first('body') }}</span>
            @endif
        </p>
        <p>
            <input type="submit" value="記事を投稿する。">
        </p>
    </form>
</div>

@endsection

@section('back')
    <a href="{{ url('/') }}" >Back Home</a>
@endsection
