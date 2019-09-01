@extends('layouts.app')


@section('title')
<title> CB Ingé - Vestes </title>
@endsection

@section('content')

<h1 class="mb-3">Vestes</h1>

<div class="row">
    <div class="col-12  form-content mb-5">
      <p class="font-weight-bold mt-3 mb-3">Choisir sa veste</p>  
    <form method="POST" action="/vestes/add" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
        
            <label for="taille" class="col-2 col-form-label text-md-right"><img class="mx-auto d-block img-fluid rounded-circle img-small" src="/profile/{{Auth::user()->id}}/image" alt="{{Auth::user()->surnom_forum}}"></label>
            
            <div class="textarea w-75 m-auto">
                <select class ="w-100" name="taille" id="">
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                    
                </select>
                <!--
                <textarea id="message" rows="5" class="d-block  mb-3 w-100 bg-grey p-2" name="message" autocomplete="message" placeholder="Ecris ton message"></textarea>
                -->
                 
            
        
                
                
            </div>
        </div>
        <div class="form-group row">
            <div class="mb-5 m-auto offset-2">
                <button type="submit" class="buttons-green font-weight-bold">
                    Envoyer
                </button>
            </div>
        </div>
    </form>
    </div>
</div>
<p class="font-weight-bold">Listing des vestes</p>
@foreach($veste as $post)



    
        
            
            
                <div class="form-content py-2 d-flex mb-2 mt-2 justify-content-between">
                    <div class="col-6">
                        <h4 style='display:inline' class="mr-3"><a href="/profile/show/{{$post->auteur->id}}" class="pt-4 green-link">{{$post->auteur->surnom_forum}}</a></h4> 
                        <p class="m-0"><strong class="font-weight-bold">Taille: <span id="score">{{$post->taille}}</span></strong></p>
                    </div>
                    @if(Auth::user()->id == $post->id || Auth::user()->droit < 3)
                    <div class="col-2 col-xs-3 d-flex justify-content-end">
                        <div class="green-link mr-2"><i class="far fa-trash-alt" data-toggle="modal" data-target="#deletePost{{$post->id}}"></i></div>
                        <a href="/vestes/edit/{{$post->id}}" class="green-link mr-2"><i class="far fa-edit"></i></a>
            
                    </div>
                    @endif
                    
                </div>
                <div class="row mb-2">
                    <div class="col-12 ">
                        {!!Purifier::clean($post->message);!!}
                    </div>
                </div>
        
                
                
               
                
            

        
    
    <!-- Modal Post -->
    <!-- Delete message -->
    <div class="modal fade" id="deletePost{{$post->id}}" tabindex="-1" role="dialog" aria-labelledby="#deletePost{{$post->id}}" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-dark" id="exampleModalLongTitle">Supprimer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-dark">
                    Voulez-vous vraiment supprimer ce choix de veste ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                    <a href="/vestes/destroy/{{$post->id}}" class="btn btn-danger">Supprimer</a>
                </div>
            </div>
        </div>
    </div>
@endforeach


@endsection