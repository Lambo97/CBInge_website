@extends('layouts.app')

@section('content')
    
            <h2 style="margin-left: -15px"><strong>Modifier sa fiche</strong></h2>
                
                <form method="POST" action="/profile/update/{{$user->id}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="d-none col-md-4 col-form-label text-md-right">Nom</label>

                            
                            <input id="name" type="text" class="form-control form-content @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $user->name}}" required autocomplete="name" placeholder="Nom">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="prenom" class="d-none col-md-4 col-form-label text-md-right">Prenom</label>

                            
                                <input id="prenom" type="text" class="form-control form-content @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') ?? $user->prenom}}" required autocomplete="prenom"placeholder="Prénom">

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="surnom" class="d-none col-md-4 col-form-label text-md-right">Surnom <small>(Bleu-ette ou Fossille + nom)</small></label>

                            
                                <input id="surnom" type="text" class="form-control form-content @error('surnom') is-invalid @enderror" name="surnom" value="{{ old('surnom') ?? $user->surnom}}" required autocomplete="surnom" placeholder="Surnom (Bleu-ette ou Fossile + nom)">

                                @error('surnom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="surnom_forum" class=" col-form-label text-md-right">Pseudo du forum:</label>

                            
                                <div class="radio ml-4 pt-2">
                                    <label><input type="radio" value="1" name="surnom_forum" @if($surnom_forum == 1) checked @endif>  Prénom et nom  </label>
                                    <label><input type="radio" value="2" name="surnom_forum" @if($surnom_forum == 2) checked @endif>  Nom  </label>
                                    <label><input type="radio" value="3" name="surnom_forum" @if($surnom_forum == 3) checked @endif>  Prénom  </label>
                                    <label><input type="radio" value="4" name="surnom_forum" @if($surnom_forum == 4) checked @endif>  Surnom  </label>
                                  </div>
                                @error('surnom_forum')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="email" class="d-none col-md-4 col-form-label text-md-right">Email</label>

                            
                                <input id="email" type="email" class="form-control form-content @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $user->email}}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="date_de_naissance" class="d-none col-md-4 col-form-label text-md-right">Date de naissance</label>

                            
                                <input id="date_de_naissance" type="text" class="form-control form-content @error('date_de_naissance') is-invalid @enderror" name="date_de_naissance" value="{{ old('date_de_naissance') ?? date('d-m-Y', strtotime($user->date_de_naissance))}}" required autocomplete="date_de_naissance" placeholder="Date de naissance">

                                @error('date_de_naissance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="adresse" class="d-none col-md-4 col-form-label text-md-right">Adresse <small>(maison ou kot)</small></label>

                            
                                <input id="adresse" type="text" class="form-control form-content @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') ?? $user->adresse}}" required autocomplete="adresse"placeholder="Adresse (maison ou kot)">

                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                        
                        <div class="form-group row">
                            <label for="code_postal" class="d-none col-md-4 col-form-label text-md-right">Code postal</label>

                            
                                <input id="code_postal" type="number" class="form-control form-content @error('code_postal') is-invalid @enderror" name="code_postal" value="{{ old('code_postal') ?? $user->code_postal}}" required autocomplete="code_postal" placeholder="Code postal">

                                @error('code_postal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                                <label for="ville" class="d-none col-md-4 col-form-label text-md-right">Ville</label>
    
                                
                                    <input id="ville" type="text" class="form-control form-content @error('ville') is-invalid @enderror" name="ville" value="{{ old('ville') ?? $user->ville}}" required autocomplete="ville" placeholder="Ville">
    
                                    @error('ville')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>

                        <div class="form-group row">
                            <label for="gsm" class="d-none col-md-4 col-form-label text-md-right">GSM</label>

                            
                                <input id="gsm" type="text" class="form-control form-content @error('gsm') is-invalid @enderror" name="gsm" value="{{ old('gsm') ?? $user->gsm}}" required autocomplete="gsm" placeholder="GSM : 04XXXXXXXX">

                                @error('gsm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="entree_inge" class="d-none col-md-4 col-form-label text-md-right">Entrée en ingé</label>

                            
                                <input id="entree_inge" type="year" class="form-control form-content @error('entree_inge') is-invalid @enderror" name="entree_inge" value="{{ old('entree_inge') ?? $user->entree_inge}}" required autocomplete="entree_inge" placeholder="Entrée en ingé">

                                @error('entree_inge')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                        
                        <div class="form-group row">
                                <label for="annee_bapteme" class="d-none col-md-4 col-form-label text-md-right">Année de Baptême</label>
    
                                
                                    <input id="annee_bapteme" type="year" class="form-control form-content @error('annee_bapteme') is-invalid @enderror" name="annee_bapteme" value="{{ old('annee_bapteme') ?? $user->annee_bapteme}}" required autocomplete="annee_bapteme" placeholder="Année de baptême">
    
                                    @error('annee_bapteme')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>

                        <div class="form-group row">
                            <label for="autre_etudes" class="d-none col-md-4 col-form-label text-md-right">Autre(s) études</label>

                            
                                <input id="autre_etudes" type="text" class="form-control form-content @error('autre_etudes') is-invalid @enderror" name="autre_etudes" value="{{ old('autre_etudes') ?? $user->autre_etudes}}" autocomplete="autre_etudes" placeholder="Autre(s) études">

                                @error('autre_etudes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                                <label for="autre_etudes" class="d-none col-md-4 col-form-label text-md-right">Section</label>
    
                               
                                    
                                    <select id="section" type="text" class="form-control form-content @error('section') is-invalid @enderror" name="section" value="{{ old('section') ?? $user->section}}" autocomplete="autre_etudes"placeholder="Section">
                                    @foreach($options as $value)
                                        <option value="{{ $value }}"
                                        @if ($value == $user->section)
                                            selected="selected"
                                        @endif
                                        ><small>{{ $value }}</small></option>
                                    @endforeach
                                    </select>
    
                                    @error('autre_etudes')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                               
                            </div>

                        
                        <div class="form-group row">
                            <p class=" col-form-label text-md-right">Photo actuelle</p>

                            
                                @if($user->photo == "noimage.jpg")
                                    <p class="pt-2 pl-1"> Il n'y a pas encore d'image </p>
                                @else 
                                    <p>
                                    <img src="/profile/image/{{$user->annee_bapteme}}/{{$user->photo}}" class="w-25">
                                    </p>
                                @endif
                                
                            
                        </div>

                        <div>
                            <label for="photo" class="d-none col-md-4 col-form-label text-md-right">Nouvelle image</label>
                            <p class=" col-form-label mt-n2">Nouvelle image : </p>
                                
                                <p>
                                <input type="file" class=" col-9 form-control-file form-content" id="photo" name="photo"placeholder="Nouvelle image">
                                </p>
                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            

                            
                                <a class="green-link" href="/profile/editParrain">Editer les parrains</a>
                        
                        </div>

                        <div class="form-group row">
                            

                            
                                <a class="green-link" href="/profile/editBleu">Editer les bleus</a>
                            
                        </div>

                        <div class="form-group row">
                            <label for="probleme_sante" class="d-none col-md-4 col-form-label text-md-right">Probleme(s) de santé</label>

                            
                                <textarea id="probleme_sante" rows="5" class="form-control form-content @error('probleme_sante') is-invalid @enderror" name="probleme_sante"placeholder="Problême(s) de santé" autocomplete="probleme_sante">{{ old('probleme_sante') ?? $user->probleme_sante}} </textarea>
    
                                @error('probleme_sante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                        <div class="form-group row">
                            <label for="citation" class="d-none col-md-4 col-form-label text-md-right">Citation(s) favorite(s)</label>

                            
                                <textarea id="citation" rows="5" class="form-control form-content @error('citation') is-invalid @enderror" name="citation" placeholder="Citation(s) favorite(s)"autocomplete="citation">{{ old('citation') ?? $user->citation}}</textarea>
    
                                @error('citation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="boisson" class="d-none col-md-4 col-form-label text-md-right">Boisson(s) favorite(s)</label>

                            
                                <textarea id="boisson" rows="5" class="form-control form-content @error('boisson') is-invalid @enderror" name="boisson" placeholder="Boisson(s) favorite(s)"autocomplete="boisson">{{ old('boisson') ?? $user->boisson}}</textarea>
    
                                @error('boisson')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="guindaille" class="d-none col-md-4 col-form-label text-md-right">Guindaille(s) favorite(s)</label>

                            
                                <textarea id="guindaille" rows="5" class="form-control form-content @error('guindaille') is-invalid @enderror" name="guindaille" placeholder="Guindaille(s) favorite(s)" autocomplete="guindaille">{{ old('guindaille') ?? $user->guindaille}}</textarea>
    
                                @error('guindaille')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                        
                        <div class="form-group row">
                            <label for="titre_guindaille" class="d-none col-md-4 col-form-label text-md-right">Titres de guindailles</label>

                            
                                <textarea id="titre_guindaille" rows="5" class="form-control form-content @error('titre_guindaille') is-invalid @enderror" name="titre_guindaille"  placeholder= "Titres de guindaille"autocomplete="titre_guindaille">{{ old('titre_guindaille') ?? $user->titre_guindaille}}</textarea>
    
                                @error('titre_guindaille')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="description" class="d-none col-md-4 col-form-label text-md-right">Description</label>

                            
                                <textarea id="description" rows="5" class="form-control form-content @error('description') is-invalid @enderror" name="description" placeholder ="Description"autocomplete="description">{{ old('description') ?? $user->description }}</textarea>
    
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
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
