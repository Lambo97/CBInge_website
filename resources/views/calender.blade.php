<!-- calendar.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
    -->


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
    @stack('scripts')

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
<body style="min-width: 800px; font-size: 16px;">
<div class="agenda-css">
  <h1 class="mb-3 text-center">Agenda</h1>
  @if (\Session::has('success'))
        <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
        </div><br />
       @endif
       
     <div class="panel panel-default agenda">
           
           <div class="panel-body" >
              {!! $calendar->calendar() !!}
          </div>
      </div>
      <form method="post" action="{{url('event')}}">
          @csrf
          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Title">Title:</label>
              <input type="text" class="form-control" name="title">
            </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <strong> Start Date : </strong>  
              <input class="date form-control"  type="text" id="startdate" name="startdate">   
           </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <strong> End Date : </strong>  
              <input class="date form-control"  type="text" id="enddate" name="enddate">   
           </div>
          </div>
          <div class="row">
            <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <button type="submit" class="btn btn-success">Add Event</button>
            </div>
          </div>
        </form>
  </div>
  <script type="text/javascript">  
          $('#startdate').datepicker({ 
              autoclose: true,   
              format: 'yyyy-mm-dd'  
           });
           $('#enddate').datepicker({ 
              autoclose: true,   
              format: 'yyyy-mm-dd'
           }); 
      </script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
  {!! $calendar->script() !!}
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
                   
                    <div class= "div-centercalender position-absolute">
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
        <div id="navigation" class="position-fixed zindex-tooltip d-none position-absolute col-8 col-sm-6 col-md-3 col-lg-3 col-xl-2 bg-black top-0 right-0 w-100" style="z-index: 2000 ; height:100%;">
            @include('layouts.navbar')
        </div>
        
        <div id="container_agenda" class="container">
            
        </div>

        <div class="container-fluid mx-0 px-0 mt-3">
        @include('layouts.footer')
        </div>
        
    </div>
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

    <script>
      var agenda = document.querySelector('.agenda-css');
      var container = document.querySelector('#container_agenda');
      var agenda_hauteur = agenda.offsetHeight + 100;
      container.style.height = agenda_hauteur + "px";

      window.onresize = function(){
        var agenda = document.querySelector('.agenda-css');
        var container = document.querySelector('#container_agenda');
        var agenda_hauteur = agenda.offsetHeight + 100;
        container.style.height = agenda_hauteur + "px";
      };
    </script>
</body>
</html>



