<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
     <!-- CSS-->
     <!-- 吐き気を催すCSSだ死ね -->
     <link rel="stylesheet" href="\assets\css\styeles.css">
     </div
</head>
<body>

    <!--flahメッセージ  -->
    @if (session('flash_message'))
    <div class="flash_message" onclick="this.classList.add('hidden')">{{ session('flash_message') }}</div>
    @endif

    <div class="container">
        @yield('blog_title')
    </div>

    <!-- <div  align="center">
        @yield('img1')
    </div> -->

    {{-- リンク ページ --}}
    <div class="container">
        @yield('about')@yield('aboutme')@yield('git')@yield('Dot')
    </div>

    {{-- コンテンツの表示 --}}
    <div class="container">
       @yield('content')
    </div>

    {{-- バックリンク --}}
    <div class="container">
        @yield('back')
    </div>





</body>
</html>
