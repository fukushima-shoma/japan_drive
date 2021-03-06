<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css" type="text/css" media="all" />
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
     <meta name="viewport" content="width=device-width, initial-scale=1" />
     <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <!-- Styles -->
    
    <link href="{{ asset('css/common.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
  <div id="wrapper">
    <header>
      <div id="navbar">
        <div class="navbar-items">
          <a class="nav-link" href="/sightseeing">ホーム</a>
        </div>
        <div class="navbar-items">
          <form action="{{ route('pages.search') }}" method="get" class="nav-search">
              {{ csrf_field() }}
            <input type="text" class="nav-link" placeholder="キーワード検索" name="search" value="">
            <button class="nav-link" type="submit">
                <i class="fas fa-search"></i>
            </button>
          </form>
        </div>

        <!-- ログイン -->
        @guest
        <div class="navbar-items">
          <a class="nav-link" href="{{ route('login') }}">ログイン</a>
        </div>
        @if (Route::has('register'))
        <div class="navbar-items">
          <a class="nav-link" href="{{ route('register') }}">会員登録</a>
        </div>
        @endif
        @else
          <ul class="navbar-dropmenu">
            <li>
              <a href="#">
                  {{ Auth::user()->name }}さん
              </a>
                <ul>
                  <li>
                    <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        ログアウト
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                  </li>
                </ul>
            </li>
          </ul>
        @endguest
      </div>
    </header>

    <main>
                  @yield('content')
    </main>

    </div>
    <footer>

    </footer>

</body>
</html>
