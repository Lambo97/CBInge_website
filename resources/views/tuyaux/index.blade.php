@extends('layouts.app')

@section('title')
<title> CB Ingé - Tuyaux </title>
@endsection

@section('content')
<div class="row mb-3">
    <div class="col-md-4 col-sm-12">
        <h1 class="mb-3">Tuyaux</h1>
    </div>
    <div class="col-md-8 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/tuyaux/add_cours">Ajouter un cours</a>
    </div>
</div>

<div class="nav_welcome_action d-flex" style="flex-direction:column; width:100%;">
    @foreach($categories as $categorie => $sous_categories)
    <p class="mt-5 font-weight-bold chants_titre"> {{$categorie}}</p>
    @foreach($sous_categories as $index=>$sous_categorie)
    <p class="font-weight-light c_titre" id="titre{{strtolower(str_replace(' ','',$categorie))}}{{$index}}" data-toggle="collapse" href="#{{strtolower(str_replace(' ','',$categorie))}}{{$index}}" role="button" aria-expanded="false" aria-controls="{{strtolower(str_replace(' ','',$categorie))}}{{$index}}" onclick="display('titre{{strtolower(str_replace(' ','',$categorie))}}{{$index}}')">{{$sous_categorie}}</p>
    <div class="chants collapse multi-collapse" id="{{strtolower(str_replace(' ','',$categorie))}}{{$index}}">
        <ul>
        @foreach($cours as $cour)
        @if($cour->categorie == $categorie and $cour->sous_categorie == $sous_categorie)
        <li><a href="/tuyaux/dossier/{{$cour->id_dossier}}" class="green-link"><i>{{$cour->code}}</i> : {{$cour->titre}} ({{$cour->professeur}}) </a></li>
        @endif
        @endforeach
        </ul>
    </div>
    @endforeach
    @endforeach
</div>
@endsection

@push('scripts')
    <script>
        function display(id){
            var titre = document.getElementById(id)
            titre.classList.add('chosen');
            titre.setAttribute("onclick", "hide('"+id+"')");
        };

        function hide(id){
            var titre = document.getElementById(id)
            titre.classList.remove('chosen');
            titre.setAttribute("onclick", "display('"+id+"')");
        };
    </script>
@endpush