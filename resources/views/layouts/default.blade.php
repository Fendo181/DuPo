<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <!-- Bootstrap 
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
     -->

     
     <!-- CSS-->
     <link rel="stylesheet" href="assets\css\styeles.css">
</head>
<body>
  

    <div class="container">
        @yield('blog_title')
    </div>
    
    <div  align="center">
        @yield('img1')
    </div>
    
    {{-- リンク ページ --}}
    <div class="container">
        @yield('about')@yield('aboutme')@yield('git')@yield('Dot')
    </div>
        

    
    @if (session('flash_message'))
      <div class="flash_message" onclick="this.classList.add('hidden')">{{ session('flash_message') }}</div>
    @endif
    
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