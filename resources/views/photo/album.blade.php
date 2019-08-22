@extends('layouts.app')

@section('title')
<title> CB Ingé - Photos </title>
@endsection

@section('content')
<div class="row mb-3">
    <div class="col-md-4 col-sm-12">
        <h1>{{$album->nom}} - {{$album->annee}}</h1>
    </div>
    @if(Auth::check() and Auth::user()->droit == 1)
    <div class="col-md-6 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/photos/admin">Admin</a>
    </div>
    <div class="col-md-2 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/photos/{{$album->annee}}">Retour</a>
    </div>
    @else
    <div class="col-md-8 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/photos/{{$album->annee}}">Retour</a>
    </div>
    @endif
</div>

<div class="row">
    <?php $i = 0; ?>
    @foreach($photos as $photo)
    <div class="col-md-3 col-6 mb-2">
        <img style="width:100%;" class="mb-2" src="/photos/{{$photo->album->annee}}/{{$photo->album->id}}/{{$photo->id}}" onclick="openModal(); currentSlide(<?php echo $i; ?>);">
    </div>
    <?php $i ++ ?>
    @endforeach
</div>

<div id="myModal" class="modal">
    <span class="close cursor" onclick="closeModal();">&times;</span>
    <div class="modal-content">
        @foreach($photos as $photo)
        <div class="mySlides" style="width: 100%; height: 90vh;">
            <img src="/photos/{{$photo->album->annee}}/{{$photo->album->id}}/{{$photo->id}}" style="width: 100%; height: 100%; object-fit: contain;">
        </div>
        @endforeach

        <a class="prev" onclick="plusSlides(-1)"><</a>
        <a class="next" onclick="plusSlides(1)">></a>
    </div>
</div>


<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 0;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 0}
  
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex].style.display = "block";
}
</script>


@endsection