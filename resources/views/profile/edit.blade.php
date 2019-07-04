@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card bg-dark">
                <div class="card-header">Modifier sa fiche</div>
                <div class="card-body">
                <form method="POST" action="/profile/update/{{$user->id}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nom</label>

                            <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $user->name}}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prenom" class="col-md-4 col-form-label text-md-right">Prenom</label>

                            <div class="col-md-6">
                                <input id="prenom" type="text" class="form-control @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') ?? $user->prenom}}" required autocomplete="prenom">

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surnom" class="col-md-4 col-form-label text-md-right">Surnom <small>(Bleu-ette ou Fossille + nom)</small></label>

                            <div class="col-md-6">
                                <input id="surnom" type="text" class="form-control @error('surnom') is-invalid @enderror" name="surnom" value="{{ old('surnom') ?? $user->surnom}}" required autocomplete="surnom">

                                @error('surnom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="surnom_forum" class="col-md-4 col-form-label text-md-right">Pseudo du forum</label>

                            <div class="col-md-6">
                                <div class="radio pt-2">
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
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $user->email}}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date_de_naissance" class="col-md-4 col-form-label text-md-right">Date de naissance</label>

                            <div class="col-md-6">
                                <input id="date_de_naissance" type="date" class="form-control @error('date_de_naissance') is-invalid @enderror" name="date_de_naissance" value="{{ old('date_de_naissance') ?? date("d-m-Y", strtotime($user->date_de_naissance))}}" required autocomplete="date_de_naissance" placeholder="DD-MM-YYYY">

                                @error('date_de_naissance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="adresse" class="col-md-4 col-form-label text-md-right">Adresse <small>(maison ou kot)</small></label>

                            <div class="col-md-6">
                                <input id="adresse" type="text" class="form-control @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') ?? $user->adresse}}" required autocomplete="adresse">

                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="code_postal" class="col-md-4 col-form-label text-md-right">Code postal</label>

                            <div class="col-md-6">
                                <input id="code_postal" type="number" class="form-control @error('code_postal') is-invalid @enderror" name="code_postal" value="{{ old('code_postal') ?? $user->code_postal}}" required autocomplete="code_postal" >

                                @error('code_postal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="ville" class="col-md-4 col-form-label text-md-right">Ville</label>
    
                                <div class="col-md-6">
                                    <input id="ville" type="text" class="form-control @error('ville') is-invalid @enderror" name="ville" value="{{ old('ville') ?? $user->ville}}" required autocomplete="ville">
    
                                    @error('ville')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        <div class="form-group row">
                            <label for="gsm" class="col-md-4 col-form-label text-md-right">GSM</label>

                            <div class="col-md-6">
                                <input id="gsm" type="text" class="form-control @error('gsm') is-invalid @enderror" name="gsm" value="{{ old('gsm') ?? $user->gsm}}" required autocomplete="gsm" placeholder="04XXXXXXXX">

                                @error('gsm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="entree_inge" class="col-md-4 col-form-label text-md-right">Entrée en ingé</label>

                            <div class="col-md-6">
                                <input id="entree_inge" type="year" class="form-control @error('entree_inge') is-invalid @enderror" name="entree_inge" value="{{ old('entree_inge') ?? $user->entree_inge}}" required autocomplete="entree_inge">

                                @error('entree_inge')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                                <label for="annee_bapteme" class="col-md-4 col-form-label text-md-right">Année de Baptême</label>
    
                                <div class="col-md-6">
                                    <input id="annee_bapteme" type="year" class="form-control @error('annee_bapteme') is-invalid @enderror" name="annee_bapteme" value="{{ old('annee_bapteme') ?? $user->annee_bapteme}}" required autocomplete="annee_bapteme">
    
                                    @error('annee_bapteme')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        <div class="form-group row">
                            <label for="autre_etudes" class="col-md-4 col-form-label text-md-right">Autre(s) études</label>

                            <div class="col-md-6">
                                <input id="autre_etudes" type="text" class="form-control @error('autre_etudes') is-invalid @enderror" name="autre_etudes" value="{{ old('autre_etudes') ?? $user->autre_etudes}}" autocomplete="autre_etudes">

                                @error('autre_etudes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="autre_etudes" class="col-md-4 col-form-label text-md-right">Section</label>
    
                                <div class="col-md-7">
                                    
                                    <select id="section" type="text" class="form-control @error('section') is-invalid @enderror" name="section" value="{{ old('section') ?? $user->section}}" autocomplete="autre_etudes">
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
                            </div>

                        
                        <div class="form-group row">
                            <p class="col-md-4 col-form-label text-md-right">Photo actuelle</p>

                            <div class="col-md-6">
                                @if($user->photo == "noimage.jpg")
                                    <p class="pt-2 pl-1"> Il n'y a pas encore d'image </p>
                                @else
                                    <img src="/storage/profile/{{$user->annee_bapteme}}/{{$user->photo}}" class="w-100">
                                @endif
                                
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="photo" class="col-md-4 col-form-label text-md-right">Nouvelle image</label>

                            <div class="col-md-6">
                                <input type="file" class="form-control-file" id="photo" name="photo">
                                @error('photo')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="probleme_sante" class="col-md-4 col-form-label text-md-right">Probleme(s) de santé</label>

                            <div class="col-md-6">
                                <textarea id="probleme_sante" rows="5" class="form-control @error('probleme_sante') is-invalid @enderror" name="probleme_sante" autocomplete="probleme_sante">{{ old('probleme_sante') ?? $user->probleme_sante}}</textarea>
    
                                @error('probleme_sante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="boisson" class="col-md-4 col-form-label text-md-right">Boisson(s) favorite(s)</label>

                            <div class="col-md-6">
                                <textarea id="boisson" rows="5" class="form-control @error('boisson') is-invalid @enderror" name="boisson" autocomplete="boisson">{{ old('boisson') ?? $user->boisson}}</textarea>
    
                                @error('boisson')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="guindaille" class="col-md-4 col-form-label text-md-right">Guindaille(s) favorite(s)</label>

                            <div class="col-md-6">
                                <textarea id="guindaille" rows="5" class="form-control @error('guindaille') is-invalid @enderror" name="guindaille" autocomplete="guindaille">{{ old('guindaille') ?? $user->guindaille}}</textarea>
    
                                @error('guindaille')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="titre_guindaille" class="col-md-4 col-form-label text-md-right">Titres de guindailles</label>

                            <div class="col-md-6">
                                <textarea id="titre_guindaille" rows="5" class="form-control @error('titre_guindaille') is-invalid @enderror" name="titre_guindaille"  autocomplete="titre_guindaille">{{ old('titre_guindaille') ?? $user->titre_guindaille}}</textarea>
    
                                @error('titre_guindaille')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Description</label>

                            <div class="col-md-6">
                                <textarea id="description" rows="5" class="form-control @error('description') is-invalid @enderror" name="description" autocomplete="description">{{ old('description') ?? $user->description }}</textarea>
    
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Enregistrer
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
