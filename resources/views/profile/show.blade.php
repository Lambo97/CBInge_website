@extends('layouts.app')

@section('title')
<title> CB Ingé - {{$user->prenom}} {{$user->name}}</title>
@endsection

@section('content')

<div class="d-sm-flex">
    <div class="col-sm-3">
        <img src="/profile/{{$user->id}}/image" class="w-100 img-big">
        @if(Auth::check() and (Auth::user()->id == $user->id or Auth::user()->droit == 1))
        <a href="/profile/edit/{{$user->id}}" class="green-link w-100 d-block mb-xs-only">Modifier ma fiche</a>
        @endif
    </div>
    <div class=" col-sm-9">

        <h4 class="d-inline"><strong>{{$user->prenom}} {{$user->name}}</strong></h4>
            @if($user->surnom)
            <p class="d-inline ml-1">({{$user->surnom}})</p>
            @endif
            @if($fonctionCourante)
                <p class="font-weight-light">{{$fonctionCourante->nom}}</p>
            @endif
            @if(Auth::check() and Auth::user()->droit < 8)
              <p class="mt-4 mb-0  font-weight-light">{{$user->adresse}} - {{$user->code_postal}} {{$user->ville}}</p>
              <p class="m-0 font-weight-light">{{$user->email}}</p>
              <p class="m-0 font-weight-light"><a class="green-link" href="tel:{{$user->gsm}}" >{{$user->gsm}}</a></p>
            @endif
            <p class="m-0 font-weight-light">{{date('d-m-Y', strtotime($user->date_de_naissance))}}</p>

    </div>
</div>
<div class="pl-3">
    <h6 class=" font-weight-bold mt-3 mb-0">Entrée en ingé</h6>
    <p class="mb-0 font-weight-light">{{$user->entree_inge}}</p>

    <h6 class="mb-0 mt-2 font-weight-bold">Année de baptême</h6>
    <p class=" font-weight-light">{{$user->annee_bapteme}}</p>

    @if($user->autre_etudes != null)
        <h6 class="mb-0 mt-2 font-weight-bold">Autre(s) études</h6>
        <p class="mb-0 font-weight-light">{{$user->autre_etudes}}</p>
    @endif

    @if($user->section != null)
        <h6 class="mb-0 mt-2 font-weight-bold">Section</h6>
        <p class="mb-0 font-weight-light">{{$user->section}}</p>
    @endif

    @if($user->fonctions()->count() > 1)
        <h6 class="mb-0 mt-2 font-weight-bold">Fonction(s) au sein des comités précédents</h6>
        @foreach ($fonctionsPrecedantes as $fonction)
            <p class="mb-0 font-weight-light">{{$fonction->nom}} en {{$fonction->pivot['annee']}}</p>
        @endforeach
    @endif

    @if($user->parrains()->first())
        <h6 class="mb-0 mt-2 font-weight-bold">Parrain(s)</h6>
        @foreach ($user->parrains as $parrain)
            <p class="mb-0 font-weight-light"><a href="/profile/show/{{$parrain->id}}" class="green-link">{{ $parrain->prenom }} {{ $parrain->name }}</a> baptisé en {{ $parrain->annee_bapteme }}</p>
        @endforeach
    @endif

    @if($user->bleus()->first())
        <h6 class="mb-0 mt-2 font-weight-bold">Bleus(s)</h6>
        @foreach ($user->bleus as $bleu)
            <p class="mb-0 font-weight-light"><a href="/profile/show/{{$bleu->id}}" class="green-link">{{ $bleu->prenom }} {{ $bleu->name }}</a> en {{$bleu->annee_bapteme}}</p>
        @endforeach
    @endif

    @if($user->citation != null)
        <h6 class="mb-0 mt-2 font-weight-bold">Citation(s) favorite(s)</h6>
        <p class="mb-0 font-weight-light">{{$user->citation}}</p>
    @endif

    @if($user->boisson != null)
        <h6 class="mb-0 mt-2 font-weight-bold">Boissons(s) favorite(s)</h6>
        <p class="mb-0 font-weight-light">{!!Purifier::clean($user->boisson);!!}</p>
    @endif

    @if($user->guindaille != null)
        <h6 class="mb-0 mt-2 font-weight-bold">Guindaille(s) favorite(s)</h6>
        <p class="mb-0 font-weight-light">{!!Purifier::clean($user->guindaille);!!}</p>
    @endif

    @if($user->titre_guindaille != null)
        <h6 class="mb-0 mt-2 font-weight-bold">Titre(s) de guindaille</h6>
        <p class="mb-0 font-weight-light">{!!Purifier::clean($user->titre_guindaille);!!}</p>
    @endif

    @if(Auth::check() and Auth::user()->droit < 8 and $user->probleme_sante != null)
        <h6 class="mb-0 mt-2 font-weight-bold">Problême(s) de santé</h6>
        <p class="mb-0 font-weight-light">{{$user->probleme_sante}}</p>
    @endif

    @if($user->description != null)
        <h6 class="mb-0 mt-2 font-weight-bold">Description</h6>
        <p class="mb-0 font-weight-light">{{$user->description}}</p>
    @endif
</div>

<div class="row my-4">
    @if(Auth::check() and Auth::user()->droit == 1)
    <div class="col-md-12 d-flex justify-content-center align-items-center">
        <a class="buttons-green font-weight-bold" href="/profile/destroy/{{$user->id}}">Supprimer l'utilisateur</a>
    </div>
    @endif
</div>



@endsection
