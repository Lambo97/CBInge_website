
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')
    @yield('head-agenda')


    <!-- Icon -->
    <link rel="icon" type="image/png" href="/img/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/img/favicon-16x16.png" sizes="16x16" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/layout.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/v4-shims.css">
    
    <!-- Scripts -->
    <script src="{{ asset('/js/app.js') }}" defer></script>
    <script src="{{ asset('/js/nav.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    

    <!-- One signal -->
    @if(Auth::check())
    <link rel="manifest" href="/manifest.json" />
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    <script>
    var OneSignal = window.OneSignal || [];
    OneSignal.push(function() {
        OneSignal.init({
        appId: "3895938b-5552-4d3d-a9d7-3ce2a0b0c6f1",
        });
        OneSignal.sendTags({
            userId: '{{Auth::user()->id}}',
            droit: '{{Auth::user()->droit}}'
        }).then(function(tagsSent) {
            // Callback called when tags have finished sending
            console.log(tagsSent);   
        });
    });
    </script>
    @endif
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
                        <li style="z-index:2000;">
                            <div class="hamburger-menu cursor" id="open_nav" style="z-index:2000;">
                                <img src="../../img/menu.svg" alt="menu">
                            </div>
                            
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div id="navigation" class="position-fixed zindex-tooltip d-none position-absolute col-8 col-sm-6 col-md-3 col-lg-3 col-xl-2 bg-black top-0 right-0 w-100" style="z-index: 2000 ; height:100%;  overflow:scroll;">
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
    @stack('scripts')
    <script src="https://cdn.tiny.cloud/1/jsp5xx9rfjgnpg9sblclrw75cf7bzbj0bfessb0vkba9q0zm/tinymce/5/tinymce.min.js"></script>
    <script>
        tinymce.init({
            selector:'#editor',
            height: 400,
            skins: "dark",
            plugins: [
            'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
            'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
            'save table contextmenu directionality emoticons template paste textcolor'
            ],
            toolbar: 'undo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link | forecolor backcolor emoticons',
            menubar: false,
        });
    </script>
     @yield('script-agenda')
</body>
</html>