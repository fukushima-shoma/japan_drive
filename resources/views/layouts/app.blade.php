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
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<body>
  <header>

      <nav class="navbar navbar-expand-md">
        <ul class="navbar-nav ">
                <li class="navbar-nav-item navbar-nav-item-home">
                  <a class="nav-link" href="/">ホーム</a>
                </li>

                <li class="navbar-nav-item navbar-nav-item-drive">
                  <a class="nav-link" href="/drive">ドライブ</a>
                </li>

                <li class="navbar-nav-item navbar-nav-item-gurume">
                  <a class="nav-link" href="/food">グルメ</a>
                </li>

                <li class="navbar-nav-item navbar-nav-item-sisetu">
                  <a class="nav-link" href="/sightseeing">観光</a>
                </li>

                <li class="navbar-nav-item navbar-nav-item-whether">
                  <a class="nav-link" href="/weather">天候</a>
                </li>

                <li class="navbar-nav-item navbar-nav-item-search">
                  <input type="text" class="form-control input-lg" placeholder="検索する" name="search">
                    <i class="nav-link fas fa-search "></i>
                </li>

                <!-- ログイン -->
                @guest
                <li class="navbar-nav-item navbar-nav-item-login">
                  <a class="nav-link" href="{{ route('login') }}">ログイン</a>
                </li>
                @if (Route::has('register'))
                <li class="navbar-nav-item navbar-nav-item-register">
                  <a class="nav-link" href="{{ route('register') }}">会員登録</a>
                </li>
                  @endif
                @else
                <li class="navbar-nav-item dropdown">
                    <a id="navbarDropdown" class="navbar-nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                      {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">ログアウト
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>
                    </div>
                  </li>
                    @endguest
      </ul>
    </nav>

  </header>

  <main>
                @yield('content')
  </main>

</body>
</html>
