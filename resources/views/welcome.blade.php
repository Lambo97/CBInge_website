@extends('layouts.app')

@section('title')
<title>Accueil - {{ config('app.name', 'Laravel') }}</title>
@endsection


@section('content')
<script src="{{ asset('/js/welcome.js') }}" defer></script>
    <h2><strong>Le comité de baptême</strong></h2>
        <p> Bienvenue sur le noble, très prestigieux et hautement jalousé site du CB ingé !<br /> <i>Le site étant tout nouveau tout propre tout beau, il est impératif de réinitialiser ton mot de passe sinon ton identifiant n’est pas valide. </i> <br />Sur ce site tu trouveras toutes les réponses à tes questions et supports relatif au CB.

</p><p>
<u>Le Comité de baptème c’est qui ?</u><br />
Le Comité de baptème ingénieur civil (CB ingé) est composé de 13 togés et d’une quarantaine d’assistants tous étudiants en ingénieur civil. Les togés sont l’instance supérieure, les chefs du comité. Au moins en 3ème BAC ingénieur civil, ils organisent et encadrent toutes les bleusailles et soirées durant l’année. Les assistants, eux, aident et participent au bon déroulement des évènements.
</p><p>
<u>Le CB ingé, pourquoi c’est mieux ?</u><br />
Le CB ingé est de loin le CB le plus présent et imposant en guindaille. Avec plus de 50 membres à son actif il est omniprésent. Toujours une bouteille de menthe à la main, il ne boit jamais sa bière sans son demi centimètre de sirop en transformant sa simple bière en un magnifique perroquet. Si son gosier n’est pas rafraîchit par cette bière améliorée c’est qu’il boit tout simplement du Reggio, autre boisson née au sein des ingés et qui s’exporte à travers les frontières. En plus des soirées habituelles, le CB ingé organise les « 4h Trottinettes » l’un des plus grand évènement étudiant qui regroupe près de 10 000 personnes chaque année. Le CB organise aussi le <a class="green-link"href="https://www.facebook.com/SKIINGE/">Ski Ingé</a>, plus grand ski universitaire de Wallonie et de loin le meilleur. </p>
        <button type="button" class=" buttons-green font-weight-bold" id="bouton_dons">Nous faire un don</button>
        <div class="d-none mt-4" id="compte_dons">
        <p>La guindaille c’est cher et les bleus encore plus !
         Afin que Radoux ne soit pas en négatif cette année, verse un petit montant sur ce noble,
          très prestigieux et hautement jalousé numéro de compte bancaire</p>
          <p class="text-center font-weight-bold">BE39 0682 1469 9019 !</p>
           <p> Tu ne le regretteras pas ! Grâce à toi on pourra être toujours plus riche que le CB HEC,
             payer des putes au week-end CB, manger deux boulets au resto après les Trottis et couler sous le Reggio à nos évènements !</p>
        </div>
        <div class="nav_welcome_action d-flex">
        <p class="w-50 pb-2 mt-5 text-center welcome_active font-weight-bold" id="0">
                Baptême
            </p>
            <p class="w-50 pb-2 mt-5 text-center font-weight-bold" id="1">
                4H trottis
            </p>
            
        </div>
        <div class="d-none" id="bleus">
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
        <div id="4h">

            <p>Le baptême est une cérémonie initiatique qui permet à un nouvel étudiant (bleu) de passer du statut de bleu à celui de baptisé. En d'autres termes de rentrer dans un cercle d'étudiants baptisés.
             De manière générale, le terme de bleu peut également englober toutes les activités de bleusailles, qui précèdent le baptême proprement dit. Les baptêmes sont organisés par des comités de baptême,
             qui ne peuvent être dirigés que par des étudiants baptisés.</p>
            <p>Le baptême chez nous en ingénieur civil consiste en 6 soirées réparties en 6 semaines. Toutes nos bleusailles se terminent avant minuit afin de permettre de prendre le dernier bus pour rentrer à son domicile.</p>
            <p>Un site internet a été créé spécialement pour répondre aux diverses questions que l'on peut se poser:</p>
            <a class="buttons-green font-weight-bold"href="http://127.0.0.1:8000/bleus">Site des bleus</a>
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
                                    <input id="test" type="text" class="form-control form-content @error('test') is-invalid @enderror" name="test" value="{{ old('test') }}" required autocomplete="test"  placeholder="Quelle est la couleur du cheval blanc de Napoleon ?">
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
