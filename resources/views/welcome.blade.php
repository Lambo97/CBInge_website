<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Comité de baptême</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/layout.css') }}" rel="stylesheet">
    </head>
    <body>
        
        <div class="bloc_black"></div>
        <div class = "container" > 

        <header>
            <div class="div_logo">
                <img src="img/logo.png" alt="Logo Comité Baptême Ingénieur">
            </div>
            <div class = "top">
                <p>Comité de Baptême<p>
                <p>Ingénieur civil<p>
            </div>
        </header>
     <!--   <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                
            @endif

          
                
                   
                </div>
             </div> -->  

            <div class = "content">
            
            
            </div>

        </div>
    </body>
</html>
