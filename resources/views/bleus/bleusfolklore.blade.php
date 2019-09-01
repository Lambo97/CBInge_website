@extends('bleus.layouts.bleusapp')


@section('content')
<h1 class="mb-3">Folklore</h1>
<div class="nav_welcome_action_blue d-flex font-size">
    <p class="w-50 pb-2 mt-5 text-center welcome_active font-weight-bold" id='10' onclick="penne_f()">
        Penne
    </p>
    <p class="w-50 pb-2 mt-5 text-center font-weight-bold" id="11" onclick="insignes_f()">
        Insignes
    </p>
    <p class="w-50 pb-2 mt-5 text-center font-weight-bold" id="12" onclick="agel_f()">
        AGEL
    </p>
    <p class="w-50 pb-2 mt-5 text-center font-weight-bold" id="13" onclick="a_fond_f()">
        A Fond
    </p>
    <p class="w-50 pb-2 mt-5 text-center font-weight-bold" id="14" onclick="chants_f()">
        Chants
    </p>
</div>
<div id="penne">
<p>La penne n’est ni une casquette, ni une calotte. Elle est faite de velours et de plastique. Et pour l’instant tu ne peux que rêver de pouvoir un jour en orner ta petite tête vide. Le port de la penne n’est donc autorisé qu’à ceux qui ont fait et réussi un baptême à Liège.</p>
<p>Les baptisés de Bruxelles et Mons portent cependant, eux, des pennes également, contrairement aux baptisés universitaires catholiques, qui portent des calottes.</p>
<p>La penne se porte sur le cœur lors des chants sacrés (chants facultaires, Valeureux Liégeois et Chant des Wallons), mais aussi lorsque l’on s’apprête à faire un à-fond.
    @if(Auth::user() !== null and Auth::user()->droit < 8)
     Pour ces deux points, toi sale merde de bleu, tu es obligé de mettre ta main ou ton ellipse sur ton cœur, puisque tu ne possèdes pas de penne.</p>
    @endif
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
    <div class="d-flex  m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex  m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width: 250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
    <div class="d-flex m-2 p-3" style="background-color:#484747;width:250px;">
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
<div class="d-none" id="a_fond">
    <p>Comme vous le savez, l’à-fond est une très vieille tradition que l’on trouve déjà au Moyen Age. C’est probablement pour se
         saouler plus vite que l’à-fond fut introduit et non pas pour oublier le goût amer de la bière. Il paraît d’ailleurs qu’au Moyen
          Age la bière était plutôt sucrée. L’à-fond en lui-même n’est donc pas une particularité des guindailles typiquement liégeoises.
           Toute autre ville connaît également la tradition des à-fonds. L’à-fond par sympathie par contre est typiquement liégeois.</p>
    <p>Mais avant de t’apprendre ce qu’est l’à-fond par sympathie, il vaudra mieux t’expliquer ce qu’est l’à-fond.</p>
    <p>Tout d’abord : <strong>l’à-fond ne se fait jamais tout seul.</strong> L’exception à cette règle te concerne. Pour des raisons strictement éducatives,
     le bleu peut faire un à-fond tout seul (ce qui arrivera fréquemment).</p>
    <p>L’à-fond consiste à boire son verre en un seul trait, ce qui veut dire que ton verre ne quittera pas tes lèvres avant que tu ne l’aies
         achevé. Si un bleu reconnaît ne pas pouvoir finir son verre, il le signale en se renversant le reste sur la tête. Il n’y a pas de honte
          à ça, mais c’est quand même du gaspillage. (pense à tous ces pauvres petits Africains qui crèvent de faim !)</p>
    <p>L’à-fond est un moyen de régler les différends quels qu’ils soient. A Liège, on ne se bat pas en guindaille. Même les Vétérinaires commencent
         à comprendre cela et à le respecter. S’il y a une tension quelconque, on la règle à l’à-fond. Ces à-fonds, destinés à préserver la paix en guindaille,
          se font parfois sur vitesse. Mais il ne faut jamais oublier de faire par après un à-fond sympathie, pour calmer la tension.</p>
    <p>A part ces à-fonds, il n’y a que les concours d’à-fonds qui se font sur vitesse. C’est-à-dire les concours de roi des bleus, reine des bleuettes,
         roi des rois, reine des reines, rallye-chopes, des à-fonds relais, des concours intercomités, etc.</p>
    <p>Malgré cela, le bleu est censé manifester sa bonne volonté en se magnant le cul à chaque fois qu’il fait un à-fond. Il faudra également préciser que
         certains poils et plumes préfèrent à-fonner sans être irrités par les regards impertinents des bleus. Dans ce cas, le bleu  baisse les yeux et regarde
          par terre, ou mieux, se retourne.</p>
    <p><strong>L’à-fond par sympathie</strong> que l’on va maintenant t’expliquer est la preuve que politesse et courtoisie peuvent exister en guindaille. L’à-fond par sympathie n’est <strong>pas un concours</strong>.
     L’à-fond par sympathie veut symboliser la sympathie (naissante) qu’il y a entre les guindailleurs. Et pour cela le plus rapide attendra le moins rapide, les verres quitteront les lèvres des affonneurs en
      même temps. Ensuite, les buveurs se font une bise pour se remercier de l’agréable moment passé ensemble. Par conséquent, <strong>un à-fond par sympathie ne se refuse jamais.</strong> Mais si quelqu’un
       n’arrête pas de te chercher en à-fond par sympathie pour te prouver qu’il est le plus fort, il n’a certainement pas compris la règle du jeu, ce qui te permettra de lui refuser cet à-fond.</p>
    <p>Un à-fond par sympathie doit se faire par sympathie uniquement. N’empêche qu’on peut très bien faire un à-fond sympathie avec quelqu’un de très peu sympathique, et ce afin de calmer les tensions
         comme on vient de l’expliquer plus haut. Ce n’est pas de l'hypocrisie, c’est du common sense.</p>
    <p>L’à-fond par sympathie est donc un moyen de contrôler la violence dans les guindailles. La violence est ce qui nuit le plus au folklore qui lui ne peut que profiter d’une meilleure publicité.</p>
    <p>Reste à vous signaler que l’à-fond par sympathie se fait logiquement aussi après chaque A-fond liégeois, fameux chant de guindaille que tu vas bientôt apprendre.</p>
