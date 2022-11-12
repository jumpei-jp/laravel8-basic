<!DOCTYPE HTML>
  <html lang="ja">
  <head>
  <meta charset="UTF-8">
  <title>@yield('title') | Laravel basic</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@yield('pageCss')
  </head>
  <body>

  @yield('header')

  <div class="contents">
      <!-- コンテンツ -->
      <div class="main">
          @yield('content')
      </div>

      <!-- 共通メニュー -->
      <div class="sub">
          @yield('submenu')
      </div>
  </div>

  @yield('footer')
  </body>
  </html>
