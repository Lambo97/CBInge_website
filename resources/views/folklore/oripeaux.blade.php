@extends('layouts.app')

@section('title')
<title> CB Ingé - Folklore </title>
@endsection

@section('content')
<h1 class="mb-3">Folklore - Oripeaux</h1>
<div class="nav_welcome_action d-flex">
            <p class="w-50 pb-2 mt-5 text-center welcome_active font-weight-bold" id="10">
                La penne
            </p>
            <p class="w-50 pb-2 mt-5 text-center font-weight-bold" id="11">
                Les insignes
            </p>
            <p class="w-50 pb-2 mt-5 text-center font-weight-bold" id="12">
                Les couleurs
            </p>
</div>
<div id="penne">
<p>La penne n’est ni une casquette, ni une calotte. Elle est faite de velours et de plastique. Et pour l’instant tu ne peux que rêver de pouvoir un jour en orner ta petite tête vide. Le port de la penne n’est donc autorisé qu’à ceux qui ont fait et réussi un baptême à Liège.</p>
<p>Les baptisés de Bruxelles et Mons portent cependant, eux, des pennes également, contrairement aux baptisés universitaires catholiques, qui portent des calottes.</p>
<p>La penne se porte sur le cœur lors des chants sacrés (chants facultaires, Valeureux Liégeois et Chant des Wallons), mais aussi lorsque l’on s’apprête à faire un à-fond.
     Pour ces deux points, toi sale merde de bleu, tu es obligé de mettre ta main ou ton ellipse sur ton cœur, puisque tu ne possèdes pas de penne.</p>                
<p>Les pennes à Liège sont soit grises et laides (écoles supérieures), soit noires et belles (sauf celles des Sciences, archis, ingénieurs industriels et infos)
    , soit vertes et nulles, soit blanches et vulgaires, soit bordeaux et bof .</p>
<p>Voici un tableau récapitulatif des différentes pennes portées à Liège par les baptisés de comités de l’AGEL (et de Cureghem). On t’expliquera comment lire 
    une penne en regardant sa couleur, son ruban, ses insignes et ses étoiles.</p>
<ul>
<li>La première étoile qui orne une penne est une étoile dorée.</li> 
<li>Chaque étoile qui suivra te dira si oui ou non son propriétaire a réussi l’année qui précède celle en cours. Une étoile dorée veut dire oui, une argentée… à toi de deviner !</li> 
<li>Si quelqu’un rate une année et change de section, il change de ruban et met une étoile dorée.</li> 
<li>Si quelqu’un fait deux années en une, il met les étoiles correspondantes l’une au-dessus de l’autre (c’est en général une dorée au-dessus d’une argentée). </li>
</ul>
<div class="d-flex flex-wrap justify-content-center big-container">
    <div class="d-flex  m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Ingénieur Civil</p>
            <div class="rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Noire</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Blanc-vert</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Marteau-pic compas</p>
        </div>
    </div>
    <div class="d-flex  m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Informaticien</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Noire</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Rouge-vert</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Pas d'insigne</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Gramme</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Noire</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Orange</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Lettres IG</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">ISIL</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Noire</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Blanc-vert</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Pas d'insigne</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Archi St-Luc</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Noire</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Noir-bleu</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Compas, équerres</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Lambert-Lombard</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Noire</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Bleu</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Lettres ISALL</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Sciences / Chimie</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Noire</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Mauve-blanc</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Atôme benzene</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Sciences / Bioch</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Noire</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Mauve-rouge</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Pas d'insigne</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Sciences / Géologie</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Noire</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Rouge-jaune</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Pas d'insigne</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Sciences / Biologie</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Noire</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Vert-blanc</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Mâle-femelle</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Sciences / Physique</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Noire</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Blanc-rouge</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Structure atomique</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Sciences / Maths</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Noire</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Rouge-blanc</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Compas</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Sciences / Géographie</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Noire</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Mauve-orange</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Mappemonde</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3" style="width:50%;">
            <p class="font-weight-bold mt-0">Philo et Lettres / Philosophie</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Blanche</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Jaune-blanc</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">2 flambeaux</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Philo et Lettres / Classiques</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Blanche</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Blanc-jaune</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Plume</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Philo et Lettres / Histoire</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Blanche</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Vert-blanc</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Minerve</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Philo et Lettres / Romanes</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Blanche</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Jaune</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Plume, Flèche</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Philo et Lettres / Germaniques</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Blanche</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Blanc-Vert</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Flambeau, Flèche, Serpent</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Philo et Lettres / Archéo</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Blanche</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Gris</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Pic, Plume</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Philo et Lettres / Orientales</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Blanche</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Rose</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Lettres HPO</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Philo et Lettres / Commu</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Blanche</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Jaune-blanc</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Téléphone</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Psychologie</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Blanche</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Blanc-rouge</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Serpent, Flèche, Eclair et PSY</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Droit</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Blanche</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Mauve-blanc</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Balance</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Sciences-Po</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Blanche</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Blanc-mauve</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Lauriers, Flambeau</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">HEC / Ingé Gestion</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Bordeaux</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Mauve-vert</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Caducée Ailé, HEC</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">HEC / Sciences Eco</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Bordeaux</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Vert-mauve</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Caducée Ailé, HEC</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Médecine</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Verte</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Rouge-vert</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Caducée</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">ISEPK / Educ. Phys.</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Verte</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Blanc-vert</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Pas d'insigne</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">ISEPK / Kiné</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Verte</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Vert-blanc</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Pas d'insigne</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Pharmacie</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Verte</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Rouge-jaune</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Caducée sur coupe</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Vétérinaires</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Penne</p>
            <p class="font-weight-light my-0">Blanche</p>
            <p class="font-weight-bold my-0">Ruban</p>
            <p class="font-weight-light my-0">Bleu</p>
            <p class="font-weight-bold my-0">Insignes</p>
            <p class="font-weight-light my-0">Caducée, tête de cheval + FMV</p>
        </div>
    </div>

