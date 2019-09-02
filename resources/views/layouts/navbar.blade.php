<div id="close_nav" class="hamburger-menu position-absolute top-0 right-0 pt-3 pr-4 cursor">
    <img src="../../img/close.svg" alt="close">
</div>
<div id = "all_nav" class="nav-content pt-5 pb-5 pl-3">
    <ul class="list-unstyled">
        @if(Auth::check() and Auth::user()->droit < 7)
            <li class=" d-block mb-3">
                <div class="font-weight-bold">
                    Bonjour  {{ Auth::user()->surnom_forum }} <span class="caret"></span>
                </div>
            </li>
            <li class=" d-block mb-3">
                <a class="green-link" href="/profile/show/{{Auth::user()->id}}">Votre Fiche</a>
            </li>
        @elseif(Auth::check() and Auth::user()->droit == 7)
            <li class=" d-block mb-3 pr-3">
                <div class="font-weight-bold">
                    Casse toi sur ton <a href="/bleus" class="green-link">site</a> sale bleu !<span class="caret"></span>
                </div>
            </li>              
        @elseif(Auth::check() and Auth::user()->droit == 8)
            <li class=" d-block mb-3">
                <div class="font-weight-bold">
                    Demande en attente de confirmation <span class="caret"></span>
                </div>
            </li>
        @else
            <li class="nav-item d-block mb-3">
                <form id="login-form" action="{{ route('login') }}" method="GET">
                    <button type="submit" class="buttons-green">Connexion</button>
                </form>
            </li>
        @endif

        <li>
            <searchbar link="/profile/show/"></searchbar>
        </li>
        @foreach($menus as $menu)
        @if($menu->lien)
        @if($menu->nom == "Fichiers")
        <li>
            <a href="/file/{{Auth::user()->id}}" class="d-inline text-white nav-link navigation-link">{{$menu->nom}}</a>
        </li>
        @else
        <li>
            <a href="{{$menu->lien}}" class="d-inline text-white nav-link navigation-link">{{$menu->nom}}</a>
        </li>
        @endif
        @else
        <li>
            @if($menu->nom == "Discussion")
                <p class="p-nav cursor nav-link navigation-link pb-0 mb-0">{{$menu->nom}} @if($check_forum+$check_forum_bleu+$check_pv_comite > 0)<span class="badge badge-light">{{$check_forum+$check_forum_bleu+$check_pv_comite}}</span>@endif</p>
            @else
                <p class="p-nav cursor nav-link navigation-link pb-0 mb-0">{{$menu->nom}}</p>
            @endif
            <ul class="d-none list-unstyled ml-5">
                @foreach($menu->sousMenus as $sousMenu)
                    @if(((Auth::check() and $sousMenu->droit >= Auth::user()->droit) or $sousMenu->droit == 0) and $sousMenu->afficher == 1)
                        @if($sousMenu->lien == '/forum')
                            <li>
                                <a href="{{$sousMenu->lien}}" class="text-white nav-link navigation-link">{{$sousMenu->nom}} @if($check_forum > 0)<span class="badge badge-light">{{$check_forum}}</span>@endif</a>
                            </li>
                        @elseif($sousMenu->lien == '/pvcomite')
                            <li>
                                <a href="{{$sousMenu->lien}}" class="text-white nav-link navigation-link">{{$sousMenu->nom}} @if($check_pv_comite > 0)<span class="badge badge-light">{{$check_pv_comite}}</span>@endif</a>
                            </li>
                        @elseif($sousMenu->lien == '/bleus/forum')
                            <li>
                                <a href="{{$sousMenu->lien}}" class="text-white nav-link navigation-link">{{$sousMenu->nom}} @if($check_forum_bleu > 0)<span class="badge badge-light">{{$check_forum_bleu}}</span>@endif</a>
                            </li>
                        @else
                            <li>
                                <a href="{{$sousMenu->lien}}" class="text-white nav-link navigation-link">{{$sousMenu->nom}}</a>
                            </li>
                        @endif
                    @endif
                @endforeach
            </ul>
        </li>
        @endif
        @endforeach
        @if(Auth::check() and Auth::user()->droit <= 8)
        <li class=" d-block pt-4">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:block;">
                @csrf
                <button type="submit" class="buttons-green">Déconnexion</button>
            </form>  
        </li>   
        @endif
    </ul>
</div>