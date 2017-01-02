<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
     <!-- CSS-->
     <!-- <link rel="stylesheet" href="\assets\css\reset.css"> -->
     <link rel="stylesheet" href="\assets\css\styeles.css">
     <!-- Awsomeアイコン -->
     <script src="https://use.fontawesome.com/3f882b3f5b.js"></script>
     <!-- bootstrap用のscript -->
     <script
      src="https://code.jquery.com/jquery-3.1.1.slim.js"
      integrity="sha256-5i/mQ300M779N2OVDrl16lbohwXNUdzL/R2aVUXyXWA="
      crossorigin="anonymous">
      </script>
      <!-- tether.min.js -->
      <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
      <!-- Bootstrap ver4.0 -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
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

    {{-- head部分のtab_menus  --}}
    <div class="container">
        @yield('tab_menus_up')
    </div>

    {{-- リンク ページ --}}
    <div class="container">
        @yield('about')@yield('aboutme')@yield('git')@yield('Dot')
    </div>

    {{-- コンテンツの表示 --}}
    <div class="container">
        <div class="row">
            @yield('content')
        </div>
    </div>

    {{-- footer部分のtab_menus  --}}
    <div class="container">
        @yield('tab_menus_down')
    </div>

    {{-- monthリンク --}}
    <div class="mx-auto" style="width: 200px;">
        @yield('back_months')
    </div>

    {{-- バックリンク --}}
    <div class="container">
        @yield('back')
    </div>
</body>
</html>