</div>
</div>
<div class="d-none" id="insignes">
    <p> Il y a également d’autres signes significatifs sur les pennes qui n‘ont rien à voir avec les études que l’on fait. Certains de ces insignes sont décernés. </p>
    <div> 
        <ul>
            <li><b>Un chameau</b> à l’endroit signifie que tu es célibataire, à l’envers que tu es pris.</li>
            <li><b>Un éléphant</b> à l’endroit signifie que tu es un gros lourd de la guindaille. S’il est retourné, cela veut dire que tu es tellement lourd que tu ne tiens plus sur tes pattes.</li>
            <li><b>Une abeille</b> est décernée en cas de service rendu à un comité de baptême ou à un membre fondateur.</li>
            <li><b>Le koala</b> signifie que l’on a une fâcheuse tendance à s’endormir en guindaille.</li>
            <li><b>Un crabe</b> est porté lorsque l’on met du temps pour faire ses études.</li>
            <li><b>Un squelette</b> à l’endroit signifie amour de l’anatomie du sexe opposé, à l’envers du même sexe.</li>
            <li><b>Le Bacchus</b> est porté par le roi des bleus (sur fond bleu) par le roi des rois (sur fond rouge). Il est porté à l’envers par le vice-roi.</li>
            <li><b>Une bouteille de champagne</b> lorsque l’on a fait un coma éthylique.</li>
            <li><b>La pièce percée</b> se porte lorsque l’on a passé une nuit au poste.</li>
            <li><b>Deux mains serrées</b> sont décernées par tes amis de guindaille.</li>
        </ul>
    </div>
