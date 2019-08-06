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
            <p class="d-inline ml-1">({{$user->surnom_forum}})</p>
            @if($fonctionCourante)
                <p>{{$fonctionCourante->nom}}</p>
            @endif
            <p class="mt-4 mb-0">{{$user->adresse}} - {{$user->code_postal}} {{$user->ville}}</p>
            @if(Auth::check() and Auth::user()->droit < 8)
            <p class="m-0">{{$user->email}}</p>
            <p class="m-0">{{$user->gsm}}</p>
            @endif
            <p class="m-0">{{date('d-m-Y', strtotime($user->date_de_naissance))}}</p>
            
    </div>
</div>
<div class="pl-3">    
    <h6 class=" font-weight-bold mt-3 mb-0">Entrée en ingé</h6>
    <p class="mb-0">{{$user->entree_inge}}</p>
        
    <h6 class="mb-0 mt-2 font-weight-bold">Année de baptême</h6>
    <p class="">{{$user->annee_bapteme}}</p>

    @if($user->autre_etudes != null)
        <h6 class="mb-0 mt-2 font-weight-bold">Autre(s) études</h6>
        <p class="mb-0">{{$user->autre_etudes}}</p>
    @endif

    @if($user->section != null)
        <h6 class="mb-0 mt-2 font-weight-bold">Section</h6>
        <p class="mb-0">{{$user->section}}</p>
    @endif

    @if(empty($fonctionsPrecedantes))
        <h6 class="mb-0 mt-2 font-weight-bold">Fonction(s) au sein des comités précédents</h6>
        @foreach ($fonctionsPrecedantes as $fonction)
            <p class="mb-0">{{$fonction->nom}} en {{$fonction->pivot['annee']}}</p>
        @endforeach
    @endif

    @if($user->parrains()->first())
        <h6 class="mb-0 mt-2 font-weight-bold">Parrain(s)</h6>
        @foreach ($user->parrains as $parrain)
            <p class="mb-0"><a href="/profile/show/{{$parrain->id}}" class="green-link">{{ $parrain->prenom }} {{ $parrain->name }}</a> baptisé en {{ $parrain->annee_bapteme }}</p>
        @endforeach
    @endif

    @if($user->bleus()->first())
        <h6 class="mb-0 mt-2 font-weight-bold">Bleus(s)</h6>
        @foreach ($user->bleus as $bleu)
            <p class="mb-0"><a href="/profile/show/{{$bleu->id}}" class="green-link">{{ $bleu->prenom }} {{ $bleu->name }}</a> en {{$bleu->annee_bapteme}}<p>
        @endforeach
    @endif

    @if($user->citation != null)
        <h6 class="mb-0 mt-2 font-weight-bold">Citation(s) favorite(s)</h6>
        <p class="mb-0">{{$user->citation}}</p>
    @endif

    @if($user->boisson != null)
        <h6 class="mb-0 mt-2 font-weight-bold">Boissons(s) favorite(s)</h6>
        <p class="mb-0">{!!Purifier::clean($user->boisson);!!}</p>
    @endif

    @if($user->guindaille != null)
        <h6 class="mb-0 mt-2 font-weight-bold">Guindaille(s) favorite(s)</h6>
        <p class="mb-0">{!!Purifier::clean($user->guindaille);!!}</p>
    @endif
            
    @if($user->titre_guindaille != null)
        <h6 class="mb-0 mt-2 font-weight-bold">Titre(s) de guindaille</h6>
        <p class="mb-0">{!!Purifier::clean($user->titre_guindaille);!!}</p>
    @endif

    @if($user->probleme_sante != null)
        <h6 class="mb-0 mt-2 font-weight-bold">Problême(s) de santé</h6>
        <p class="mb-0">{{$user->probleme_sante}}</p>
    @endif

    @if($user->description != null)
        <h6 class="mb-0 mt-2 font-weight-bold">Description</h6>
        <p class="mb-0">{{$user->description}}</p>
    @endif
</div>
   
        
    
@endsection