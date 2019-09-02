@extends('layouts.app')

@section('title')
<title> CB Ingé - Editer cours</title>
@endsection


@section('content')

<div class="row mb-3">
    <div class="col-md-6 col-sm-12">
        <h1>Editer cours</h1>
    </div>
</div>

<form name="form" method="POST" action="" enctype="multipart/form-data">
    @csrf

    <div class="form-group row">
        <label for="titre" class="d-none col-md-4 col-form-label text-md-right">Titre</label>
                
        <select id="titre" onchange="display_form()" class="form-control form-content @error('titre') is-invalid @enderror" name="titre" value="{{ old('titre')}}">
            <option disabled selected>Sélectionner un cours</option>
            @foreach ($categories as $categorie => $sous_categories)
                <optgroup label="{{$categorie}}">
                @foreach($sous_categories as $sous_categorie)
                <optgroup label="{{$sous_categorie}}">
                    @foreach ($cours as $cour)
                        @if($cour->categorie == $categorie and $cour->sous_categorie == $sous_categorie)
                        <option value="{{$cour->id}}"><i>{{$cour->code}}</i> : {{$cour->titre}} ({{$cour->professeur}})</option>
                        @endif
                    @endforeach
                @endforeach
            @endforeach
        </select>

        @error('titre')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
    </div>

    <div class="form-group row d-none">
        <label for="categorie" class="d-none col-md-4 col-form-label text-md-right">Catégorie</label>
                
        <select id="categorie" onchange="display_sous_categorie()" class="form-control form-content @error('categorie') is-invalid @enderror" name="categorie" value="{{ old('categorie')}}">
            <option disabled selected>Choisir un catégore de cours</option>
            <option value="Cours obligatoire">Cours obligatoire</option>
            <option value="Cours à option">Cours à option</option>
            <option value="Cours de master">Cours de master</option>
        </select>

        @error('categorie')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
    </div>

    <div class="form-group row d-none">
        <label for="sous_categorie" class="d-none col-md-4 col-form-label text-md-right">Sous-Catégorie</label>
                
        <select id="sous_categorie" class="form-control form-content @error('sous_categorie') is-invalid @enderror" name="sous_categorie" value="{{ old('sous_categorie')}}">
        </select>

        @error('sous_categorie')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
    </div>

    <div class="form-group row d-none">
        <label for="professeur" class="d-none col-md-4 col-form-label text-md-right">Professeur</label>
                
        <input id="professeur" type="text" class="form-control form-content @error('professeur') is-invalid @enderror" name="professeur" value="test" required placeholder="Professeur">

        @error('professeur')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        
    </div>

    <div class="form-group row d-none">
        <label for="code" class="d-none col-md-4 col-form-label text-md-right">Code</label>
                
        <input id="code" type="text" class="form-control form-content @error('code') is-invalid @enderror" name="code" value="{{ old('code')}}" required placeholder="Code">

        @error('code')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="d-flex flex-row-reverse mb-2">
        
        <button type="submit" id="submit" class=" d-none buttons-green font-weight-bold">
            Enregistrer
        </button>
        <button type="reset" id="reset" class=" d-none buttons-green buttons-green-dark font-weight-bold mr-2">
            Reset
        </button>
        
    </div>
</form>
         
@endsection

@push('scripts')
<script>
    function display_form(){
        var id = document.getElementById('titre').value;
        var cours = null;
        axios.get('/tuyaux/cours/'+id).then(function(response){
            cours = response.data;

            var categorie = document.getElementById('categorie');
            $('#categorie').val(cours.categorie).change();
            categorie.parentNode.classList.remove("d-none");

            var sous_categorie = document.getElementById('sous_categorie');
            $('#sous_categorie').val(cours.sous_categorie).change();
            sous_categorie.parentNode.classList.remove("d-none");

            var professeur = document.getElementById('professeur');
            professeur.value = cours.professeur;
            professeur.parentNode.classList.remove("d-none");
            
            var code = document.getElementById('code');
            code.value = cours.code;
            code.parentNode.classList.remove("d-none");

            document.getElementById('submit').classList.remove('d-none');
            document.getElementById('reset').classList.remove('d-none');
        });
        document.form.action = "/tuyaux/update_cours/"+id;
    }
</script> 
<script>
    var obligatoire = ['Bloc 1', 'Bloc 2', 'Bloc 3'];
    var options_bac = ['Chimie et sciences des matériaux', 'Mécanique', 'Physique', 'Electricité et électronique', 'Informatique', 'Constructions', "Géoressources et géologie de l'environnement", 'Génie biomédical', 'Architecture'];
    var master = ['Ingénieur civil des constructions', 'Ingénieur civil des mines et géologue', 'Ingénieur civil en chimie et sciences des matériaux', 'Ingénieur civil électromécanicien', 'Ingénieur civil en aérospatiale', 'Ingénieur civil électricien', 'Ingénieur civil en informatique', 'Ingénieur civil en sciences des données', 'Ingénieur civil physicien', 'Ingénieur civil mécanicien', 'Ingénieur civil biomédical', 'Ingénieur civil architecte'];
    
    function display_sous_categorie(){
        var selector = document.getElementById('sous_categorie');
        var categorie = document.getElementById('categorie');

        var length = selector.options.length;
        for (i = 0; i < length; i++) {
            selector.options[0] = null;
        }

        if(categorie.value == 'Cours obligatoire')
            var options = obligatoire;
        else if(categorie.value == "Cours à option")
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