</div>

<div class="d-none" id="chants">
    <p style="text-align:center; background-color:#244395; padding-top:2px; padding-bottom:2px; margin-bottom:10px"> Le chant ingé </p>
    <div>
        C'est nous les étudiants,<br />
        En Ingénieur à Liège,<br />
        La meilleure faculté<br />
        C'est Polytech vous m'entendez,<br />
        La meilleure faculté<br />
        C'est les Sciences-Appliquées<br />
        <br />
        Lors d'mes premières guindailles<br />
        Que j'ai faites dans ma vie<br />
        J'ai appris à chanter, à boire<br />
        Et à ... vous m'entendez<br />
        J'ai appris à chanter, à boire<br />
        Et a baiser.<br />
        <br />
        Chez nous au Val-Benoît<br />
        On fête Saint-Nicolas<br />
        La descente sur la foire<br />
        La Saint-Torê ... vous m'entendez<br />
        Et les Quatres Heures du Val-Benoît<br />
        Ca va de soi.<br />
        <br />
        Vivent les Ingénieurs, ma mère<br />
        Vivent les Ingénieurs<br />
        Ils chauffent les femmes à la vapeur<br />
        Vivent les Ingénieurs.<br />
        <br />
        Et on s'en fout<br />
        Des femmes (ter)<br />
        Et on s'en fout<br />
        Des femmes qui n'ont pas de trou,<br />
        On les aura quand même<br />
        A la foreuse<br />
        Ou au marteau-piqueur,<br />
        C'est la même chose,<br />
        Et on les finira à la ponçeuse,<br />
        Ou à la dynamite,<br />
        C'est plus pratique.
        <br />
        </div>
    <div class="nav_welcome_action_blue d-flex" style="flex-direction:column; width:100%;">
        <p class="mt-5 font-weight-bold chants_titre"> Chants facultaires </p>
        @foreach ($chants_facultaires as $chant)
            <p class="font-weight-light c_titre" id="chant_titre{{$chant->id}}" data-toggle="collapse" href="#chant{{$chant->id}}" role="button" aria-expanded="false" aria-controls="chant{{$chant->id}}" onclick="display({{$chant->id}})">{{$chant->nom}}</p>
            <div class="chants collapse multi-collapse" id="chant{{$chant->id}}">
                {!!$chant->paroles!!}
            </div>
        @endforeach

        <p class="mt-2 font-weight-bold chants_titre"> Chants folkloriques </p>
        @foreach ($chants_folkloriques as $chant)
            <p class="font-weight-light c_titre" id="chant_titre{{$chant->id}}" data-toggle="collapse" href="#chant{{$chant->id}}" role="button" aria-expanded="false" aria-controls="chant{{$chant->id}}" onclick="display({{$chant->id}})">{{$chant->nom}}</p>
            <div class="chants collapse multi-collapse" id="chant{{$chant->id}}">
                {!!$chant->paroles!!}
            </div>
        @endforeach
        <p class="mt-2 font-weight-bold chants_titre"> Chants indispensables </p>
        @foreach ($chants_indispensables as $chant)
            <p class="font-weight-light c_titre" id="chant_titre{{$chant->id}}" data-toggle="collapse" href="#chant{{$chant->id}}" role="button" aria-expanded="false" aria-controls="chant{{$chant->id}}" onclick="display({{$chant->id}})">{{$chant->nom}}</p>
            <div class="chants collapse multi-collapse" id="chant{{$chant->id}}">
                {!!$chant->paroles!!}
            </div>
        @endforeach
    </div>
</div>
</div>


@endsection

