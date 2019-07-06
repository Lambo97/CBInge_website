<!-- Footer -->
<footer class="page-footer font-small">

    <div class="row text-center">
        <div class="mx-auto">
            <p class="my-0">Utilisateurs en ligne :</p>
            @foreach ($connectedNow as $user)
                <a href="/profile/show/{{$user->id}}" > {{$user->surnom_forum}}</a>,
            @endforeach
        </div>
    </div>
    <div class="row text-center mx-auto center-block">
        <div class="mx-auto">
            <p class="my-0">Utilisateurs connectés aujourd'hui :</p>
            @foreach ($connectedToday as $user)
                <a href="/profile/show/{{$user->id}}" > {{$user->surnom_forum}}</a>,
            @endforeach
        </div>
    </div>
    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright: CB Ingé
    </div>
    <!-- Copyright -->

</footer>
<!-- Footer -->