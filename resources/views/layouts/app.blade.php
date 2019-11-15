<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome-animation/0.0.10/font-awesome-animation.css" type="text/css" media="all" />

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
    <!-- <link href="{{ asset('css/common.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
  <header>

    <div class="navbar-nav ">
      <div class="navbar-nav-item">
        <a class="navbar-link" href="/sightseeing">ホーム</a>
      </div>
      <div class="navbar-nav-item">
        <form action="{{ route('pages.search') }}" method="get">
            {{ csrf_field() }}
          <input type="text" class="form-control input-lg" placeholder="キーワード検索" name="search" value="">
          <span class="input-group-btn">
              <button class="" type="submit">
                  <i class="fas fa-search"></i>
              </button>
          </span>
        </form>
      </div>
      <!-- ログイン -->
      @guest
      <div class="navbar-nav-item">
        <a class="nav-link-login" href="{{ route('login') }}">ログイン</a>
      </div>
      @if (Route::has('register'))
      <div class="navbar-nav-item">
        <a class="nav-link-register" href="{{ route('register') }}">会員登録</a>
      </div>
      @endif
      @else
      <div class="navbar-nav-item dropdown">




        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">ログアウト
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </div>
      @endguest
    </div>


  </header>

  <main>
                @yield('content')
  </main>

</body>
</html>