@push('scripts')
<script>
    function penne_f(){
        var penne = document.getElementById('10');
        var insignes = document.getElementById('11');
        var couleurs = document.getElementById('12');
        var a_fond = document.getElementById('13');
        var chants = document.getElementById('14');
        var penne_content = document.getElementById('penne');
        var insignes_content = document.getElementById('insignes');
        var couleurs_content = document.getElementById('couleurs');
        var a_fond_content = document.getElementById('a_fond');
        var chants_content = document.getElementById('chants');
        a_fond_content.classList.add('d-none');
        chants_content.classList.add('d-none');
        insignes_content.classList.add('d-none');
        couleurs_content.classList.add('d-none');
        penne_content.classList.remove('d-none');
        a_fond.classList.remove('welcome_active');
        chants.classList.remove('weclome_active');
        insignes.classList.remove('welcome_active');
        couleurs.classList.remove('welcome_active');
        penne.classList.add('welcome_active');
    }
    function insignes_f(){
        var penne = document.getElementById('10');
        var insignes = document.getElementById('11');
        var couleurs = document.getElementById('12');
        var a_fond = document.getElementById('13');
        var chants = document.getElementById('14');
        var penne_content = document.getElementById('penne');
        var insignes_content = document.getElementById('insignes');
        var couleurs_content = document.getElementById('couleurs');
        var a_fond_content = document.getElementById('a_fond');
        var chants_content = document.getElementById('chants');
        a_fond_content.classList.add('d-none');
        chants_content.classList.add('d-none');
        penne_content.classList.add('d-none');
        couleurs_content.classList.add('d-none');
        insignes_content.classList.remove('d-none');
        a_fond.classList.remove('welcome_active');
        chants.classList.remove('weclome_active');
        penne.classList.remove('welcome_active');
        couleurs.classList.remove('welcome_active');
        insignes.classList.add('welcome_active');
    }
    function agel_f(){
        var penne = document.getElementById('10');
        var insignes = document.getElementById('11');
        var couleurs = document.getElementById('12');
        var a_fond = document.getElementById('13');
        var chants = document.getElementById('14');
        var penne_content = document.getElementById('penne');
        var insignes_content = document.getElementById('insignes');
        var couleurs_content = document.getElementById('couleurs');
        var a_fond_content = document.getElementById('a_fond');
        var chants_content = document.getElementById('chants');
        a_fond_content.classList.add('d-none');
        chants_content.classList.add('d-none');
        insignes_content.classList.add('d-none');
        penne_content.classList.add('d-none');
        couleurs_content.classList.remove('d-none');
        a_fond.classList.remove('welcome_active');
        chants.classList.remove('weclome_active');
        insignes.classList.remove('welcome_active');
        penne.classList.remove('welcome_active');
        couleurs.classList.add('welcome_active');
    }
    function a_fond_f(){
        var penne = document.getElementById('10');
        var insignes = document.getElementById('11');
        var couleurs = document.getElementById('12');
        var a_fond = document.getElementById('13');
        var chants = document.getElementById('14');
        var penne_content = document.getElementById('penne');
        var insignes_content = document.getElementById('insignes');
        var couleurs_content = document.getElementById('couleurs');
        var a_fond_content = document.getElementById('a_fond');
        var chants_content = document.getElementById('chants');
        a_fond_content.classList.remove('d-none');
        chants_content.classList.add('d-none');
        insignes_content.classList.add('d-none');
        penne_content.classList.add('d-none');
        couleurs_content.classList.add('d-none');
        a_fond.classList.add('welcome_active');
        chants.classList.remove('weclome_active');
        insignes.classList.remove('welcome_active');
        penne.classList.remove('welcome_active');
        couleurs.classList.remove('welcome_active');
    }
    function chants_f(){
        var penne = document.getElementById('10');
        var insignes = document.getElementById('11');
        var couleurs = document.getElementById('12');
        var a_fond = document.getElementById('13');
        var chants = document.getElementById('14');
        var penne_content = document.getElementById('penne');
        var insignes_content = document.getElementById('insignes');
        var couleurs_content = document.getElementById('couleurs');
        var a_fond_content = document.getElementById('a_fond');
        var chants_content = document.getElementById('chants');
        a_fond_content.classList.add('d-none');
        chants_content.classList.remove('d-none');
        insignes_content.classList.add('d-none');
        penne_content.classList.add('d-none');
        couleurs_content.classList.add('d-none');
        a_fond.classList.remove('welcome_active');
        chants.classList.add('weclome_active');
        insignes.classList.remove('welcome_active');
        penne.classList.remove('welcome_active');
        couleurs.classList.remove('welcome_active');
    }

    function display(id){
        var titre = document.getElementById('chant_titre'+id)
        titre.classList.add('chosen');
        titre.setAttribute("onclick", "hide("+id+")");
    };

    function hide(id){
        var titre = document.getElementById('chant_titre'+id)
        titre.classList.remove('chosen');
        titre.setAttribute("onclick", "display("+id+")");
    };
</script>
@endpush
