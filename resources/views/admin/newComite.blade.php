@extends('layouts.app')

@section('title')
<title> CB Ingé - Nouveau comité </title>
@endsection

@section('content')
<div class="row mb-4">
    <div class="col-md-6 col-sm-12">
        <h1 class="mb-3">Nouveau Comité</h1>
    </div>
    @if(Auth::check() and Auth::user()->droit == 1)
    <div class="col-md-6 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/admin/repertoire">Retour</a>
    </div>
    @endif
</div>

<form method="POST" action="/admin/repertoire/nouveauComite" enctype="multipart/form-data">
    @csrf   

    <div class="form-group row">
        <label for="description" class="col-2 mr-2 col-form-label text-md-right">Président*</label>
        <select type='text' class='newComite col-9 form-control form-content'name='president'>
            <option></option>
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->prenom}} {{$user->name}} @if($user->surnom) ({{$user->surnom}}) @endif</option>
            @endforeach
        </select>
    </div>

    <div class="form-group row">
        <label for="description" class="col-2 mr-2 col-form-label text-md-right">Vide-Président</label>
        <select type='text' class='newComite col-9 form-control form-content'name='vp'>
            <option></option>
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->prenom}} {{$user->name}} @if($user->surnom) ({{$user->surnom}}) @endif</option>
            @endforeach
        </select>
    </div>

    <div class="form-group row">
        <label for="description" class="col-2 mr-2 col-form-label text-md-right">Présidente</label>
        <select type='text' class='newComite col-9 form-control form-content'name='presidente'>
            <option></option>
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->prenom}} {{$user->name}} @if($user->surnom) ({{$user->surnom}}) @endif</option>
            @endforeach
        </select>
    </div>
    
    <div class="form-group row">
        <label for="description" class="col-2 mr-2 col-form-label text-md-right">Trésorier*</label>
        <select type='text' class='newComite col-9 form-control form-content'name='tresorier'>
            <option></option>
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->prenom}} {{$user->name}} @if($user->surnom) ({{$user->surnom}}) @endif</option>
            @endforeach
        </select>
    </div>

    <div class="form-group row">
        <label for="description" class="col-2 mr-2 col-form-label text-md-right">Secrétaire*</label>
        <select type='text' class='newComite col-9 form-control form-content'name='secretaire'>
            <option></option>
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->prenom}} {{$user->name}} @if($user->surnom) ({{$user->surnom}}) @endif</option>
            @endforeach
        </select>
    </div>

    <div class="form-group row">
        <label for="description" class="col-2 mr-2 col-form-label text-md-right">Togé sans fonction*</label>
        <select type='text' class='newComite col-9 form-control form-content' name='toge[]' multiple>
            <option></option>
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->prenom}} {{$user->name}} @if($user->surnom) ({{$user->surnom}}) @endif</option>
            @endforeach
        </select>
    </div>

    <div class="form-group row">
        <label for="description" class="col-2 mr-2 col-form-label text-md-right">Assistants*</label>
        <select class="newComite col-9 form-control form-content" name="assistants[]" multiple>
            <option></option>
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->prenom}} {{$user->name}} @if($user->surnom) ({{$user->surnom}}) @endif</option>
            @endforeach
        </select>
    </div>

    <div class="form-group row">
        <label for="description" class="col-2 mr-2 col-form-label text-md-right">Webmaster</label>
        <select type='text' class='newComite col-9 form-control form-content'name='webmaster'>
            <option></option>
            @foreach ($users as $user)
                <option value="{{$user->id}}">{{$user->prenom}} {{$user->name}} @if($user->surnom) ({{$user->surnom}}) @endif</option>
            @endforeach
        </select>
    </div>

    <div class="form-group row">
        <p>* : champs obligatoires</p>
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
            placeholder: "Selectionner un baptisé",
        });
    });
</script>
@endpush