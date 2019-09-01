@extends('layouts.app')

@section('title')
<title> CB Ingé - Ajouter Cours</title>
@endsection


@section('content')

<div class="row mb-3">
    <div class="col-md-4 col-sm-12">
        <h1>Creer Cours</h1>
    </div>
    <div class="col-md-4 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/tuyaux">Retour</a>
    </div>
    <div class="col-md-4 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/tuyaux/edit_cours">Editer un cours existant</a>
    </div>
</div>

<form method="POST" action="/tuyaux/add_cours" enctype="multipart/form-data">
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
        <label for="professeur" class="d-none col-md-4 col-form-label text-md-right">Professeur</label>
                
        <input id="professeur" type="text" class="form-control form-content @error('professeur') is-invalid @enderror" name="professeur" value="{{ old('professeur')}}" required placeholder="Professeur">

        @error('professeur')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
    </div>

    <div class="form-group row">
        <label for="code" class="d-none col-md-4 col-form-label text-md-right">Code</label>
                
        <input id="code" type="text" class="form-control form-content @error('code') is-invalid @enderror" name="code" value="{{ old('code')}}" required placeholder="Code">

        @error('code')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="form-group row">
        <label for="categorie" class="d-none col-md-4 col-form-label text-md-right">Catégorie</label>
                
        <select id="categorie" onchange="display_form()" class="form-control form-content @error('categorie') is-invalid @enderror" name="categorie" value="{{ old('categorie')}}">
            <option disabled selected>Choisir un catégore de cours</option>
            <option value="Cours obligatoire">Cours obligatoire</option>
            <option value="Cours d'option">Cours d'option</option>
            <option value="Cours de master">Cours de master</option>
        </select>

        @error('categorie')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
    </div>

    <div class="form-group row d-none" id='categorie_row'>
        <label for="sous_categorie" class="d-none col-md-4 col-form-label text-md-right">Catégorie</label>
                
        <select id="sous_categorie" class="form-control form-content @error('sous_categorie') is-invalid @enderror" name="sous_categorie" value="{{ old('sous_categorie')}}">
        </select>

        @error('sous_categorie')
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


@push('scripts')
<script>
    var obligatoire = ['Bloc 1', 'Bloc 2', 'Bloc 3'];
    var options_bac = ['Chimie et sciences des matériaux', 'Mécanique', 'Physique', 'Electricité et électronique', 'Informatique', 'Constructions', "Géoressources et géologie de l'environnement", 'Génie biomédical', 'Architecture'];
    var master = ['Ingénieur civil des constructions', 'Ingénieur civil des mines et géologue', 'Ingénieur civil en chimie et sciences des matériaux', 'Ingénieur civil électromécanicien', 'Ingénieur civil en aérospatiale', 'Ingénieur civil électricien', 'Ingénieur civil en informatique', 'Ingénieur civil en sciences des données', 'Ingénieur civil physicien', 'Ingénieur civil mécanicien', 'Ingénieur civil biomédical', 'Ingénieur civil architecte'];
    
    function display_form(){
        var selector = document.getElementById('sous_categorie');
        var categorie = document.getElementById('categorie');

        document.getElementById('categorie_row').classList.remove('d-none');

        var length = selector.options.length;
        for (i = 0; i < length; i++) {
            selector.options[0] = null;
        }

        if(categorie.value == 'Cours obligatoire')
            var options = obligatoire;
        else if(categorie.value == "Cours d'option")
            var options = options_bac;
        else
            var options = master;
        
        for(var option_index in options)
        {
            var new_option = document.createElement("option");
            new_option.text = options[option_index];
            selector.add(new_option);
        }

        var options = null;
    }
</script>
@endpush