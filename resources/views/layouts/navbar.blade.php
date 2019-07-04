<div class="hamburger-menu">
    <img src="img/close.svg" alt="close">
</div>
<div>
    @guest
        @if (Route::has('register'))
                              
        @endif
        @else
            <p>Bonjour {{ Auth::user()->name }} <span class="caret"></span></p>
            <a href="{{ route('logout') }}">Modifier ma fiche</a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-light" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
        @endguest
        <ul>
            <li>
                <a href="{{route('logout')}}">Agenda</a>
            </li>
            <li>
                <a href="{{route('logout')}}">Repertoire</a>
            </li>
            <li>
                <p>Folklore<p>
                <ul>
                    <li>
                        <a href="{{route('logout')}}">Chants</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}">Oripaux</a>
                    </li>
                </ul>
            </li>
            <li>
                <p>Comité</p>
                <ul>
                    <li>
                        <a href="{{route('logout')}}">Comité actuel</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}">Anciens comités</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}">Anciens webmasters</a>
                    </li>
                </ul>
            </li>
            <li>
                <p>Multimédia</p>
                <ul>
                    <li>
                        <a href="{{route('logout')}}">Photos</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}">Vidéos</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}">Archives</a>
                    </li>
                </ul>
            </li>
            <li>
                <p>Discussion<p>
                <ul>
                    <li>
                        <a href="{{route('logout')}}">Insultes</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}">FORUUUUM</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}">Citations</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}">Tu préfères</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}">Pense-bête</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}">Sondages</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}">Top 50 messages</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('logout')}}">Sponsors</a>
            </li>
            <li>
                <p>Messe</p>
                <ul>
                    <li>
                        <a href="{{route('logout')}}">Délations</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}">Invités Messe</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{route('logout')}}">Les tuyaux</a>
            </li>

        </ul>
</div>