@extends('layouts.app')

@section('title')
<title> CB Ingé - Délations </title>
@endsection

@section('content')
  @if(Auth::user()->fonctions() !== 'Clergé')
    <h1 class="mb-3">Rendez-vous à la messe pour voir ta grosse race bien affichée</h1>
  @else
    <h1 class="mb-3">Délations envoyées anonymemement</h1>

      @foreach($posts as $post)

          <div class="form-content mt-4">
              <div class="row mx-0">
                <div class="col-2">
                    <img class="mx-auto d-block img-fluid rounded-circle mt-2 img-small" src="/profile/{{$post->auteur->id}}/image" alt="{{$post->auteur->surnom_forum}}">
                </div>
                  <div class="col-10">
                      <div class="row mb-2 mt-2 justify-content-between">
                          <div class="col-6">
                            <h4 style='display:inline' class="mr-3"><a href="/profile/show/{{$post->auteur->id}}" class="green-link">{{$post->auteur->surnom_forum}}</a></h4>
                            <p><small class="font-weight-light">Posté le : {{date("d-m-Y H:i:s", strtotime($post->created_at))}}</small></p>
                          </div>
                      </div>
                      <div class="row mb-2">
                          <div class="col-12 ">
                              {!!Purifier::clean($post->message);!!}
                          </div>
                      </div>
                      @if($post->photo)
                      <div class="row mb-5">
                          <div class="col-10">
                              <img class="mx-auto d-block img-fluid mt-2 img-small" src="/forum/image/{{$post->photo}}">
                          </div>
                      </div>
                      @endif
                      <hr>
                  </div>

              </div>
          </div>
      @endforeach
      <div class="row mt-5 justify-content-center">
          {{$posts->links()}}
      </div>
    @endif
@endsection
