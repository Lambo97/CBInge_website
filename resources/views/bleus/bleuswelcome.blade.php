@extends('bleus.layouts.bleusapp')

@section('title')
<title>Accueil - {{ config('app.name', 'Laravel') }}</title>
@endsection


@section('content')
<script src="{{ asset('/js/welcome.js') }}" defer></script>
    <h2><strong>Le site des bleus</strong></h2>
    <p>Bonjour et bienvenue sur le tout nouveau site des bleus du comité de baptême ingénieur civil !</p>

    <p>Si tu te poses des questions concernant le baptême en ingénieur civil à l'Université de Liège, alors tu es sur le bon site.</p>
    <p>Tu trouveras tous les renseignements que tu souhaites sur les différentes pages.</p>
    <p>Dans les sections <a class="blue-link" href="/bleus/informations"> Informations</a> et <a class="blue-link" href="/bleus/folklore">Folklore</a> se trouve une excellente description du baptême.</p>
    <p>Sache qu'un baptême est très différent d'une université à l'autre, d'un comité à l'autre et parfois même d'une année à l'autre.</p>
    <p>Oublie donc tout ce que tu as pu entendre dans les médias et informes-toi ici.</p>
    <p>Nous t'invitons également à faire un tour sur notre <a class="blue-link "href="#">Foire aux Questions</a> et si tu as d'autres questions ou d'autres doutes, n'hésite pas à poster un mot sur le Forum prévu à cet effet (aucune inscription n'est requise). Un membre du comité se fera un plaisir de te répondre le plus rapidement possible.</p>

    <p>Tu auras également l'occasion de nous rencontrer en chair et en os lors de la soirée d'accueil de l'AEES, nous passerons nous présenter dans ton amphi et nous organiserons même notre propre soirée d'accueil dans le carré à la cour St Jean.</p>




    <h2 class="mt-5"><strong>Nous contacter</strong></h2>
        <p> Si tu as d'autres questions, tu peux contacter le comité de baptême ingénieur civil en laissant un email sur comite@cbinge.com ou en complétant le formulaire ci-dessous :</p>

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

                                        <button type="submit" class="buttons-blue font-weight-bold">
                                            Envoyer
                                        </button>
                                        <button type="reset" class="buttons-blue buttons-blue-dark font-weight-bold mr-2">
                                            Reset
                                        </button>

                                </div>
                         </form>





@endsection
