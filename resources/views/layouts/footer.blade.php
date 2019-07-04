<!-- Footer -->
<footer class="page-footer font-small">

    <div class="row text-center">
        <div class="col-10">
            Utilisateur en ligne : <br>
            @foreach ($connectedNow as $user)
                <a href="/profile/show/{{$user->id}}" > {{$user->surnom_forum}}</a>,
            @endforeach
        </div>
    </div>
    <div class="row text-center">
        <div class="col-10">
            Utilisateur connecté aujourd'hui : <br>
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