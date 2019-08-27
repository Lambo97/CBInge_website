@extends('layouts.app')

@section('title')
<title> CB Ingé - Ajouter menu</title>
@endsection


@section('content')

<div class="row mb-3">
    <div class="col-md-6 col-sm-12">
        <h1>Ajouter un menu</h1>
    </div>
    <div class="col-md-6 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/admin/menus">Retour</a>
    </div>
</div>

<form method="POST" action="/admin/menus/addMenu" enctype="multipart/form-data">
    @csrf

    <div class="form-group row">
        <label for="type" class="d-none col-md-4 col-form-label text-md-right">Type</label>
                
        <select id="type" type="text" class="form-control form-content" name="type" onchange="displayMenu()">
            <option selected value="menu">Menu</option>
            <option value="sousMenu">Sous-Menu</option>
        </select>
        
    </div>

    <div id="menu_correspondant" class="form-group row d-none">
        <label for="menu" class="d-none col-md-4 col-form-label text-md-right">Menu</label>
                
        <select id="menu" type="text" class="form-control form-content" name="menu">
            <option value="0" disabled selected>Menu correspondant</option>
            @foreach ($menus as $menu)
            <option value="{{$menu->id}}">{{$menu->nom}}</option>
            @endforeach
        </select>

    </div>

    <div class="form-group row">
        <label for="nom" class="d-none col-md-4 col-form-label text-md-right">Nom</label>

        <input id="nom" type="text" class="form-control form-content" name="nom" required placeholder="Nom">
        
    </div>

    <div class="form-group row">
        <label for="lien" class="d-none col-md-4 col-form-label text-md-right">Lien</label>

        <input id="lien" type="text" class="form-control form-content" name="lien" placeholder="Lien">
        
    </div>

    <div class="form-group row">
        <label for="droit" class="d-none col-md-4 col-form-label text-md-right">Droit</label>
                
        <select id="droit" type="text" class="form-control form-content" name="droit">
            <option selected disabled value="10">Droit utilisateur</option>
            @foreach ($droits as $value => $droit)
            <option value="{{$value}}">{{$droit}}</option>
            @endforeach
        </select>

    </div>

    <div class="form-group row">
        <label for="afficher" class="d-none col-md-4 col-form-label text-md-right">Afficher</label>
                
        <select id="afficher" type="text" class="form-control form-content" name="afficher">
            <option value="1">Actif</option>
            <option value="0">Désactivé</option>
        </select>

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
    function displayMenu()
    {
        var t = document.getElementById('type');
        var menu = document.getElementById('menu_correspondant');
        if(t.value == "menu")
            menu.classList.add("d-none");
        else if(t.value == "sousMenu")
            menu.classList.remove("d-none");
    }
</script>
@endpush