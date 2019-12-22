<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name') }}
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
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <ul class="nav nav-pills">
                            <li class="nav-item dropdown">
                                <a class="nav-link @if(request()->is('home*')) active @endif" data-toggle="dropdown" href="{{ route('home') }}" aria-haspopup="true" aria-expanded="false">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->is('product*')) active @endif" href="{{ route('product.index') }}">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->is('city*')) active @endif" href="{{ route('city.index') }}">Ciudades</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->is('local*')) active @endif" href="{{ route('local.index') }}">Locales</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->is('permission*')) active @endif" href="{{ route('permission.index') }}">Permisos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if(request()->is('role*')) active @endif" href="{{ route('role.index') }}">Roles</a>
                              </li>
                          </ul>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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

        <div class="container">
            <div style="margin-top:5px">
                <h1 class="nav navbar-nav">@yield('title2')</h1>
            </div>
            <main class="py-4">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
