<div id="close_nav" class="hamburger-menu position-absolute top-0 right-0 pt-3 pr-4 cursor">
    <img src="../../img/close.svg" alt="close">
</div>
<div class="nav-content pt-5 pb-5 pl-3">
    @guest
    <li class="nav-item d-block d-sm-none">
                                <button class="buttons-green" action="{{ route('login') }}">{{ __('Se connecter') }}</button>
                            </li>
        @if (Route::has('register'))
        <li class="nav-item d-block d-sm-none my-2 pl-2">
               <a class="green-link" href="{{ route('register') }}">{{ __("S'inscrire") }}</a>
                                </li>             
        @endif
        @else
                    <li class=" d-block d-sm-none">
                                <div class="font-weight-bold">
                                  Bonjour  {{ Auth::user()->name }} <span class="caret"></span>
                                </div>
    
                                
    
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:block;">
                                        @csrf
                                        <button type="submit" class="buttons-green">Se déconnecter</button>
                                    </form>
                                
                            </li>
        @endguest
        <ul class="list-unstyled">
            <li>
                <a href="{{route('events.index')}}" class="text-white nav-link navigation-link">Agenda</a>
            </li>
            <li>
                <a href="{{route('logout')}}" class="text-white nav-link navigation-link">Repertoire</a>
            </li>
            <li>
                <p class="p-nav cursor nav-link navigation-link pb-0 mb-0">Folklore</p>
                <ul class="d-none list-unstyled ml-5">
                    <li>
                        <a href="{{route('logout')}}" class="text-white nav-link navigation-link">Chants</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" class="text-white nav-link navigation-link">Oripaux</a>
                    </li>
                </ul>
            </li>
            <li>
                <p class="p-nav cursor nav-link navigation-link pb-0 mb-0">Comité</p>
                <ul class="d-none list-unstyled ml-5">
                    <li>
                        <a href="{{route('logout')}}" class="text-white nav-link navigation-link">Comité actuel</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" class="text-white nav-link navigation-link">Anciens comités</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" class="text-white nav-link navigation-link">Anciens webmasters</a>
                    </li>
                </ul>
            </li>
            <li>
                <p class="p-nav cursor nav-link navigation-link pb-0 mb-0">Multimédia</p>
                <ul class="d-none list-unstyled ml-5">
                    <li>
                        <a href="{{route('logout')}}" class="text-white nav-link navigation-link">Photos</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" class="text-white nav-link navigation-link">Vidéos</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" class="text-white nav-link navigation-link">Archives</a>
                    </li>
                </ul>
            </li>
            <li>
                <p class="p-nav cursor nav-link navigation-link pb-0 mb-0">Discussion</p>
                <ul class="d-none list-unstyled ml-5">
                    <li>
                        <a href="{{route('logout')}}" class="text-white nav-link navigation-link">Insultes</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" class="text-white nav-link navigation-link">PV du comité</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" class="text-white nav-link navigation-link">FORUUUUM</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" class="text-white nav-link navigation-link">Citations</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" class="text-white nav-link navigation-link">Tu préfères</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" class="text-white nav-link navigation-link">Pense-bête</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" class="text-white nav-link navigation-link">Sondages</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" class="text-white nav-link navigation-link">Top 50 messages</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('logout')}}" class="text-white nav-link navigation-link pb-0 mb-0">Sponsors</a>
            </li>
            <li>
                <p class="p-nav cursor nav-link navigation-link pb-0 mb-0">Messe</p>
                <ul class="d-none list-unstyled ml-5">
                    <li>
                        <a href="{{route('logout')}}" class="text-white nav-link navigation-link">Délations</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}" class="text-white nav-link navigation-link">Invités Messe</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('logout')}}" class="text-white nav-link navigation-link">Les tuyaux</a>
            </li>

        </ul>
</div>