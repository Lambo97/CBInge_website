<div id="close_nav" class="hamburger-menu position-absolute top-0 right-0 pt-3 pr-4 cursor">
    <img src="../../img/close.svg" alt="close">
</div>
<div id = "all_nav" class="nav-content pt-5 pb-5 pl-3">
    @guest
        <li class="nav-item d-block">
            <form id="login-form" action="{{ route('login') }}" method="GET">
                
                <button type="submit" class="buttons-green">{{ __('Connexion') }}</button>
            </form>
        </li>
    @if (Route::has('register'))
    <li class="nav-item d-block my-2 pl-2">
            <a class="green-link" href="{{ route('register') }}">{{ __("S'inscrire") }}</a>
                            </li>             
    @endif
    @else
                <li class=" d-block">
                            <div class="font-weight-bold">
                                Bonjour  {{ Auth::user()->surnom_forum }} <span class="caret"></span>
                            </div>
        
                            <a class="green-link" href="/profile/show/{{Auth::user()->id}}">{{ __("Votre fiche") }}</a>
                            

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:block;">
                                    @csrf
                                    <button type="submit" class="buttons-green">Déconnexion</button>
                                </form>
                            
                        </li>
    @endguest
    <ul class="list-unstyled">
        @foreach($menus as $menu)
        @if($menu->lien)
        <li>
            <a href="{{$menu->lien}}" class="text-white nav-link navigation-link">{{$menu->nom}}</a>
        </li>
        @else
        <li>
            <p class="p-nav cursor nav-link navigation-link pb-0 mb-0">{{$menu->nom}}</p>
            <ul class="d-none list-unstyled ml-5">
                @foreach($menu->sousMenus as $sousMenu)
                    @if(((Auth::check() and $sousMenu->droit >= Auth::user()->droit) or $sousMenu->droit == 0) and $sousMenu->afficher == 1)
                    <li>
                        <a href="{{$sousMenu->lien}}" class="text-white nav-link navigation-link">{{$sousMenu->nom}}</a>
                    </li>
                    @endif
                @endforeach
            </ul>
        </li>
        @endif
        @endforeach
    </ul>
</div>