</div>
<div class="d-none" id="couleurs">
    <div class="d-flex flex-wrap justify-content-center big-container">
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Ingénieur Civil</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Toge</p>
            <p class="font-weight-light my-0">Noire</p>
            <p class="font-weight-bold my-0">Liseré</p>
            <p class="font-weight-light my-0">Vert</p>
            <p class="font-weight-bold my-0">Rabat</p>
            <p class="font-weight-light my-0">Vert</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Informaticien</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Toge</p>
            <p class="font-weight-light my-0">Noire</p>
            <p class="font-weight-bold my-0">Liseré</p>
            <p class="font-weight-light my-0">Rouge</p>
            <p class="font-weight-bold my-0">Rabat</p>
            <p class="font-weight-light my-0">Vert</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Gramme</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Toge</p>
            <p class="font-weight-light my-0">Orange</p>
            <p class="font-weight-bold my-0">Liseré</p>
            <p class="font-weight-light my-0">Noir</p>
            <p class="font-weight-bold my-0">Rabat</p>
            <p class="font-weight-light my-0">Noir</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">ISIL</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Toge</p>
            <p class="font-weight-light my-0">Noire</p>
            <p class="font-weight-bold my-0">Liseré</p>
            <p class="font-weight-light my-0">Blanc-Vert</p>
            <p class="font-weight-bold my-0">Rabat</p>
            <p class="font-weight-light my-0">Blanc</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Archi</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Toge</p>
            <p class="font-weight-light my-0">Bleue</p>
            <p class="font-weight-bold my-0">Liseré</p>
            <p class="font-weight-light my-0">Noir</p>
            <p class="font-weight-bold my-0">Rabat</p>
            <p class="font-weight-light my-0">Noir</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Sciences</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Toge</p>
            <p class="font-weight-light my-0">Mauve</p>
            <p class="font-weight-bold my-0">Liseré</p>
            <p class="font-weight-light my-0">Noir</p>
            <p class="font-weight-bold my-0">Rabat</p>
            <p class="font-weight-light my-0">Noir</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Philo et Lettres</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Toge</p>
            <p class="font-weight-light my-0">Noire</p>
            <p class="font-weight-bold my-0">Liseré</p>
            <p class="font-weight-light my-0">Jaune</p>
            <p class="font-weight-bold my-0">Rabat</p>
            <p class="font-weight-light my-0">Jaune</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Psychologie</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Toge</p>
            <p class="font-weight-light my-0">Noire</p>
            <p class="font-weight-bold my-0">Liseré</p>
            <p class="font-weight-light my-0">Blanc</p>
            <p class="font-weight-bold my-0">Rabat</p>
            <p class="font-weight-light my-0">Blanc-rouge</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Droit</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Toge</p>
            <p class="font-weight-light my-0">Bordeaux</p>
            <p class="font-weight-bold my-0">Liseré</p>
            <p class="font-weight-light my-0">Noir</p>
            <p class="font-weight-bold my-0">Rabat</p>
            <p class="font-weight-light my-0">Noir</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">HEC</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Toge</p>
            <p class="font-weight-light my-0">Bordeaux</p>
            <p class="font-weight-bold my-0">Liseré</p>
            <p class="font-weight-light my-0">Blanc</p>
            <p class="font-weight-bold my-0">Rabat</p>
            <p class="font-weight-light my-0">Bordeaux-blanc</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Médecine</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Toge</p>
            <p class="font-weight-light my-0">Verte</p>
            <p class="font-weight-bold my-0">Liseré</p>
            <p class="font-weight-light my-0">Rouge</p>
            <p class="font-weight-bold my-0">Rabat</p>
            <p class="font-weight-light my-0">Rouge</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Pharmacie</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Toge</p>
            <p class="font-weight-light my-0">Rouge</p>
            <p class="font-weight-bold my-0">Liseré</p>
            <p class="font-weight-light my-0">Vert</p>
            <p class="font-weight-bold my-0">Rabat</p>
            <p class="font-weight-light my-0">Vert</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">ISEPK</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Toge</p>
            <p class="font-weight-light my-0">Verte</p>
            <p class="font-weight-bold my-0">Liseré</p>
            <p class="font-weight-light my-0">Blanc</p>
            <p class="font-weight-bold my-0">Rabat</p>
            <p class="font-weight-light my-0">Blanc</p>
        </div>
    </div>
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:40%;">
        <div class="mr-3"style="width:50%;">
            <p class="font-weight-bold mt-0">Barbou</p>
            <div class=" rounded-circle"style="width:100px;height:100px; background-color:white;"><img style="width:100%; height:100%; object-fit:contain;" src="../img/logo.png" alt="test"></div>
        </div>
        <div style="width:40%;">
            <p class="font-weight-bold my-0">Toge</p>
            <p class="font-weight-light my-0">Verte</p>
            <p class="font-weight-bold my-0">Liseré</p>
            <p class="font-weight-light my-0">Noir</p>
            <p class="font-weight-bold my-0">Rabat</p>
            <p class="font-weight-light my-0">Noir</p>
        </div>
    </div>
    </div>
</div>

@endsection
