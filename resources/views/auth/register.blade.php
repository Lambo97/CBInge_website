@extends('layouts.app')

@section('title')
<title> CB Ingé - Inscription au baptême</title>
@endsection

@section('content')
    <h2><strong>Se connecter</strong></h2>
    
                <p class="m-3">Les données que vous entrez ici doivent-être correctes. Ces informations ne seront visibles que par les membres du comité et servent à garantir votre sécurité lors de nos événements.
                Le comité ne peut être tenu responsable des déclarations fausses ou incomplètes des bleus concernant leur état de santé (Charte des Baptêmes de l'ULg, article 5).</p>
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="d-none col-md-4 col-form-label text-md-right">Nom</label>

                            
                                <input id="name" type="text" class="form-control form-content @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nom">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="prenom" class="d-none col-md-4 col-form-label text-md-right">Prenom</label>

                           
                                <input id="prenom" type="text" class="form-control form-content @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" placeholder="Prénom">

                                @error('prenom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="surnom" class="d-none col-md-4 col-form-label text-md-right">Surnom <small>(Bleu-ette ou Fossille + nom)</small></label>

                            
                                <input id="surnom" type="text" class="form-control form-content @error('surnom') is-invalid @enderror" name="surnom" value="{{ old('surnom') }}" required autocomplete="surnom" placeholder="surnom">

                                @error('surnom')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="email" class="d-none col-md-4 col-form-label text-md-right">Email</label>

                            
                                <input id="email" type="email" class="form-control form-content @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="password" class="d-none col-md-4 col-form-label text-md-right">Mot de passe</label>

                            
                                <input id="password" type="password" class="form-control form-content @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="new-password" placeholder="Mot de passe">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        

                        <div class="form-group row">
                            <label for="password-confirm" class="d-none col-md-4 col-form-label text-md-right">Confirmer le mot de passe</label>

                            
                                <input id="password-confirm" type="password" class="form-control form-content" name="password_confirmation" value="{{ old('password') }}" required autocomplete="new-password" placeholder="Confirmer le mot de passe">
                            
                        </div>

                        <div class="form-group row">
                            <label for="date_de_naissance" class="d-none col-md-4 col-form-label text-md-right">Date de naissance</label>

                            
                                <input id="date_de_naissance" type="text" onfocus ="this.type=('date')"class="form-control form-content @error('date_de_naissance') is-invalid @enderror" name="date_de_naissance" value="{{ old('date_de_naissance') }}" required autocomplete="date_de_naissance" placeholder="Date de naissance">

                                @error('date_de_naissance')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <div class="form-group row">
                            <label for="adresse" class="d-none col-md-4 col-form-label text-md-right">Adresse <small>(maison ou kot)</small></label>

                            
                                <input id="adresse" type="text" class="form-control form-content @error('adresse') is-invalid @enderror" name="adresse" value="{{ old('adresse') }}" required autocomplete="adresse"placeholder="Adresse">

                                @error('adresse')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>
                        
                        <div class="form-group row">
                            <label for="code_postal" class="d-none col-md-4 col-form-label text-md-right">Code postal</label>

                            
                                <input id="code_postal" type="number" class="form-control form-content @error('code_postal') is-invalid @enderror" name="code_postal" value="{{ old('code_postal') }}" required autocomplete="code_postal"placeholder="Code postal">

                                @error('code_postal')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                                <label for="ville" class="d-none col-md-4 col-form-label text-md-right">Ville</label>
    
                                
                                    <input id="ville" type="text" class="form-control form-content @error('ville') is-invalid @enderror" name="ville" value="{{ old('ville') }}" required autocomplete="ville"placeholder="Ville">
    
                                    @error('ville')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>

                        <div class="form-group row">
                            <label for="gsm" class="d-none col-md-4 col-form-label text-md-right">GSM</label>

                            
                                <input id="gsm" type="text" class="form-control form-content @error('gsm') is-invalid @enderror" name="gsm" value="{{ old('gsm') }}" required autocomplete="gsm" placeholder="GSM : 04XXXXXXXX">

                                @error('gsm')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="entree_inge" class="d-none col-md-4 col-form-label text-md-right">Entrée en ingé</label>

                            
                                <input id="entree_inge" type="year" class="form-control form-content @error('entree_inge') is-invalid @enderror" name="entree_inge" value="{{ old('entree_inge') }}" required autocomplete="entree_inge"placeholder="Entrée en ingé">

                                @error('entree_inge')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="autre_etudes" class="d-none col-md-4 col-form-label text-md-right">Autre(s) études</label>

                            
                                <input id="autre_etudes" type="text" class="form-control form-content @error('autre_etudes') is-invalid @enderror" name="autre_etudes" value="{{ old('autre_etudes') }}" autocomplete="autre_etudes"placeholder="Autre(s) études">

                                @error('autre_etudes')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="probleme_sante" class="d-none col-md-4 col-form-label text-md-right">Probleme(s) de santé</label>

                            
                                <textarea id="probleme_sante" rows="5" class="form-control form-content @error('probleme_sante') is-invalid @enderror" name="probleme_sante" autocomplete="probleme_sante" placeholder="Probleme(s) de santé: ne rigole pas avec cette section">{{ old('probleme_sante') }}</textarea>
    
                                @error('probleme_sante')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="form-group row">
                            <label for="description" class="d-none col-md-4 col-form-label text-md-right">Description</label>

                            
                                <textarea id="description" rows="5" class="form-control form-content @error('description') is-invalid @enderror" name="description" autocomplete="description" placeholder="Description : décris toi en quelques mots" required>{{ old('description') }}</textarea>
    
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                        <div class="d-flex flex-row-reverse my-4">
                                    
                                    <button type="submit" class="buttons-green font-weight-bold">
                                        Inscription
                                    </button>
                                    <button type="reset" class="buttons-green buttons-green-dark font-weight-bold mr-2">
                                        Reset
                                    </button>
                                
                            </div>
                    </form>
@endsection
