@extends('layouts.default')

@section('title')
遠藤ブログ
@endsection


@section('blog_title')
<!-- <h1>Welcome EndoBlog!</h1> -->
@endsection

@section('img1')
<img src="/assets/img/top.jpg" alt="" width="600" height="400">
@endsection  

@section('about')
<h2  class="message" style="background:skyblue;">遠藤ブログの使い方</h2>
<p >遠藤ブログは今日一日あった良い事やくだらないことをとりあえず書いてみる<u>ブログサービス</u>です!
因みに現在利用しているのは製作者である<strong>遠藤</strong>だけです。</p>
<h2  class="message" style="background:skyblue;">ブログをはじめましょう!</h2>
<p>遠藤ブログの始め方は簡単です。[Add new blog!]と書いてある所をクリックしましょう。そうすると一番上に「今日の遠藤ブログ」と書いてあるページに着きます。あとは好きにtitleと本文を入力後に[Add new]ボタンを押します。そうすると書いた文章がTopページに投稿されます。投稿された文章はtitle名をクリックすることで好きに閲覧できます。</p>
<h2 class="message" style="background:skyblue;">編集と削機機能について</h2>
投稿された文章は[編集する]を押すことで、すぐに投稿した内容を編集する事ができます。また、投稿した内容を削除したい場合も[削除]を押すことですぐに消すことができます。
<hr>
<footer>
    このサイトは<a href="https://github.com/Fendo181">Fendo181</a>で運営が行われております!。
</footer>
<hr>
@endsection

@section('back')
    <a href="{{ url('/') }}">Back Home</a>
@endsection

