@extends('layouts.app')

@section('title')
<title> CB Ingé - Bleus </title>
@endsection

@section('content')

        <h2 class="mb-4">Liste des bleus baptisés à l'extérieurs de {{Auth::user()->surnom_forum}}</h2>
            

                <table class="table table-dark">
                <thead>
                    <tr>
                        <th>Prénom</th>
                        <th>Nom</th>
                        <th>Année</th>
                        <th></th>
                    </tr>
                </thead>
                    @forelse ($bleus as $bleu)
                        <tr>
                            <td>{{ $bleu->prenom }}</td>
                            <td>{{ $bleu->nom }}</td>
                            <td>{{ $bleu->annee }}</td>
                            <td><a href="{{ '/profile/removeBleuExt/'.$bleu->id }}"
                                    class="btn btn-primary btn-sm">Supprimer</a></td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4">Pas encore de bleus</td>
                        </tr>
                    @endforelse
                </table>
            <h3 class="my-4">Ajouter des bleus baptisés à l'extérieurs:</h3>
            <form method="POST" action="/profile/addBleuExt/{{Auth::user()->id}}" enctype="multipart/form-data">
                @csrf
            
                <div class="form-group row">
                    <label for="nom" class="d-none col-md-4 col-form-label text-md-right">Nom</label>
            
                    <input id="nom" type="text" class="form-control form-content @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom')}}" required autocomplete="nom" placeholder="Nom">
            
                    @error('nom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>
            
                <div class="form-group row">
                    <label for="prenom" class="d-none col-md-4 col-form-label text-md-right">Prenom</label>
            
                    <input id="prenom" type="text" class="form-control form-content @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom')}}" required autocomplete="prenom"placeholder="Prénom">
            
                    @error('prenom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>

                <div class="form-group row">
                    <label for="surnom" class="d-none col-md-4 col-form-label text-md-right">Surnom</label>
            
                    <input id="surnom" type="text" class="form-control form-content @error('surnom') is-invalid @enderror" name="surnom" value="{{ old('surnom')}}" autocomplete="surnom" placeholder="Surnom (optionnel)">
            
                    @error('surnom')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>

                <div class="form-group row">
                    <label for="annee" class="d-none col-md-4 col-form-label text-md-right">Annee</label>
            
                    <input id="annee" type="year" class="form-control form-content @error('annee') is-invalid @enderror" name="annee" value="{{ old('annee')}}" required autocomplete="annee" placeholder="Annee de bapteme">
            
                    @error('annee')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                </div>

                <div class="form-group row">
                    <label for="faculte" class="d-none col-md-4 col-form-label text-md-right">faculte</label>
            
                    <select id="faculte" class="form-control form-content @error('section') is-invalid @enderror" name="faculte">
                        <option value="en Droit">Faculté de droit</option>
                        <option value="en HEC">HEC</option>
                        <option value="en Sciences">Faculté des sciences</option>
                        <option value="en Médecine">Faculté de medecine</option>
                        <option value="en ISEPK">ISEPK</option>
                        <option value="en Philo et Lettres">Philo et lettres</option>
                        <option value="à Gramme\">Gramme</option>
                        <option value="en Info">Info</option>
                        <option value="en Psycho\">Psycho</option>
                        <option value="à l'ISIL">ISIL</option>
                        <option value="en Pharma">Pharma</option>
                        <option value="en Archi">Archi</option>
                        <option value="en Barbou">Barbou</option>
                        <option value="en Ex-AGES">Ex-AGES"	</option>														."<option value=\"en Dentisterie\">Dentisterie"
                        <option value="">Autres</option>
                    </select>
            
                    @error('faculte')
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
            <a class="buttons-green" href="/profile/edit/{{Auth::user()->id}}">Retour</a>
            
          
@endsection