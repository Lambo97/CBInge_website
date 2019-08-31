@extends('bleus.layouts.bleusapp')

@section('title')
<title> CB Ingé - PV Repet Chants </title>
@endsection

@section('content')
<div class="row mb-5">
    <div class="col-md-6 col-sm-12">
        <h1>{{$pv->titre}}</h1>
        <small>Posté le  {{date("d-m-Y H:i:s", strtotime($pv->created_at))}} par {{$pv->auteur->surnom_forum}}</small>
    </div>
    <div class="col-md-6  col-xs-12 d-flex justify-content-end align-items-center">
        @if(Auth::user()->id == $pv->id_auteur || Auth::user()->droit < 3)
            <a href="#" class="blue-link mr-2"><i class="far fa-trash-alt" data-toggle="modal" data-target="#delete"></i></a>
            <a href="/bleus/pvrepetchant/edit/{{$pv->id}}" class="blue-link mr-2"><i class="far fa-edit"></i></a>
        @endif
        <a class="buttons-blue font-weight-bold mr-3" href="/bleus/pvrepetchant/add">Ajouter un Pv</a>
      <!--  <a class="buttons-green font-weight-bold" href="/pvcomite">Retour</a>-->
    </div>

    <!-- Modal -->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="deleteTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLongTitle">Supprimer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-dark">
                    Voulez-vous vraiment supprimer ce post ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                    <a href="/bleus/pvrepetchant/destroy/{{$pv->id}}" class="btn btn-danger">Supprimer</a>
                </div>
            </div>
        </div>
    </div>
    
</div>

<div class="row mh-100">
    <div class="col-12">
    {!!Purifier::clean($pv->message);!!}
    </div>
</div>

<div class="row">
    <div class="col-12 d-flex justify-content-center">
        <a class="buttons-blue font-weight-bold" href="/bleus/pvrepetchant">Retour</a>
    </div>
</div>



@endsection