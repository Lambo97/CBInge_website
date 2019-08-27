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
    <div class="footer-copyright text-center py-3">© 2019 Copyright: CB Ingé
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->
