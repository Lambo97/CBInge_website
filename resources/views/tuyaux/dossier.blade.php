@extends('layouts.app')


@section('title')
<title> CB Ingé - Fichier </title>
@endsection

@section('content')

<div class="row mb-3">
    <div class="col-md-3 col-sm-12">
        @if($dossier->titre == auth()->user()->id)
        <h1>Fichiers</h1>
        @else
        <h1>{{$dossier->titre}}</h1>
        @endif
    </div>
    @if($dossier->parent)
    <div class="col-md-2 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/tuyaux/dossier/{{$dossier->parent->id}}">Retour</a>
    </div>
    @else
    <div class="col-md-2 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/tuyaux">Retour</a>
    </div>
    @endif
    <div class="col-md-3 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/tuyaux/add_dossier/{{$dossier->id}}">Creer dossier</a>
    </div>
    <div class="col-md-4 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/tuyaux/add_fichier/{{$dossier->id}}">Ajouter un fichier</a>
    </div>
</div>

<!-- Dossiers -->
@foreach($dossier->sous_dossiers as $sous_dossier)
    <div class="form-content py-2 d-flex mb-2 mt-2 justify-content-between">
        <div class="col-6">
            <h4 style='display:inline' class="mr-3"><a href="/tuyaux/dossier/{{$sous_dossier->id}}" class="pt-4 green-link"><i class="fas fa-folder-open"></i> {{$sous_dossier->titre}}</a></h4> 
        </div>
        @if($sous_dossier->id_proprietaire == auth()->user()->id or auth()->user()->droit == 1)
        <div class="col-2 col-xs-3 d-flex justify-content-end">
            <div class="green-link mr-2"><i class="far fa-trash-alt" data-toggle="modal" data-target="#deleteDossier{{$sous_dossier->id}}"></i></div>
            <a href="/tuyaux/edit_dossier/{{$sous_dossier->id}}" class="green-link mr-2"><i class="far fa-edit"></i></a>
        </div>        
        @endif
    </div>
    <!-- Modal Post -->
    <!-- Delete message -->
    @if($sous_dossier->id_proprietaire == auth()->user()->id or auth()->user()->droit == 1)
    <div class="modal fade" id="deleteDossier{{$sous_dossier->id}}" tabindex="-1" role="dialog" aria-labelledby="#deleteDossier{{$sous_dossier->id}}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLongTitle">Supprimer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-dark">
                    Voulez-vous vraiment supprimer ce dossier ainsi que tous les fichiers qu'il contient?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                    <a href="/tuyaux/destroy_dossier/{{$sous_dossier->id}}" class="btn btn-danger">Supprimer</a>
                </div>
            </div>
        </div>
    </div>
    @endif
@endforeach

<!-- Fichiers -->
@foreach($dossier->fichiers as $fichier)
    <div class="form-content py-2 d-flex mb-2 mt-2 justify-content-between">
        <div class="col-5">
            <h4 style='display:inline' class="mr-3"><a href="/tuyaux/fichier/{{$fichier->id}}" class="pt-4 green-link"><i class="fas fa-file-invoice"></i> {{$fichier->titre}}</a></h4><br/>
            @if($fichier->commentaire)<p class="mt-1 ml-2">{{$fichier->commentaire}}</p> @endif
        </div>
        <div class="col-5 col-xs-6 d-flex justify-content-end">
            <small>Posté par <a class="green-link" href="/profile/show/{{$fichier->auteur->id}}">{{$fichier->auteur->surnom_forum}}</a> le : {{date("d-m-Y", strtotime($fichier->created_at))}}</small>
        </div>   
        @if($fichier->id_proprietaire == auth()->user()->id or auth()->user()->droit == 1)
        <div class="col-2 col-xs-3 d-flex justify-content-end">
            <div class="green-link mr-2"><i class="far fa-trash-alt" data-toggle="modal" data-target="#deleteFichier{{$fichier->id}}"></i></div>
            <a href="/tuyaux/edit_fichier/{{$fichier->id}}" class="green-link mr-2"><i class="far fa-edit"></i></a>
        </div>     
        @endif   
    </div>
    <!-- Modal Post -->
    <!-- Delete message -->
    @if($fichier->id_proprietaire == auth()->user()->id or auth()->user()->droit == 1)
    <div class="modal fade" id="deleteFichier{{$fichier->id}}" tabindex="-1" role="dialog" aria-labelledby="#deleteFichier{{$fichier->id}}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLongTitle">Supprimer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-dark">
                    Voulez-vous vraiment supprimer ce fichier?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                    <a href="/tuyaux/destroy_fichier/{{$fichier->id}}" class="btn btn-danger">Supprimer</a>
                </div>
            </div>
        </div>
    </div>
    @endif
@endforeach

@endsection