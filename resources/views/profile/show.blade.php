@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-6">
        Nom : {{$user->name}}
    </div>
    <div class="col-6">
        Prénom : {{$user->prenom}}
    </div>
    <a href="/profile/edit/{{$user->id}}" class="btn btn-default">Modifier</a>
</div>
@endsection