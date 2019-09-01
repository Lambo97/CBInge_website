@extends('layouts.app')


@section('title')
<title> CB Ingé - Bug </title>
@endsection

@section('content')

<h1 class="mb-3">Signaler un Bug</h1>

<div class="row">
    <div class="col-12  form-content mb-5">
      <p class=" mt-3 mb-3">Le site du CB étant flambant neuf, il est plus que probable que
          vous rencontriez un ou plusieurs bugs,
          merci de le mentionner ci-dessous pour nous aider à améliorer le site!
      </p>  
      <form method="POST" action="/bug/add" enctype="multipart/form-data">
        @csrf

        <div class="form-group row">
        
            <label for="message" class="col-2 col-form-label text-md-right"><img class="mx-auto d-block img-fluid rounded-circle img-small" src="/profile/{{Auth::user()->id}}/image" alt="{{Auth::user()->surnom_forum}}"></label>
            
            <div class="textarea w-75 pl-3">
            
                <textarea id="message" rows="5" class="d-block  mb-3 w-100 bg-grey p-2" name="message" autocomplete="message" placeholder="Ecris ton message"></textarea>
                
                 
            
        
                
                
            </div>
        </div>
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-2 mb-4">
                <button type="submit" class="buttons-green font-weight-bold">
                    Envoyer
                </button>
            </div>
        </div>
    </form>
    </div>
</div>

@if(Auth::user()->droit == 1)
<p class="font-weight-bold">Liste des Bugs</p>
@foreach($bug as $post)



    
        
            
            
        <div class="form-content py-2 mb-2 mt-2 justify-content-between">
            <div class="d-flex">
                <div class="col-6">
                 
                    <p class="font-weight-bold m-0">{{$post->lefait}} s'en occupe</p>
                </div>
                    @if(Auth::user()->id == $post->id || Auth::user()->droit < 3)
                    <div class="col-6 d-flex justify-content-end ">
                        <div class="green-link right-0 mr-2"><i class="far fa-trash-alt" data-toggle="modal" data-target="#deletePost{{$post->id}}"></i></div>
                        <a href="/bug/edit/{{$post->id}}" class="green-link mr-2"><i class="far fa-edit"></i></a>
            
                    </div>
                    @endif
            </div>        
                
            
                    <div class="col-12 ">
                       <p>Bug : {{$post->message}}</p>
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
                    Voulez-vous vraiment supprimer ce bug ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
                    <a href="/bug/destroy/{{$post->id}}" class="btn btn-danger">Supprimer</a>
                </div>
            </div>
        </div>
    </div>
@endforeach
@endif


@endsection