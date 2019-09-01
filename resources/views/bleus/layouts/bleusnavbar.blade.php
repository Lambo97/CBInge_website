<div id="close_nav" class="hamburger-menu position-absolute top-0 right-0 pt-3 pr-4 cursor">
    <img src="../../../img/close.svg" alt="close">
</div>
<div id = "all_nav" class="nav-content pt-5 pb-5 pl-3">
    <ul class="list-unstyled">
        @if(Auth::check() and Auth::user()->droit < 8)
            <li class=" d-block pb-2">
                <div class="font-weight-bold">
                    Bonjour  {{ Auth::user()->surnom_forum }} <span class="caret"></span>
                </div>
            </li>
            <li class=" d-block pb-2">
                <a class="blue-link" href="/profile/show/{{Auth::user()->id}}">Votre Fiche</a>
            </li>
            <li class=" d-block pb-2">
                <a class="blue-link" href="/">Retour vers le site du CB</a>
            </li>
        @elseif(Auth::check() and Auth::user()->droit == 8)
            <li class=" d-block pb-2">
                <div class="font-weight-bold">
                    Demande en attente de confirmation <span class="caret"></span>
                </div>
            </li>
        @else
            <li class="nav-item d-block mb-3">
                <form id="login-form" action="{{ route('login') }}" method="GET">
                    <button type="submit" class="buttons-blue">Connexion</button>
                </form>
            </li>
        @endif

        <li>
            <searchbar link="/profile/show/"></searchbar>
        </li>
        @foreach($bleusmenus as $menu)
            @if($menu->droit == "0" or ($menu->droit == 7 and Auth::check() and (Auth::user()->droit == 7 or Auth::user()->droit <= 5)))
            <li>
                <a href="{{$menu->lien}}" class="d-inline text-white nav-link navigation-link-blue">{{$menu->nom}}</a>
            </li>
            @endif
        @endforeach
        @if(Auth::check() and Auth::user()->droit <= 8)
        <li class=" d-block pt-4">
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:block;">
                @csrf
                <button type="submit" class="buttons-blue">Déconnexion</button>
            </form>
        </li>
        @endif
    </ul>
</div>
