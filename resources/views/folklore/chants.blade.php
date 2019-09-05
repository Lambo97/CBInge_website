@extends('layouts.app')

@section('title')
<title> CB Ingé - Folklore </title>
@endsection

@section('content')
<div class="row mb-3">
    <div class="col-md-4 col-sm-12">
        <h1 class="mb-3">Folklore - Chants</h1>
    </div>
    @if(Auth::check() and Auth::user()->droit == 1)
    <div class="col-md-8 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/folklore/chants/admin">Admin</a>
    </div>
    @endif
</div>
<p style="text-align:center; background-color:#168E33; padding-top:2px; padding-bottom:2px; margin-bottom:10px"> Le chant ingé </p>
<div>
    C'est nous les étudiants,<br />
    En Ingénieur à Liège,<br />
    La meilleure faculté<br />
    C'est Polytech vous m'entendez,<br />
    La meilleure faculté<br />
    C'est les Sciences-Appliquées<br />
    <br />
    Lors d'mes premières guindailles<br />
    Que j'ai faites dans ma vie<br />
    J'ai appris à chanter, à boire<br />
    Et à ... vous m'entendez<br />
    J'ai appris à chanter, à boire<br />
    Et a baiser.<br />
    <br />
    Chez nous au Val-Benoît<br />
    On fête Saint-Nicolas<br />
    La descente sur la foire<br />
    La Saint-Torê ... vous m'entendez<br />
    Et les Quatres Heures du Val-Benoît<br />
    Ca va de soi.<br />
    <br />
    Vivent les Ingénieurs, ma mère<br />
    Vivent les Ingénieurs<br />
    Ils chauffent les femmes à la vapeur<br />
    Vivent les Ingénieurs.<br />
    <br />
    Et on s'en fout<br />
    Des femmes (ter)<br />
    Et on s'en fout<br />
    Des femmes qui n'ont pas de trou,<br />
    On les aura quand même<br />
    A la foreuse<br />
    Ou au marteau-piqueur,<br />
    C'est la même chose,<br />
    Et on les finira à la ponçeuse,<br />
    Ou à la dynamite,<br />
    C'est plus pratique.
    <br />
</div>
<div class="nav_welcome_action d-flex" style="flex-direction:column; width:100%;">
    <p class="mt-5 font-weight-bold chants_titre"> Chants facultaires </p>
    @foreach ($chants_facultaires as $chant)
        <p class="font-weight-light c_titre" id="chant_titre{{$chant->id}}" data-toggle="collapse" href="#chant{{$chant->id}}" role="button" aria-expanded="false" aria-controls="chant{{$chant->id}}" onclick="display({{$chant->id}})">{{$chant->nom}}</p>
        <div class="chants collapse multi-collapse" id="chant{{$chant->id}}">
            {!!$chant->paroles!!}
            @if($chant->mp3)
            <br/><mp3-reader mp3="/folklore/chant_mp3/{{$chant->id}}"></mp3-reader>
            @endif
        </div>
    @endforeach
    
    <p class="mt-2 font-weight-bold chants_titre"> Chants folkloriques </p>
    @foreach ($chants_folkloriques as $chant)
        <p class="font-weight-light c_titre" id="chant_titre{{$chant->id}}" data-toggle="collapse" href="#chant{{$chant->id}}" role="button" aria-expanded="false" aria-controls="chant{{$chant->id}}" onclick="display({{$chant->id}})">{{$chant->nom}}</p>
        <div class="chants collapse multi-collapse" id="chant{{$chant->id}}">
            {!!$chant->paroles!!}
            @if($chant->mp3)
            <br/><mp3-reader mp3="/folklore/chant_mp3/{{$chant->id}}"></mp3-reader>
            @endif
        </div>
    @endforeach
    <p class="mt-2 font-weight-bold chants_titre"> Chants indispensables </p>
    @foreach ($chants_indispensables as $chant)
        <p class="font-weight-light c_titre" id="chant_titre{{$chant->id}}" data-toggle="collapse" href="#chant{{$chant->id}}" role="button" aria-expanded="false" aria-controls="chant{{$chant->id}}" onclick="display({{$chant->id}})">{{$chant->nom}}</p>
        <div class="chants collapse multi-collapse" id="chant{{$chant->id}}">
            {!!$chant->paroles!!}
            @if($chant->mp3)
            <br/><mp3-reader mp3="/folklore/chant_mp3/{{$chant->id}}"></mp3-reader>
            @endif
        </div>
    @endforeach
</div>


@endsection

@push('scripts')
    <script>
        function display(id){
            var titre = document.getElementById('chant_titre'+id)
            titre.classList.add('chosen');
            titre.setAttribute("onclick", "hide("+id+")");
        };

        function hide(id){
            var titre = document.getElementById('chant_titre'+id)
            titre.classList.remove('chosen');
            titre.setAttribute("onclick", "display("+id+")");
        };
    </script>
@endpush