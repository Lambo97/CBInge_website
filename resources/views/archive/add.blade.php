@extends('layouts.app')

@section('title')
<title> CB Ingé - Ajouter une archive</title>
@endsection


@section('content')

<div class="row mb-3">
    <div class="col-md-6 col-sm-12">
        <h1>Ajouter une archive</h1>
    </div>
</div>

<form method="POST" action="/archives/add" enctype="multipart/form-data">
    @csrf

    <div class="form-group row">
        <label for="categorie" class="d-none col-md-4 col-form-label text-md-right">categorie</label>
                
        <select id="categorie" type="text" class="form-control form-content @error('categorie') is-invalid @enderror" name="categorie" value="{{ old('categorie')}}">
        @foreach($categories as $categorie)
            <option value="{{ $categorie }}">{{$categorie}}</option>
        @endforeach
        </select>

        @error('categorie')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
    </div>

    <div class="form-group row">
        <label for="annee" class="d-none col-md-4 col-form-label text-md-right">Année</label>
                
        <select id="annee" type="text" class="form-control form-content @error('annee') is-invalid @enderror" name="annee" value="{{ old('annee')}}">
        @foreach($annees as $annee)
            <option value="{{ $annee }}">{{$annee}}</option>
        @endforeach
        </select>

        @error('annee')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
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

    <div class="form-group row">
        <label for="commentaire" class="d-none col-md-4 col-form-label text-md-right">Commentaire</label>

        <textarea id="commentaire" rows="5" class="form-control form-content @error('commentaire') is-invalid @enderror" name="commentaire" placeholder ="Commentaire (optionel) " autocomplete="commentaire">{{ old('commentaire')}}</textarea>
        @error('commentaire')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
    </div>

    <div class="d-flex flex-row-reverse mb-2">
        
        <button type="submit" class="buttons-green font-weight-bold">
            Enregistrer
        </button>
    </div>
</form>
         
@endsection
