
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/v4-shims.css">
    
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/nav.js') }}" defer></script>


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand navbar-light bg-black shadow-sm">
            <div class="container">
                <a class="navbar-brand text-light text-hide logo" href="{{ url('/') }}">
                    <div>
                        {{ config('app.name', 'CB Ingé') }}
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse position-relative" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
    
                    </ul>
                   
                    <div class= "div-center position-absolute">
                        <p class="text-center margin-null">
                            Comité de baptême
                        </p>
                        <p class="text-center margin-null font-weight-bold">
                            Ingénieur civil
                        </p>
    
                    </div>
    
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-sm-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item d-none d-sm-block" style="z-index:2000;">
                                <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item d-none d-sm-block" style="z-index:2000;">
                                    <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown d-none d-sm-block" style="z-index:2000;">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
    
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-dark" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
    
                                    <form id="logout-form d-none d-lg-block" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                            <li style="z-index:2000;">
                                <div class="hamburger-menu cursor" id="open_nav" style="z-index:2000;">
                                    <img src="../../img/menu.svg" alt="menu">
                                </div>
                                
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="navigation" class="position-fixed zindex-tooltip d-none position-absolute col-6 col-sm-6 col-md-2 col-lg-2 bg-black top-0 right-0 w-100" style="z-index: 2000 ; height:100%;">
            @include('layouts.navbar')
        </div>
        <div class="container">
        <main class="pt-6 pb-5">
            @include('layouts.messages')
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 mx-auto">
            @yield('content')
            </div>
        </main>
            
            
            
        </div>
        <div class="container-fluid mx-0 px-0 mt-3">
        @include('layouts.footer')
        </div>
        
    </div>
    
</body>
</html>