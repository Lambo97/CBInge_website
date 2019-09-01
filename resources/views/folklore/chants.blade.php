@extends('layouts.app')

@section('title')
<title> CB Ingé - Folklore </title>
@endsection

@section('content')
<div class="row mb-3">
    <div class="col-md-4 col-sm-12">
        <h1 class="mb-3">Chants</h1>
    </div>
    @if(Auth::check() and Auth::user()->droit == 1)
    <div class="col-md-8 d-flex justify-content-end align-items-center">
        <a class="buttons-green font-weight-bold" href="/folklore/chants/admin">Admin</a>
    </div>
    @endif
</div>
<p style="text-align:center; background-color:#168E33; padding-top:2px; padding-bottom:2px; margin-bottom:10px"> Le chant ingé </p>
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
<div class="nav_welcome_action d-flex" style="flex-direction:column; width:100%;">
    <p class="mt-5 font-weight-bold chants_titre"> Chants facultaires </p>
    @foreach ($chants_facultaires as $chant)
        <p class="font-weight-light c_titre" id="chant_titre{{$chant->id}}" data-toggle="collapse" href="#chant{{$chant->id}}" role="button" aria-expanded="false" aria-controls="chant{{$chant->id}}" onclick="display({{$chant->id}})">{{$chant->nom}}</p>
        <div class="chants collapse multi-collapse" id="chant{{$chant->id}}">
            {!!$chant->paroles!!}
            @if($chant->mp3)
            <br/><mp3-reader mp3="/folklore/chant_mp3/{{$chant->id}}"></mp3-reader>
            @endif
        </div>
    @endforeach
    
    <p class="mt-2 font-weight-bold chants_titre"> Chants folkloriques </p>
    @foreach ($chants_folkloriques as $chant)
        <p class="font-weight-light c_titre" id="chant_titre{{$chant->id}}" data-toggle="collapse" href="#chant{{$chant->id}}" role="button" aria-expanded="false" aria-controls="chant{{$chant->id}}" onclick="display({{$chant->id}})">{{$chant->nom}}</p>
        <div class="chants collapse multi-collapse" id="chant{{$chant->id}}">
            {!!$chant->paroles!!}
            @if($chant->mp3)
            <br/><mp3-reader mp3="/folklore/chant_mp3/{{$chant->id}}"></mp3-reader>
            @endif
        </div>
    @endforeach
    <p class="mt-2 font-weight-bold chants_titre"> Chants indispensables </p>
    @foreach ($chants_indispensables as $chant)
        <p class="font-weight-light c_titre" id="chant_titre{{$chant->id}}" data-toggle="collapse" href="#chant{{$chant->id}}" role="button" aria-expanded="false" aria-controls="chant{{$chant->id}}" onclick="display({{$chant->id}})">{{$chant->nom}}</p>
        <div class="chants collapse multi-collapse" id="chant{{$chant->id}}">
            {!!$chant->paroles!!}
            @if($chant->mp3)
            <br/><mp3-reader mp3="/folklore/chant_mp3/{{$chant->id}}"></mp3-reader>
            @endif
        </div>
    @endforeach
    <p class="mt-1 font-weight-light c_titre" id="122"> Fanchon </p>
    <div class="chants d-none" id="122c">
        Amis, il faut faire une pause<br />
        J'aperçois l'ombre d'un bouchon<br />
        Buvons à l'aimable Fanchon<br />
        Chantons pour elle quelque chose<br />
        <br />
        Refrain:<br />
        <br />
        Et ah !<br />
        C'que son entretien est bon<br />
        Qu'elle a de mérite et de gloire<br />
        Elle aime à rire, elle aime à boire )<br />
        Elle aime à chanter comme nous ) (ter)<br />
        Oui comme nous,<br />
        oui comme nous<br />
        <br />
        Fanchon, quoique bonne chrétienne<br />
        Fut baptisée avec du vin<br />
        Un bourguignon fut son parrain<br />
        Une bretonne sa marraine<br />
        <br />
        Refrain<br />
        <br />
        Fanchon préfère la grillade<br />
        A d'autres mets plus délicats<br />
        Son teint prend un nouvel éclat<br />
        Lorsqu'on lui verse une rasade<br />
        <br />
        Refrain<br />
        <br />
        Fanchon ne se montre cruelle<br />
        Que lorsqu'on lui parle d'amour<br />
        Mais moi si je vais à la cour<br />
        C'est pour m'enivrer avec elle<br />
        <br />
        Refrain
    </div>
    <p class="mt-1 font-weight-light c_titre" id="123"> L'Hôtel Dieu </p>
    <div class="chants d-none" id="123c">
        Au bal de l'Hôtel-Dieu, nom de Dieu ! } (bis)<br />
        Y avait une servante. }<br />
        Elle avait tant d'amants, nom de Dieu !<br />
        Qu'ell' ne savait quel prendre.<br />
        <br />
        Refrain:<br />
        <br />
        Ah, nom de Dieu ! Nom de Dieu, nom de Dieu !<br />
        Cré nom de Dieu, quelle allure !<br />
        Ah, nom de Dieu ! Nom de Dieu, nom de Dieu !<br />
        Ah quelle allure ! Nom de Dieu !<br />
        <br />
        Elle avait tant d'amants, nom de Dieu ! } (bis)<br />
        Qu'ell' ne savait quel prendre. }<br />
        <br />
        Un jour l' intern' de gard', nom de Dieu !<br />
        En mariag' la demande.<br />
        <br />
        Le pèr' ne dit pas non, nom de Dieu !<br />
        La mère est consentante.<br />
        <br />
        Malgré tous les envieux, nom de Dieu !<br />
        Ils coucheront ensemble.<br />
        <br />
        Dans un grand lit carré, nom de Dieu !<br />
        Tout garni de guirlandes.<br />
        <br />
        Aux quatre coins du lit, nom de Dieu !<br />
        Quatr' carabins qui bandent.<br />
        <br />
        La belle est au milieu, nom de Dieu !<br />
        Elle écarte les jambes.<br />
        <br />
        Les règl's lui sort'nt du con, nom de Dieu !<br />
        Encor' toutes fumantes.<br />
        <br />
        Vous tous qui m'écoutez, nom de Dieu!<br />
        Y passeriez la langue.
    </div>
    <p class="mt-1 font-weight-light c_titre" id="124"> La ballade du mutant </p>
    <div class="chants d-none" id="124c">
        Il est né un soir près d'une centrale nucléaire<br />
        D'un père alcoolique et d'une mère étheromane<br />
        Il avait trois jambes, de grands bras tout verts<br />
        Son grand nez tout jaun'luisait comme une banane.<br />
        <br />
        Refrain<br />
        <br />
        Qu'il soit vert ou bleu depuis sa naissance<br />
        Il a les yeux rouges, il est plein d'excroissances<br />
        Qu'il soit asthmatique, gloîtreux ou rampant<br />
        Malheur à celui qui blesse un mutant.<br />
        Dans l'institution où l'on plaça le p'tit chauve<br />
        Il faisait bien rire avec sa douzaine de doigts<br />
        Il faut reconnaître qu'une main tout'mauve<br />
        Ca n'est pas courant sur la tête d'un p'tit gars.<br />
        <br />
        Refrain<br />
        <br />
        Il y avait des jours où c'était dur pour l'pauvr'gosse<br />
        Quand avec une sonde il fallait l'alimenter<br />
        Car je n'vous l'ai pas dit, mais en plus de sa bosse<br />
        Le pauvre chéri était paralysé.<br />
        <br />
        Refrain<br />
        <br />
        Et quand il eut l'âge d'aller vers les filles<br />
        Qu'il voulut sortir sa queue en form'de tir-bouchon<br />
        Sa petit'peau flasque était molle et sans vie<br />
        Et sa couille unique avait l'air d'un ballon.<br />
        <br />
        Refrain
    </div>
    <p class="mt-1 font-weight-light c_titre" id="125"> La brabançonne d'une putain </p>
    <div class="chants d-none" id="125c">
        Je me souviens, lorsque j'étais jeune fille,<br />
        D'un jeune garçon qui passait par bonheur<br />
        Il me trouva si jeune et si gentille<br />
        Qu'il me montra sa gross'pine en chaleur<br />
        Et tout d'un coup, sous mes jupons s'élance<br />
        L'énorme queue qu'il tenait à la main,<br />
        Il déchira mon voile d'innocence<br />
        Voilà pourquoi je me suis fait putain! (ter)<br />
        Je ne sais pas si j'étais déjà coquine<br />
        J'aimais déjà qu'on m'châtouillât l'bouton,<br />
        J'avais goûté de ce bon jus de pine,<br />
        J'avais reçu du foutre dans le con,<br />
        J'avais baisé, je n'étais plus pucelle,<br />
        Je chérissais le métier de putain,<br />
        Plus je baisais plus je devenais belle,<br />
        Voilà pourquoi je me suis fait putain! (ter)<br />
        Quoique je ne sois qu'une fille publique<br />
        J'ai de l'amour et de l'humanité<br />
        Tout citoyen de notr'libre Belgique<br />
        A l'droit d'baiser et d'jouir en liberté,<br />
        Pour de l'argent, le riche aura ma fente<br />
        Le pauvre, lui, peut en jouir pour rien,<br />
        Pour soulager l'humanité souffrante<br />
        Voilà pourquoi je me suis fait putain! (ter)
    </div>
    <p class="mt-1 font-weight-light c_titre" id="126"> La digue du cul </p>
    <div class="chants d-none" id="126c">
        La digue du cul, en revenant de Nantes (bis)<br />
        De Nantes à Montaigu,<br />
        La digue, la digue,<br />
        De Nantes à Montaigu,<br />
        La digue du cul.<br />
        <br />
        Refrain:<br />
        <br />
        Lève la jambe, voilà qu'ça entre, )<br />
        Lève la cuisse, cuisse, cuisse )<br />
        Voilà qu'ça glisse ) (bis)<br />
        Oh! hisse<br />
        <br />
        La digue du cul, je rencontre une belle (bis)<br />
        Qui dormait le cul nu,<br />
        La digue, la digue,<br />
        Qui dormait le cul nu,<br />
        La digue du cul.<br />
        <br />
        La digue du cul, je band'mon arbalète (bis)<br />
        Et la lui fous dans l'cul,...<br />
        <br />
        La digue du cul, la belle se réveille (bis)<br />
        Et dit:"J'ai le diable au cul!",...<br />
        <br />
        La digue du cul, non, ce n'est pas le diable (bis)<br />
        Mais un gros dard poilu,...<br />
        <br />
        La digue du cul, qui bande et qui décharge (bis)<br />
        Et qui t'en fout plein le cul,...<br />
        <br />
        La digue du cul, puisqu'il y est qu'il y reste (bis)<br />
        Et qu'il n'en sorte plus,...<br />
        <br />
        La digue du cul, Il fallut bien qu'il sorte (bis)<br />
        Il est entré bien raide<br />
        La digue, la digue,<br />
        Il en sortit menu,<br />
        La digue du cul.
    </div>
    <p class="mt-1 font-weight-light c_titre" id="127"> La femme du Roulier </p>
    <div class="chants d-none" id="127c">
        Il est minuit,<br />
        La femme du roulier<br />
        S'en va de porte en porte<br />
        De taverne en taverne,<br />
        Pour chercher son mari<br />
        Tireli<br />
        Avec une lanterne<br />
        (Les trois derniers en bis).<br />
        <br />
        Madam' l'hotesse,<br />
        Où donc est mon mari ?<br />
        Ton mari est ici<br />
        Il est dans la soupente,<br />
        Il y prend ses ébats,<br />
        Tirela,<br />
        Avec notre servante<br />
        (Les trois derniers en bis).<br />
        <br />
        Cochon de mari,<br />
        Pilier de cabaret,<br />
        Tu es là qui te saoule<br />
        Et qui fais la ripaille,<br />
        Pendant que tes enfants,<br />
        Tirelan,<br />
        Sont couchés sur la paille<br />
        (Les trois derniers en bis).<br />
        <br />
        Et toi la belle,<br />
        Aux yeux de merlan frit,<br />
        Tu m'as pris mon mari,<br />
        Je vais te prendre mesure<br />
        D'un' bonne culott' de peau,<br />
        Tirelo,<br />
        Qui ne craint pas l'usure<br />
        (Les trois derniers en bis).<br />
        <br />
        Tais-toi ma femme,<br />
        Tais-toi tu me fais chier,<br />
        Dans la bonne société,<br />
        Est-ce ainsi qu'on s' comporte?<br />
        J'te fous mon pied dansl'cul,<br />
        Tirelu,<br />
        Si tu ne prends pas la porte<br />
        (Les trois derniers en bis).<br />
        <br />
        Pauvres enfants,<br />
        Mes chers petits enfants,<br />
        Plaignez votre destin,<br />
        Vous n'avez plus de père.<br />
        Je l'ai trouvé couché<br />
        Tirelé,<br />
        Avec une autre mère<br />
        (Les trois derniers en bis).<br />
        <br />
        Il a raison<br />
        S'écrient les enfants,<br />
        D'aller tirer son coup,<br />
        avec la celle qui l'aime,<br />
        Et quand nous serons grands,<br />
        Tirelan,<br />
        nous ferons tous de même<br />
        (Les trois derniers en bis).<br />
        <br />
        Méchants Enfants,<br />
        Sacrés cochons d'enfants,<br />
        Sécrie la mère furieuse,<br />
        Et pleine de colère,<br />
        Vous serez tous cocu,<br />
        Tirelu,<br />
        Comme le fut votre père<br />
        (Les trois derniers en bis).
    </div>
    <p class="mt-1 font-weight-light c_titre" id="128"> La Javanaise </p>
    <div class="chants d-none" id="128c">
        Quand pour la première fois Julot encula<br />
        Une Javanaise<br />
        Il sentit sur son doigt quelque chose de gras<br />
        Comme de la mayonnaise<br />
        Son con était si long, si large et profond,<br />
        Si plein de liquide<br />
        Qu'il avait l'impression que son saucisson<br />
        Nageait dans le vide<br />
        <br />
        Refrain:<br />
        <br />
        C'est la Java, la bite à papa<br />
        Les couilles à Julot oh oh<br />
        Sa petite casquette, ses grosses roupettes<br />
        Et son p'tit mégot<br />
        Viens mon landru, mon tordu<br />
        Fous-la moi dans l'cul<br />
        Viens mon trésor, mon Nestor<br />
        Pousse un peu plus fort<br />
        <br />
        Mon père était branleur, astiqueur de bites<br />
        Dans un bal musette<br />
        Ma mère était putain, faisait des pompiers<br />
        A tous ceux d'l'orchestre<br />
        Non ! Tu ne verras plus les poils de mon cul<br />
        J'en ai fait des brosses<br />
        A vingt francs du kilo, c'est du bon boulot<br />
        Pour nourrir les gosses<br />
        <br />
        Refrain
    </div>
    <p class="mt-1 font-weight-light c_titre" id="129"> Le cordonnier Pamphyle </p>
    <div class="chants d-none" id="129c">
        Le cordonnier Pamphyle<br />
        A élu domicile<br />
        Près d'un couvent de filles<br />
        Et bien, il s'en trouva<br />
        (Ah!Ah!Ah!Ah! )<br />
        (Et bien il s'en trouva ) (bis)<br />
        <br />
        Car la gent monastique<br />
        Jettait dans sa boutique<br />
        Des ognons et des chiques<br />
        Restes de ses repas.<br />
        <br />
        Un jour la soeur Charlotte<br />
        S'asticotait la motte<br />
        Avec une carotte<br />
        Grosse comme le bras.<br />
        <br />
        Mais quelque effort qu'elle fasse<br />
        En vain elle se masse<br />
        Ell's'astiqu'la connasse<br />
        Le foutre ne vient pas.<br />
        <br />
        Mais comm'tout a son terme<br />
        Enfin jaillit le sperme<br />
        Son con s'ouvre et se ferme<br />
        Et elle déchargea.<br />
        <br />
        Alors toute contente<br />
        Ell'retir' de sa fente<br />
        La carotte écumante<br />
        Et ell' la rejetta.<br />
        <br />
        Par un hasard comique<br />
        La carotte impudique<br />
        Tomba dans la boutique<br />
        Du cordonnier d'en bas.<br />
        <br />
        Cré nom de dieu, quelle chance,<br />
        Elle est à la sauc'blanche,<br />
        Bourrons-nous en la panse.<br />
        Et il la boulotta.<br />
        <br />
        Cré nom de Dieu Fifine<br />
        Cette carott'sent l'urine,<br />
        Elle a servi de pine<br />
        Et il la dégueula.
    </div>
    <p class="mt-1 font-weight-light c_titre" id="130"> Le Fusil </p>
    <div class="chants d-none" id="130c">
        J'avais quinze ans et la passion des armes,<br />
        Un beau fusil tout neuf et tout luisant.<br />
        J'aurais voulu connaître les alarmes<br />
        Et les combats de tout soldat vaillant.<br />
        Mon père était de la garde civique,<br />
        Pour son ardeur on l'admirait beaucoup.<br />
        Ah mes amis ah quel plaisir unique, }<br />
        Quand on voyait papa tirer son coup} BIS<br />
        <br />
        Un beau matin je lui dis petit père,<br />
        J'ai mes quinze ans et j'voudrais essayer<br />
        Le beau fusil qu'naguère avec ma mère<br />
        Tu mis neuf mois à m'pouvoir fabriquer.<br />
        Mon père me dit d'une voix martiale<br />
        " Ta noble ardeur me réjouit beaucoup,<br />
        Voici mon fils, voici toujours cinq balles, }<br />
        Va-t-en mon fils, va-t-en tirer ton coup " } BIS<br />
        <br />
        En ce temps là vint un tir à la mode,<br />
        Qui s'établit je crois rue du persil,<br />
        Je m'en fut donc vers cet endroit commode<br />
        Pour essayer mon excellent fusil.<br />
        Toutes les cibles étaient belles et roses,<br />
        Mon beau fusil se dressa tout à coup.<br />
        Je déchargeai et je fis une rose, }<br />
        A mes amis qu'c'est bon le premier coup. } BIS<br />
        <br />
        En peu de temps ma renommée fut grande,<br />
        De nobles dames se disputaient l'honneur<br />
        De chatouiller avec leurs mains fringantes,<br />
        Le beau fusil d'un si parfait chasseur.<br />
        Toutes les nuits j'étais à l'exercice,<br />
        Ma cartouchière n'était jamais à bout.<br />
        Mais maintenant j'use d'un artifice, }<br />
        Je ne veux plus par nuit tirer qu'un coup. } BIS<br />
        <br />
        Et maintenant l'beau fusil qui naguère,<br />
        A de si haut faits si souvent abusé<br />
        Repose en paix au musée de la guerre,<br />
        Où il surmonte deux vieux boulets usés.<br />
        Il a connu tant de chaudes alarmes<br />
        Et tant de combats livrés coup sur coup<br />
        Que si parfois il verse encore une larme, }<br />
        C'est par regret de n'plus tirer son coup. } BIS
    </div>
    <p class="mt-1 font-weight-light c_titre" id="131"> Le Légionnaire </p>
    <div class="chants d-none" id="131c">
        Il est sur la terre africaine<br />
        Un régiment dont les soldats, dont les soldats<br />
        Sont tous des gars qui n'ont pas de veine<br />
        C'est la légion et nous voilà, oui nous voilà<br />
        Pour ceux qui aiment la discipline<br />
        Faut être passé par Biribi, par Biribi<br />
        Avoir goûté de la praline<br />
        Et travaillé du bistouri, du bistouri<br />
        <br />
        Refrain:<br />
        <br />
        Et on s'en fout, et après tout qu'est ce que ça fout<br />
        En marchant sur la grand-route<br />
        Souviens-toi, oui souviens-toi, ah ah ah<br />
        Les anciens l'ont fait sans doute<br />
        Avant toi, oui avant toi, ah ah ah<br />
        De Gabbès à Ténérife<br />
        De Tanger à Tombouctou<br />
        Sac au dos dans la poussière<br />
        Marchons les légionnaires<br />
        <br />
        Refrain<br />
        <br />
        J'ai vu mourir un pauvre gosse<br />
        Un pauvre gosse de dix-huit ans, de dix-huit ans<br />
        Tué par une balle atroce<br />
        Il est mort en criant maman, criant maman<br />
        Je lui ai fermé les paupières<br />
        Recueilli son dernier soupir, dernier soupir<br />
        J'ai écrit à sa pauvre mère<br />
        Qu'un légionnaire, ça sait mourir, ça sait mourir<br />
        <br />
        Refrain<br />
        <br />
        Et puisqu'on n'a jamais eu d'veine<br />
        Pour sûr qu'un jour on y crèvera, on y crèvera<br />
        Sur cette putain de terre africaine<br />
        Enterrés sous le sable chaud, le sable chaud<br />
        Avec pour croix une baïonnette<br />
        Plantée là où on est tombés, on est tombés<br />
        Qui voulez-vous qui nous regrette<br />
        Puisqu'on est tous des réprouvés, des réprouvés
    </div>
    <p class="mt-1 font-weight-light c_titre" id="132"> Le plaisir des dieux </p>
    <div class="chants d-none" id="132c">
        Du dieu Vulcain, quand l'épouse mignonne<br />
        Va boxonner loin de son vieux sournois,<br />
        Le noir époux, que l'amour aiguillone,<br />
        Tranquillement se polit le chinois.<br />
        Va-t-en, dit-il à sa fichue femelle,<br />
        Je me fous bien de ton con chassieux :<br />
        De mes cinq doigts, je fais une pucelle,<br />
        Masturbons-nous, c'est le plaisir des dieux.<br />
        <br />
        Bah ! Laissons-lui ce plaisir ridicule,<br />
        Chacun, d'ailleurs, s'amuse à sa façon :<br />
        Moi, je préfèr' la manière d'Hercule,<br />
        Jamais sa main ne lui servit de con.<br />
        Le plus sal' trou, la plus vieille fendasse,<br />
        Rien n'échappait à son vit glorieux.<br />
        Nous serons fiers de marcher sur tes traçes<br />
        Baisons, baisons, c'est le plaisir des dieux.<br />
        <br />
        Du dieu Bacchus quand, accablé d'ivresse,<br />
        Le vit mollit et sur le con s'endort,<br />
        Soixante neuf et le vit se redresse;<br />
        Soixante neuf ferait bander un mort.<br />
        Ô clitoris, ton parfum de fromage<br />
        Fait regimber nos engins glorieux.<br />
        A ta vertu, nous rendons tous hommage :<br />
        Gamahuchons, c'est le plaisir des dieux.<br />
        <br />
        Pour Jupiter, façon vraiment divine,<br />
        Le con lui pue, il aime le goudron ;<br />
        D'un moule à merde, il fait un moule à pine<br />
        Et bat le beurre au milieu de l'étron.<br />
        Cette façon est cruellement bonne<br />
        Pour terminer un gueuleton joyeux:<br />
        Après l' dessert, on s'encule en couronne,<br />
        Enculons-nous, c'est le plaisir des dieux. <br />
        <br />
        Quand à Pluton, avec sa large panse,<br />
        Le moindre effort lui semble fatiguant;<br />
        Aussi, veut-il, sans craindre la dépense,<br />
        Faire sucer son pénis arrogant.<br />
        Et nous, rêvant aux extases passées,<br />
        Tout languissants, réjouissons nos yeux<br />
        En laissant faire une amante empressée,<br />
        Laissons sucer, c'est le plaisir des dieux.<br />
        <br />
        Au reste, amis, qu'on en fasse à sa tête,<br />
        Main, bouche, con, cul, au plaisir tout est bon.<br />
        Sur quelqu' autel qu'on célèbre la fête,<br />
        Toujours, là-haut, on est sûr du pardon.<br />
        Foutre et jou-ir, voilà l'unique affaire,<br />
        Foutre et jou-ir: voilà quels sont nos voeux.<br />
        Foutons, amis, qu'importe la manière,<br />
        Foutons, foutons, c'est le plaisir des dieux.
    </div>
    <p class="mt-1 font-weight-light c_titre" id="133"> Les quatre jouissances </p>
    <div class="chants d-none" id="133c">
        La femme qui pète au lit<br />
        Qui pète au lit<br />
        Eprouve quatre jouissances,<br />
        Elle bassine son lit<br />
        Bassine son lit<br />
        Elle soulage sa panse<br />
        Elle entend son cul qui chante }<br />
        Elle emmerde son mari } Bis<br />
    </div>
    <p class="mt-1 font-weight-light c_titre" id="134"> Ma bite </p>
    <div class="chants d-none" id="134c">
        Ma bite, ma bite (bis)<br />
        Mon ventre, mon ventre (bis)<br />
        Et quand je bande (bis)<br />
        Ma bite elle touche mon ventre (bis)<br />
        <br />
        Ma bite, ma bite (bis)<br />
        Mes genoux, mes genoux (bis)<br />
        Et quand je bande mou (bis)<br />
        Ma bite elle touche mes genoux (bis)<br />
        <br />
        Ma bite, ma bite (bis)<br />
        Mon cul, mon cul (bis)<br />
        Et quand je bande plus (bis)<br />
        Ma bite elle touche mon cul (bis)<br />
        <br />
        Ma bite, ma bite (bis)<br />
        La mayonnaise (bis)<br />
        Et quand je baise (bis)<br />
        Ma bite elle crache la mayonnaise (bis)<br />
        <br />
        Ma bite, ma bite (bis)<br />
        Mon pull, mon pull (bis)<br />
        Quand j’éjacule (bis)<br />
        Ma bite elle mouille mon pull (bis)
    </div>
    <p class="mt-1 font-weight-light c_titre" id="135"> Ma femme est morte </p>
    <div class="chants d-none" id="135c">
        Jean l'autre soir, en montant l'escalier (bis),<br />
        Trouva sa femme étendue sur l'palier (bis),<br />
        Ohé, portier ! Ma femme est morte !<br />
        Venez, venez vit'pour me la chercher,<br />
        Ou bien j' la fous derrièr' la porte.<br />
        <br />
        Refrain:<br />
        <br />
        Car c'était ell' qui foutait le chahut à la maison<br />
        La guenon, la poison,<br />
        Elle est morte !<br />
        Elle ne mettra plus de l'eau dedans mon verre<br />
        La guenon, la poison,<br />
        Elle est morte !<br />
        <br />
        Puis il s'en fut réveiller les copains (bis)<br />
        Fit tant de potin qu'il fit lever Martin: (bis)<br />
        Eh les copains ! ma femme est morte !<br />
        C'est moi qui vous paye la goute demain matin<br />
        Si vous venez lui faire escorte.<br />
        <br />
        Refrain<br />
        <br />
        Puis il s'en vint trouver Monsieur l' curé (bis)<br />
        Qui ronflait fort sous bon bonnet carré: (bis)<br />
        Ohé, curé ! Ma femme est morte !<br />
        Donnez, donnez-lui toutes vos oraisons<br />
        Et puis que le diable l'emporte.<br />
        <br />
        Refrain<br />
        <br />
        Puis il s'en fut trouver le fossoyeur (bis)<br />
        Qui dans une fosse dormait à la fraicheur: (bis)<br />
        Oh fossoyeur ! Ma femme est morte !<br />
        Creusez, creusez vite un trou large et profond<br />
        De peur que la garce n'en sorte.<br />
        <br />
        Refrain<br />
        <br />
        Puis Jean s'en fut retrouver sa moitié (bis)<br />
        La garce de femme avait réssucité: (bis)<br />
        Ô Aglaé, tu n'es pas morte !<br />
        Elle lui répondit, le pot de chambre au poing<br />
        "Voici la tisane que j' t'apporte".<br />
        <br />
        Dernier refrain:<br />
        <br />
        Et comme toujours, je fouttrai le chahut à la maison<br />
        Ta guenon, ta poison,<br />
        N'est pas morte !<br />
        Je mettrai encore de l'eau dedans ton verre<br />
        Ta guenon, ta poison,<br />
        N'est pas morte !
    </div>
    <p class="mt-1 font-weight-light c_titre" id="136"> Mon ancêtre Gurdil </p>
    <div class="chants d-none" id="136c">
        Voici l'histoire d'un nain capable<br />
        De courir vite et de voyager loin<br />
        Dans son épopée formidable<br />
        Nous le suivrons, une bière à la main !<br />
        <br />
        Refrain :<br />
        Nous sommes les nains sous la montagne<br />
        On creuse le jour, on boit la nuit <br />
        Et on aime pas ceux dla surface ! <br />
        <br />
        Un jour mon ancêtre Gurdil<br />
        Fut envoyé creuser dans la forêt<br />
        Y'avait soit disant du mithril<br />
        Si y'en avait, on sait pas où il s'trouvait !<br />
        Il fit sa cabane en bordure<br />
        D'un bois touffu peuplé d'elfes sylvains<br />
        Des gens qui bouffent de la verdure<br />
        Evidemment, ça n'fait pas des bons voisins !<br />
        <br />
        (Refrain)<br />
        <br />
        "Arrière tu n'es pas bienvenue !"<br />
        Lui dirent les elfes, en lui jetant des pierres<br />
        Voyant que tout était foutu<br />
        Il prit la fuite, en suivant la rivière<br />
        Il fut recueilli par les fées<br />
        Ondines bleues, bullant sur le rivage<br />
        De l'eau de pluie lui fut donnée<br />
        Il recracha WAA ! Tout dans leur visage !<br />
        <br />
        (Refrain)<br />
        <br />
        Courant à travers les fougères<br />
        Il arriva près d'un village humain<br />
        Bien sûr qu'on y vendait dla bière<br />
        Mais aucun homme ne voulait servir un nain !<br />
        Gurdil massacra la patron<br />
        D'une taverne, à coups de tabourets ! Aïe !!<br />
        Puis il rentra à la maison<br />
        Et de la mine, il ne repartit jamais !<br />
        <br />
        (Refrain)<br />
        <br />
        Amis restons bien à l'abri<br />
        Mangeons, buvons dans nos maisons de pierres<br />
        Là haut, c'est peuplé d'abrutis<br />
        ALLEZ PATRON ! Ressers donc une bière !<br />
        <br />
        (Refrain)(bis)
    </div>
    <p class="mt-1 font-weight-light c_titre" id="137"> Tape ta pine </p>
    <div class="chants d-none" id="137c">
        En revenant de la foire,<br />
        De la foire à Perpignan,<br />
        J'ai rencontré trois jeunes filles,<br />
        Tape ta pine,<br />
        Trois jeune filles et trois garçons,<br />
        Tape ta pine contre mon con.<br />
        J'ai rencontré trois jeunes filles,<br />
        Trois jeunes filles et trois garçons,<br />
        Les garçons disaient aux filles<br />
        Tape ta pine,<br />
        Les filles disaient aux garçons<br />
        Et tape ta pine contre mon con.<br />
        <br />
        Ah si vous étiez moins bêtes,<br />
        Vous soulevriez nos jupons,<br />
        <br />
        Vous y verriez une bête,<br />
        Plus poilue qu'un hérisson,<br />
        <br />
        Mettez-y une pine bien raide,<br />
        Enfoncez-là jusqu'au fond,<br />
        <br />
        Les coillons restent à la porte,<br />
        Et dansent le guignollon, <br />
        <br />
        Trois poils de cul leur demandent,<br />
        Mais que faites-vous là couillons,<br />
        <br />
        Nous attendons notre maître,<br />
        Qu'est rentré dans cette maison,<br />
        <br />
        Il y est entré bien raide,<br />
        Il en sortira couillon,<br />
        <br />
        Plein de foutre et plein de merde,<br />
        Et bouffé par les morpions.
    </div>
    <p class="d-none" id="first"></p>
    <div class="d-none" id="firstc"></div>
</div>


@endsection

@push('scripts')
    <script>
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