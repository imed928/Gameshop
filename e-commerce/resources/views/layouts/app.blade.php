<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> Gameshop </title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
      <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color:#581845;">
                <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!--Gameshop-->
                    <img id="imgo" src="https://www.seekpng.com/png/full/3-38369_fish-png-images-transparent-pictures-transparent-background-fish.png" style="width: 10%; height: 10%">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" id="white-text" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" id="white-text" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="white-text" href=""> Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="white-text" href=""> News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="white-text" href=""> Home</a>
                            </li>

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if(Auth::user()->type == "admin")
                                        <a class="dropdown-item" href={{ route('admin')}}>Admin</a>
                                    @endif
                                    <a class="dropdown-item" href="{{ route('home')}}">Homepage</a>
                                    <a class="dropdown-item" href="{{ route('catalogue')}}">Catalogue</a>
                                    <a class="dropdown-item" href="{{ route('cart')}}">Cart</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer>
        <div class="footer">
            <a class="to-left" id=" textpetit">&copy;Copyright Fishop By Imed</a>
            <img id="zoom" class="to-right" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/cd/Facebook_logo_%28square%29.png/600px-Facebook_logo_%28square%29.png" height="35" weight="35">
            <img id="zoom" class="to-right" src="https://business.utsa.edu/wp-content/uploads/2018/05/linkedin-logo.png" height="35" weight="35">
            <img id="zoom" class="to-right" src="http://www.kittysanders.com/wp-content/uploads/2014/01/Twitter-Logo-Icon-600x600.png" height="35" weight="35">
        </div>
    </footer>
</body>
</html>
