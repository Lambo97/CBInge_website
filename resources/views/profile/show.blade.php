@extends('layouts.app')

@section('content')
    
        <div class="d-flex">
            <div class="col-3">
                <img src="/profile/image/{{$user->annee_bapteme}}/{{$user->photo}}" class="w-100">
            </div>
            <div class="col-9">

               <h5 class="d-inline"><strong>{{$user->name}} {{$user->prenom}}</strong></h5>
                   <p class="d-inline ml-1">({{$user->surnom_forum}})</p>
            </div>
        </div>
   
        <a href="/profile/edit/{{$user->id}}" class="green-link">Modifier</a>
    
@endsection