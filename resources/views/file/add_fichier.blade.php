@extends('layouts.app')

@section('title')
<title> CB Ingé - Ajouter Fichier</title>
@endsection


@section('content')

<div class="row mb-3">
    <div class="col-md-6 col-sm-12">
        <h1>Ajouter fichier</h1>
    </div>
    <div class="col-md-6 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/file/dossier/{{$parent->id}}">Retour</a>
    </div>
</div>

<form method="POST" action="/file/add_fichier/{{$parent->id}}" enctype="multipart/form-data">
    @csrf

    <div class="form-group row">
        <label for="titre" class="d-none col-md-4 col-form-label text-md-right">Titre</label>
                
        <input id="titre" type="text" class="form-control form-content @error('titre') is-invalid @enderror" name="titre" value="{{ old('titre')}}" required placeholder="Titre">

        @error('titre')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
    </div>

    <div class="form-group row">
        <label for="commentaire" class="d-none col-md-4 col-form-label text-md-right">Commentaire</label>
                
        <textarea id="commentaire" type="text" class="form-control form-content @error('commentaire') is-invalid @enderror" name="commentaire" value="{{ old('commentaire')}}" placeholder="Commentaires"></textarea>

        @error('commentaire')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
    </div>

    <div class="form-group row">
        <div class="form-group row">
            <label for="public" class="d-none col-md-4 col-form-label text-md-right">Public</label>
    
            <p style="margin-bottom: -5px;"><label for="public" class="mr-2">Public (accessible par un autre baptisé possédant le lien) :</label> <input id="public" type="checkbox" name="public" value="1"></p>
    
        </div>
    </div>

    <div>
        <label for="file" class="d-none col-md-4 col-form-label text-md-right">Fichier</label>
        <p class=" col-form-label mt-n2">Fichier : </p>
        <p>
        <input type="file" class=" col-9 form-control-file form-content" id="file" name="file"placeholder="Nouvelle image">
        </p>
        @error('file')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
    </div>

    <div class="d-flex flex-row-reverse mb-2">
        
        <button type="submit" class="buttons-green font-weight-bold">
            Enregistrer
        </button>
        <button type="reset" class="buttons-green buttons-green-dark font-weight-bold mr-2">
            Reset
        </button>
        
    </div>
</form>
         
@endsection