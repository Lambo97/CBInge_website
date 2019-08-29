@extends('layouts.app')

@section('title')
<title> CB Ingé - Nouvelle fonction </title>
@endsection

@section('content')
<div class="row mb-4">
    <div class="col-md-6 col-sm-12">
        <h1 class="mb-3">Nouvelle fonction</h1>
    </div>
    @if(Auth::check() and Auth::user()->droit == 1)
    <div class="col-md-6 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/admin/repertoire">Retour</a>
    </div>
    @endif
</div>

<form method="POST" action="/admin/repertoire/nouvelleFonction" enctype="multipart/form-data">
    @csrf   

    <div class="form-group row">
        <label for="description" class="col-2 mr-2 col-form-label text-md-right">Baptisé</label>
        <select type='text' class='newComite col-9 form-control form-content'name='user'>
            <option></option>
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->prenom}} {{$user->name}} @if($user->surnom) ({{$user->surnom}}) @endif</option>
            @endforeach
        </select>
    </div>

    <div class="form-group row">
        <label for="description" class="col-2 mr-2 col-form-label text-md-right">Fonction</label>
        <select type='text' class='newComite col-9 form-control form-content'name='fonction'>
            <option></option>
            @foreach ($fonctions as $fonction)
                <option value="{{$fonction->id}}">{{$fonction->nom}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group row">
        <label for="description" class="col-2 mr-2 col-form-label text-md-right">Année</label>
        <select type='text' class='newComite col-9 form-control form-content'name='annee'>
            <option></option>
            @for($year = year(); $year > 1994; $year--)
                <option>{{$year}}</option>
            @endfor
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
<script type="text/javascript">
    $(document).ready(function($){
        $(".newComite").select2({
            placeholder: "Selectionner une option",
        });
    });
</script>
@endpush