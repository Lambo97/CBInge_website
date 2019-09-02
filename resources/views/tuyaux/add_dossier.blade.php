@extends('layouts.app')

@section('title')
<title> CB Ingé - Ajouter dossier</title>
@endsection


@section('content')

<div class="row mb-3">
    <div class="col-md-6 col-sm-12">
        <h1>Creer dossier</h1>
    </div>
    <div class="col-md-6 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/tuyaux/dossier/{{$parent->id}}">Retour</a>
    </div>
</div>

<form method="POST" action="/tuyaux/add_dossier/{{$parent->id}}" enctype="multipart/form-data">
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
