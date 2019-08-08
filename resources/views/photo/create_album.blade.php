@extends('layouts.app')

@section('title')
<title> CB Ingé - Creer un album</title>
@endsection


@section('content')

<div class="row mb-3">
    <div class="col-md-6 col-sm-12">
        <h1>Creer un album</h1>
    </div>
    <div class="col-md-6 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/photos/add_photos/0">Ajouter des photos</a>
    </div>
</div>

<form method="POST" action="/photos/create_album" enctype="multipart/form-data">
    @csrf

    <div class="form-group row">
        <label for="nom" class="d-none col-md-4 col-form-label text-md-right">Nom</label>

        <input id="nom" type="text" class="form-control form-content @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom')}}" required placeholder="Nom">
        
        @error('nom')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
    </div>

    <div class="form-group row">
        <label for="annee" class="d-none col-md-4 col-form-label text-md-right">Annee</label>
                
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
        <label for="cover" class="d-none col-md-4 col-form-label text-md-right">Couverture de l'album</label>
        <p class=" col-form-label mt-n2">Couverture de l'album : </p>
        <p>
        <input type="file" class=" col-9 form-control-file form-content" id="cover" name="cover"placeholder="Nouvelle image">
        </p>
        @error('cover')
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
