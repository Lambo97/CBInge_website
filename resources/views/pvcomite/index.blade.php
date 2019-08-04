@extends('layouts.app')

@section('title')
<title> CB Ingé - PV Comité </title>
@endsection

@section('content')
<div class="row mb-3">
    <div class="col-md-4 col-sm-12">
        <h1>PV Comité</h1>
    </div>
    <div class="col-md-8 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/pvcomite/add">Ajouter un Pv</a>
    </div>
</div>

@foreach($pvs as $pv)
    <div class="well px-3 py-3 my-3 border border-light rounded ">
        <div class="row mb-2">
            <div class="col-md-6 col-sm-12">
                <h3><a class="green-link" href="/pvcomite/show/{{$pv->id}}">{{$pv->titre}}</a></h3>
            </div>
            @if(Auth::user()->id == $pv->id_auteur || Auth::user()->droit < 3)
            <div class="col-md-1 col-xs-2 d-flex justify-content-end">
                <a href="#" class="green-link mr-2"><i class="far fa-trash-alt" data-toggle="modal" data-target="#delete{{$pv->id}}"></i></a>
                <a href="/pvcomite/edit/{{$pv->id}}" class="green-link mr-2"><i class="far fa-edit"></i></a>
            </div>
            @endif
            <div class="col-md-5 col-xs-4 d-flex justify-content-end ">
                <small>Posté le  {{date("d-m-Y H:i:s", strtotime($pv->created_at))}} par {{$pv->auteur->surnom_forum}}</small>
            </div>
        </div>
        <div class="row mh-100">
            <div class="col-12" style='max-height: 100px; overflow: hidden;'>
                {!!Purifier::clean($pv->message);!!}
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="delete{{$pv->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteTitle{{$pv->id}}" aria-hidden="true">
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
                        <a href="/pvcomite/destroy/{{$pv->id}}" class="btn btn-danger">Supprimer</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
<div class="row mt-5 justify-content-center">
    {{$pvs->links()}}
</div>

@endsection