@extends('layouts.app')

@section('title')
<title>Accueil - {{ config('app.name', 'Laravel') }}</title>
@endsection

@section('content')
    <h2><strong>Le comité de baptême</strong></h2>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Potenti nullam ac tortor vitae. Aliquet lectus proin nibh nisl condimentum id venenatis. Ullamcorper malesuada proin libero nunc consequat. Viverra nam libero justo laoreet sit amet cursus sit amet. Suscipit adipiscing bibendum est ultricies integer. Sit amet justo donec enim diam vulputate. Faucibus ornare suspendisse sed nisi lacus sed viverra tellus. Enim ut sem viverra aliquet. Diam vel quam elementum pulvinar etiam non quam. Tempor commodo ullamcorper a lacus vestibulum. At erat pellentesque adipiscing commodo elit at. Nisi est sit amet facilisis magna etiam tempor orci eu.</p>
        <button type="button" class=" buttons-green font-weight-bold" id="bouton_dons">Nous faire un don</button>
        <p class="d-none" id="compte_dons">
            BE39 0682 1469 9019
        </p>
        <div class="nav_welcome_action d-flex">
            <p class="w-50 pb-2 mt-5 text-center welcome_active font-weight-bold" id="0">
                4H trottis
            </p>
            <p class="w-50 pb-2 mt-5 text-center font-weight-bold" id="1">
                Baptême
            </p>
        </div>
        <div id="4h">
            <p>Les 4 heures trottinettes est un évènement estudiantin se déroulant au Sart-Tilman à Liège le mercredi de la Saint-Torè. L'évènement était tenu jusque dans les années 1990 sur le site du Val-Benoit.</p>
            <p>Elles constituent le point d'orgue des festivités de la Saint-Torè, et rassemblent chaque année, depuis 1977, plusieurs milliers de spectateurs et participants.</p>
            <p>Cette course, par équipes de quatre personnes se partageant une même trottinette (ou tout autre objet y ressemblant de près ou de loin), comporte principalement
             deux passages critiques, adorés par certains concurrents et redoutés par d'autres. Le premier passage délicat est le passage dans la boue. En effet, le circuit comporte
              une mare de boue de quelques mètres de long et de 30 à 50 cm de profondeur. Le deuxième passage délicat est le passage aux pompes à bière où le concurrent devra faire un 
              (ou plusieurs) à-fond(s). Le nombre de tours réalisés par chaque équipe sera comptabilisé et désignera le vainqueur.</p>
            <p>Les 4 heures trottinettes sont organisées par le Comité de Baptême Ingénieur Civil, et permettent notamment aux diverses sections de la faculté de financer leur voyage de
                fin d'études et aux autres associations étudiantes liées à la faculté de sciences appliquées de l'ULg de se faire connaitre, en proposant de nombreuses boissons (bières, pekets
                 fruités, etc.) à vendre sur le site de la compétition.</p>
                 <a class="buttons-green font-weight-bold"href="http://www.4htrottis.be">Avoir plus d'informations</a>
        </div>
        <div class="d-none" id="bleus">
            
            <p>Le baptême est une cérémonie initiatique qui permet à un nouvel étudiant (bleu) de passer du statut de bleu à celui de baptisé. En d'autres termes de rentrer dans un cercle d'étudiants baptisés.
             De manière générale, le terme de bleu peut également englober toutes les activités de bleusailles, qui précèdent le baptême proprement dit. Les baptêmes sont organisés par des comités de baptême, 
             qui ne peuvent être dirigés que par des étudiants baptisés.</p>
            <p>Le baptême chez nous en ingénieur civil consiste en 6 soirées réparties en 6 semaines. Toutes nos bleusailles se terminent avant minuit afin de permettre de prendre le dernier bus pour rentrer à son domicile.</p>
            <p>Un site internet a été créé spécialement pour répondre aux diverses questions que l'on peut se poser:</p>
            <a class="buttons-green font-weight-bold"href="http://bleus.cbinge.com ">Site des bleus</a>
        </div>
        

    <h2 class="mt-5"><strong>Nous contacter</strong></h2>
        <p> Si vous voulez contacter le comité de baptême ingénieur civil de liège, vous pouvez laisser un email sur comite@cbinge.com ou compléter le formulaire ci dessous :</p>
        
                        <form method="POST" action="/contact" enctype="multipart/form-data">
                                @csrf
        
                                <div class="form-group row">
                                    <div class="col-12">
                                    <input id="nom" type="text" class="form-control form-content @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" placeholder="Nom et prénom">
                                    @error('nom')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                    
                                </div>
                                
                                <div class="form-group row">
                                    <div class="col-12">
                                    <input id="email" type="text" class="form-control form-content @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"  placeholder="Email">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                    <input id="cb" type="text" class="form-control form-content @error('cb') is-invalid @enderror" name="cb" value="{{ old('cb') }}" autocomplete="cb"  placeholder="Comité de baptême (facultatif)">
                                    @error('cb')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                    <input id="test" type="text" class="form-control form-content @error('test') is-invalid @enderror" name="test" value="{{ old('test') }}" required autocomplete="test"  placeholder="Quelle est la couleur de cheval blanc de Napoleon ?">
                                    @error('test')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-12">
                                    <textarea  id="message" class="form-control form-content @error('message') is-invalid @enderror" name="message" required autocomplete="message"  placeholder="Message" rows="5">{{ old('message') }}</textarea>
                                    @error('message')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    </div>
                                </div>

                                <div class="d-flex flex-row-reverse mb-2">
                                    
                                        <button type="submit" class="buttons-green font-weight-bold">
                                            Envoyer
                                        </button>
                                        <button type="reset" class="buttons-green buttons-green-dark font-weight-bold mr-2">
                                            Reset
                                        </button>
                                    
                                </div>
                         </form>
                   




@endsection
