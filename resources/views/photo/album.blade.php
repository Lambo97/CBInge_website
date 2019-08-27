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


@endsection

@push('scripts')
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
        if (n >= slides.length) {
            slideIndex = 0;
        }
        else if( n < 0){
            slideIndex = slides.length - 1 ;
        }
        
        console.log(slideIndex);
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slides[slideIndex].style.display = "block";
    }
    
    window.addEventListener("keyup",function(e){
        if(e.key == "ArrowRight")
            plusSlides(1);
        else if(e.key == "ArrowLeft")
            plusSlides(-1);
    });
</script>
    
@endpush
<style>
/* The Modal (background) */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: black;
  }
  
  /* Modal Content */
  .modal .modal-content {
    position: relative;
    background-color: #353535;
    margin: auto;
    padding: 0;
    width: 90%;
    max-width: 1200px;
  }
  
  /* The Close Button */
  .modal .close {
    color: white;
    position: absolute;
    top: 10px;
    right: 25px;
    font-size: 35px;
    font-weight: bold;
  }
  
  .modal .close:hover,
  .modal .close:focus {
    color: #999;
    text-decoration: none;
    cursor: pointer;
  }
  
  .modal .mySlides {
    display: none;
  }
  
  .cursor {
    cursor: pointer;
  }
  
  /* Next & previous buttons */
  .modal .prev,
  .modal .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -50px;
    color: white;
    font-weight: bold;
    font-size: 20px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
    -webkit-user-select: none;
  }
  
  /* Position the "next button" to the right */
  .modal .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }
  
  /* On hover, add a black background color with a little bit see-through */
  .modal .prev:hover,
  .modal .next:hover {
    background-color: rgba(0, 0, 0, 0.8);
  }
  
  
  .modal img {
    margin-bottom: -4px;
  }
  
  .modal .caption-container {
    text-align: center;
    background-color: black;
    padding: 2px 16px;
    color: white;
  }
  
  .modal .active{
    opacity: 1;
  }

</style>
