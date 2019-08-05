@extends('layouts.app')

@section('content')
    
        <div class="d-sm-flex">
            <div class="col-sm-3">
                <img src="/profile/image/{{$user->annee_bapteme}}/{{$user->photo}}" class="w-100 img-big">
                <a href="/profile/edit/{{$user->id}}" class="green-link w-100 d-block mb-xs-only">Modifier ma fiche</a>
            </div>
            <div class=" col-sm-9">

               <h4 class="d-inline"><strong>{{$user->name}} {{$user->prenom}}</strong></h4>
                   <p class="d-inline ml-1">({{$user->surnom_forum}})</p>
                   <p>Gros togé sans fonction</p>
                   <p class="mt-4 mb-0">{{$user->adresse}}-{{$user->code_postal}} {{$user->ville}}</p>
                   <p class="m-0">{{$user->email}}</p>
                   <p class="m-0">{{$user->gsm}}</p>
                   <p class="m-0">{{$user->date_de_naissance}}</p>
                   
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
                 <h6 class="mb-0 mt-2 font-weight-bold">Section</h6>
                 <p class="mb-0">{{$user->section}}</p>
                 <h6 class="mb-0 mt-2 font-weight-bold">Fonction(s) au sein des comités précédents</h6>
                 <p class="mb-0">Assistant en 2017</p>
                 <h6 class="mb-0 mt-2 font-weight-bold">Parrain(s)</h6>
                 @forelse (auth()->user()->parrains()->get() as $parrain)
                        <p class="mb-0">{{ $parrain->prenom }} {{ $parrain->name }}
                            baptisé en {{ $parrain->annee_bapteme }}</p>
                            
                    @empty
                        <p class="mb-0">Pas encore de parrains<p>
                 @endforelse
                 <h6 class="mb-0 mt-2 font-weight-bold">Bleus(s)</h6>
                 @forelse (auth()->user()->bleus()->get() as $bleu)
                        <p class="mb-0">
                           {{ $bleu->prenom }}{{ $bleu->name }} en {{$bleu->annee_bapteme}}<p>
                    @empty
                        <p class="mb-0">Pas encore de bleus<p>
                    @endforelse
                    @if($user->citation != null)
                    <h6 class="mb-0 mt-2 font-weight-bold">Citation(s) favorite(s)</h6>
                    <p class="mb-0">{{$user->citation}}</p>
                    @endif
                    @if($user->boisson != null)
                    <h6 class="mb-0 mt-2 font-weight-bold">Boissons(s) favorite(s)</h6>
                    <p class="mb-0">{{$user->boisson}}</p>
                    @endif
                    @if($user->guindaille != null)
                    <h6 class="mb-0 mt-2 font-weight-bold">Guindaille(s) favorite(s)</h6>
                    <p class="mb-0">{{$user->guindaille}}</p>
                    @endif
                    @if($user->titre_guindaille != null)
                    <h6 class="mb-0 mt-2 font-weight-bold">Titre(s) de guindaille</h6>
                    <p class="mb-0">{{$user->titre_guindaille}}</p>
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