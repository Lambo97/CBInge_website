<!-- Footer -->
<footer class="page-footer font-small bg-black">
    @if(Auth::check() and Auth::user()->droit < 8)
    <div class="row text-center mx-0">
        <div class="mx-auto">
            <p class="my-0 pt-3">Bleu en ligne :</p>
            @foreach ($bleusConnectedNow as $user)
                <a class= "blue-link" href="/profile/show/{{$user->id}}" > {{$user->surnom_forum}}</a>,
            @endforeach
        </div>
    </div>
    <div class="row text-center mx-auto center-block">
        <div class="mx-auto">
            <p class="my-0">Bleus connectés aujourd'hui :</p>
            @foreach ($bleusConnectedToday as $user)
                <a class= "blue-link" href="/profile/show/{{$user->id}}" > {{$user->surnom_forum}}</a>,
            @endforeach
        </div>
    </div>
    @endif
    <!-- Copyright -->
    <div class="footer-copyright text-center pt-3 mb-0">
        <p class="font-weight-light m-0">© 2019 Copyright: CB Ingé</p>
        <p class = "font-weight-light m-0">Site réalise par <a class="green-link" href="/profile/show/1382">Maxime Lamborelle</a> et <a class="green-link" href="/profile/show/1468">Mathieu Taquet</a>
        sur base du site de <a class="green-link" href="/profile/show/1">Thomas Dubois</a>
        </p>
        
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
