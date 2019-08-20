@extends('layouts.app')

@section('title')
<title> CB Ingé - Folklore </title>
@endsection

@section('content')
<script src="{{ asset('/js/chants.js') }}" defer></script>
<h1 class="mb-3">Folklore - Chants</h1>
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
    <p class="mt-1 font-weight-light c_titre" id="100"> Architecture </p>
    <div class="chants d-none" id="100c"> 
        Les architectes ont des grosses couilles et des pines en forme de crayon<br />
        Et quand elle est en érection<br />
        C’est dans vos cons qu’elle se termine !<br />
        <br />
        Et satchez vos longs pis (bis)<br />
        Archi va les spâtchis (bis)<br />
        <br />
        Refrain<br />
        Plus d'équerres, de la bière<br />
        Et une bonne biture pour l'architecture<br />
        Plus d'équerres, de la bière<br />
        Et une bonne virée au Carré<br />
        <br />
        Et percez 'cor vos fûts (bis) <br />
        Archi a d'ja tout bu (bis)<br />
        <br />
        Refrain
    </div>
    <p class="font-weight-light c_titre" id="101"> Barbou </p>
    <div class="chants d-none" id="101c"> 
        A l'hôpital, si tu cherches une maîtresse<br />
        Aux seins pointus, et cul généreux<br />
        Nos petites stagiaires, sont vraiment des tigresses<br />
        Elles savent y faire, pour redresser un noeud<br />
        Si par hasard tu deviens syphilitique<br />
        T'as un chou-fleur à la place de la queue<br />
        EIN, ZWEI<br />
        Ne t'en fais pas, c'est psychosomatique<br />
        Les gars de l'école ont tous la verge en feu<br />
        Et qu'en guindaille, l'on remplisse nos verres<br />
        Boire et chanter, c'est ce qu'on a trouvé de mieux<br />
        EIN, ZWEI<br />
        Comme thérapie, c'est la bière qu'on préfère<br />
        Quand on est saoul que l'on soigne le mieux...<br /><br/>
        Barbou tjs saoul, tjs Debout !
    </div>
    <p class="font-weight-light c_titre" id="102"> Dentisterie </p>
    <div class="chants d-none" id="102c"> 
        Claquant des dents, un étudiant franchi les portes de Bavière<br />
        Serrant les fesses, serrant les dents, il pétait de peur du derrière<br />
        Sur le fauteuil, la dentiste lui dit sans aucune compassion<br />
        Qu'il n'y a plus d'anesthésique pour son affreuse opération (bis)<br />
        <br />
        On s'en fout bien dit la poison, je tiens ici la solution<br />
        La voilà à califourchon pour lui faire une fellation<br />
        Et au moment de l'extase, dans un cri de rage sauvage<br />
        Elle lui arrache vite une dent, ce qui le fait crier davantage (bis)<br />
        <br />
        Et la chienne chirurgienne, la bouche, le ventre bien remplis<br />
        Fit tant et si bien des siennes qu'elle lui tarit bientôt le vît<br />
        La pine flasque, tout édenté, le sourire aux lèvres ahuri<br />
        Votre étudiant s'en est allé gonfler la caisse de l'INAMI (bis)
    </div>
    <p class="font-weight-light c_titre" id="103"> Droit </p>
    <div class="chants d-none" id="103c"> 
        De tous les cercles facultaires<br />
        Le cercle de droit oui est de loin, oui est de loin!<br />
        Le meilleur de ceux qui sont sur terre<br />
        Car tous ces gars aiment le bon vin, aiment le bon vin.<br />
        <br />
        Toutes les filles même les nonnettes<br />
        rêvent d'avoir nos pines en mains, nos pines en mains<br />
        Elles rêvent d'une nuit en tête-à-tête<br />
        Tant nos braquemarts érectent au loin, érectent au loin !<br />
        <br />
        Oui tous les soirs on fait guindaille, on fait ripaille, aille, aille, aille !<br />
        La calotte se désespère, car elle voit qu'au cercle de droit, ah, ah, ah<br />
        L'paradis il est sur terre, et non pas dans l'au-delà, ah, ah, ah<br />
        En tout lieux et à toute heure, au bordel ou à la F A C U L T E , hé !<br />
        Pine en main c'est notre devise, que tout le monde se le dise !<br />
        <br />
        Et ric, et rac, on va s'quetter l'baraque<br />
        Et rac, et ric, on va s'quetter l'boutique<br />
        <br />
        Chahutez ohé, chahutez ohé,<br />
        C'est nous le CD, c'est nous le CD<br />
        Chahutez ohé, chahutez ohé<br />
        c'est nous le CD de lidge, Ohé !
    </div>
    <p class="font-weight-light c_titre" id="104"> Gramme </p>
    <div class="chants d-none" id="104c"> 
        Nous sommes fils de Gramme<br />
        Ingénieurs nés pour ripailler<br />
        Le Toré et notre Perron<br />
        Avec fièrté nous y croyons<br />
        <br />
        Du biberon coulait notre bière<br />
        Jupiler à vie nous te boirons<br />
        Sur la foire nous y descendrons<br />
        La Saint-Toré nous y serons<br />
        <br />
        Gramme, Guindaille!<br />
        I.G., Santé!<br />
        Ingés, Guerriers!<br />
    </div>
    <p class="font-weight-light c_titre" id="105"> HEC </p>
    <div class="chants d-none" id="105c"> 
        En notre Wallonie, il est une faculté,<br />
        Où l'on aime les filles qui aiment se faire baiser<br />
        Dans les guindailles, dans les broussailles<br />
        <br />
        Les Gestionnaires de Liège sont là<br />
        Et on branle à tout va (bis)<br />
        <br />
        Dans la Cité Ardente, on se fait remarquer,<br />
        Les bières nous attendent, on n'arrête pas d'pinter<br />
        Que l'aube se lève, qu'on ait la crève<br />
        <br />
        Les Gestionnaires de Liège sont là<br />
        Et on n' nous oublie pas ! (bis)<br />
        <br />
        Qu'elles soient putes ou pucelles, nous on aime leur con<br />
        Amène tes mamelles, on va t'faire un suçon<br />
        Z'aient la vérole, la p'tite mijole<br />
        <br />
        Les Gestionnnaires de Liège sont là<br />
        Et on baise à tout va ! (bis)
    </div>
    <p class="font-weight-light c_titre" id="106"> ISIL </p>
    <div class="chants d-none" id="106c"> 
        Refrain:<br />
        <br />
        Pucelle, pucelle,<br />
        Un méca ou un bio<br />
        C'est du pareil au même<br />
        Pour t'enfiler sans gêne<br />
        Qu'importe le tempo<br />
        <br />
        Voici les ingénieurs, les meilleurs guindailleurs<br />
        Ni les femmes, ni la bière ne leur font jamais peur<br />
        Quant on a le gosier sec, la carence Jupiler<br />
        On s'rue au Polytech se noyer dans la bière<br />
        <br />
        Refrain<br />
        <br />
        Pas besoin d'mathématique pour calculer not' coup<br />
        Même plein comme des bourriques on trouve toujours le trou<br />
        Pas besoin d'informatique pour programmer nos femmes<br />
        Car chaque fois qu'on les nique elles crient plus fort qu'à Gramme<br />
        <br />
        Refrain<br />
        <br />
        Et quand vient l'heure fatale d'aller se coucher<br />
        On retire not' futal mais encore pour baiser<br />
        La mécanique des fluides nous apprend le mouvement<br />
        Les liquides fétides de l'orgasme gluant<br />
        Bèvons pô li, pô nin l'rouvi (bis)
    </div>
    <p class="font-weight-light c_titre" id="107"> Informatique </p>
    <div class="chants d-none" id="107c"> 
        On n'se prendra pas comme les autre facultés<br />
        Qui se disent les meilleures de l'Université<br />
        Nous on se contentera de guindailler<br />
        Et de s'amuser toute la journée<br />
        Telle est la devise des vrais infos<br />
        <br />
        Chez nous à Montefiore, on fait souvent la foire<br />
        Même entre deux programmes, on n'arrête pas de boire<br />
        Car c'est Ribbens qui nous a initiés<br />
        En piliers de comptoir, il nous a changés<br />
        Telle est la devise des vrais infos<br />
        <br />
        Nous ne vous parlerons pas de tous les Infos<br />
        Ce couplet est dédié à notre ami Nico<br />
        Jamais nous ne pourrons t'oublier<br />
        Toujours nous trinqu'rons à ta santé<br />
        Tel était le plus gland des Infos.<br />
        <br />
        On s'fait raser en sortant avec une bleuette<br />
        Et pour éviter d'avoir mal à la quequette<br />
        On ne les baise qu'après le baptême<br />
        Et en attendant on se tape tous les mêmes<br />
        Telle est la devise des vrais infos<br />
        <br />
        La guindaille des infos se résume en ces mots :<br />
        Boire et clasher, dégueuler et baiser sur le pot<br />
        Pour justifier tous nos a-fonds<br />
        On n'arrête pas de faire des affronts<br />
        Telle est la guindaille des vrais infos<br />
        <br />
        Nos aieux guindaillaient, buvaient et procréaient<br />
        Ils ne pensaient pas que des gens comme nous naîtraient<br />
        Ils sont tous devenus complètement fous<br />
        En nous voyant picoler comme des trous<br />
        Tels furent les aieux des vrais infos<br />
        <br />
        C'est en 84 qu'ils se sont réunis<br />
        Au pied d'une bouteille tout à fait pleine de whisky<br />
        Il va de soi qu'ils l'ont toute vidée<br />
        Et le premier comité fut créé<br />
        Ils furent les premiers des vrais infos !
    </div>
    <p class="font-weight-light c_titre" id="108"> Ingénieur Civil </p>
    <div class="chants d-none" id="108c"> 
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
    </div>
    <p class="font-weight-light c_titre" id="109"> ISEPK </p>
    <div class="chants d-none" id="109c"> 
        De retour du Japon, notre ami Pieron<br />
        A trouvé  Bonzaï tout juste à sa taille<br />
        Le toubib Jean-Mi, les cheveux en pétard<br />
        Ne fait pas de chichis pour avoir à boire<br /> <br />
        Refrain:<br />
        Oui à l'ISEP,<br />
        Y a des costauds comme des taurreaux<br />
        Y a plus personne qui nous effraie<br />
        On est des bêtes<br />
        Qui çà ?<br />
        Les profs de gym<br />
        Où çà ?<br />
        A l'ISEP liégeois<br />
        <br />
        On préfère la bière aux barres parallèles<br />
        Boire la nuit entière au sport à l'appel<br />
        Les poutr' et les balles,on en a plein l'dos<br />
        On préfère êtr'sales, gueuler comme des sots v<br /><br />
        Refrain <br /><br />
        On a d’vrais kinés qui sont d’bons masseurs <br />
        Mais préfèrent baiser le p’tit cul d’ma soeur <br />
        Ils vous guériront d’tous vos p’tits bobos <br />
        Mais jamais n’boiront une seule goutte d’eau <br /><br />
        Refrain
    </div>
    <p class="font-weight-light c_titre" id="110"> Médecine </p>
    <div class="chants d-none" id="110c"> 
        De l'hôpital, vieille pratique<br />
        Ma maîtresse est une putain<br />
        Dont le vagin syphilitique<br />
        Infeste le quartier latin<br />
        Mais moi, vieux pilier de l'école,<br />
        Je l'aime à cause de son mal<br />
        Oui ! de son mal !<br />
        Nous sommes unis par la vérole<br />
        Mieux que par un lien conjugal (ter)<br />
        <br />
        Nous transformons en pharmacie<br />
        Les lieux sacrés de nos amours<br />
        La valériane et la charpie<br />
        S'y manipulent tour à tour<br />
        Tandis qu'avec de l'iodure<br />
        Ma femme se fait des injections<br />
        Des injections !<br />
        Avec du bromure de mercure<br />
        Moi je me fait des fric-tions (ter)<br />
        <br />
        Ses cuisses ont des reflets verdâtres,<br />
        Ses seins sont flasques et flétris<br />
        Au sommet, les morpions noirâtres<br />
        Sur le fumier, ont fait leur nid<br />
        Mais moi, j'aime mon amante<br />
        Et je voudrais jusqu'à demain<br />
        Jusqu'à demain !<br />
        Lécher de mes lèvres brûlantes<br />
        Les chancres de son vieux vagin (ter)<br />
        <br />
        Et quand viendra l'heure dernière<br />
        Quand nous s'rons bouffés des morpions<br />
        Unis dans un dernier ulcère<br />
        Ad patres gaiement nous irons<br />
        Nous adresserons une supplique<br />
        Afin qu'nos corps soient exposés<br />
        Oui ! exposés !<br />
        Dans un musée pathologique<br />
        A la section des vérolés (ter)
    </div>
    <p class="font-weight-light c_titre" id="111"> Pharmacie </p>
    <div class="chants d-none" id="111c"> 
        En avant, en marchant, en gueulant-ant-ant <br />
        C'est nous les pharmaciens qui venons vous trouver<br />
        Du fond des facultés pour vous administrer<br />
        Les capot's, les forceps, la poudre à faire bander<br />
        Et la vas'lin Codex pour mieux faire pénétrer<br />
        La pine dans l'con comme un couteau dans le beurre<br />
        Les impuissants bais'ront avec ardeur<br />
        Et si quelqu'un nous traite d'épicier<br />
        Son cul f'ra connaissance avec not' pied, avec not' pied<br />
        <br />
        Baisons ma mère, devant, derrière<br />
        Les p'tites pucelles, les vieilles maqu'relles<br />
        Les filles de rien, c'est nous les pharmaciens<br />
        <br />
        Les litteraires sont des andouilles,<br />
        Les C.d.S. sont des bizuths, oui des bizuths!<br />
        Vingt carabins n'valent pas la couille<br />
        D'un pharmacien, ca c'est connu, ca c'est connu !
    </div>
    <p class="font-weight-light c_titre" id="112"> Philo et Lettres </p>
    <div class="chants d-none" id="112c"> 
        C'est le chant de Philo<br />
        Partons à la guindaille<br />
        La pine en fleur<br />
        Les roustons en chaleur<br />
        Comme de francs saligauds<br />
        Courons à la ripaille<br />
        Bourreaux des coeurs<br />
        Toujours avec ardeur<br />
        Les petits comme les grands cons<br />
        Nous les baisons<br />
        Et du soir au matin<br />
        Notre pine guerrière<br />
        Fera jouir bon nombre de vagins<br />
        A la Philo<br />
        Cré nom de nom<br />
        On est peu de poils<br />
        Mais on est bon
    </div>
    <p class="font-weight-light c_titre" id="113"> Psychologie </p>
    <div class="chants d-none" id="113c"> 
        En psycho, à Lîdge, nom de Dieu<br />
        C'est là qu'on a d'la baise<br />
        En psycho, à Lîdge, nom de Dieu<br />
        On boit et pour toujours<br />
        <br />
        Psycho, porno, libérez la libido<br />
        Psycho, porno, libérez la syphilo<br />
        <br />
        Guindailler, boire et baiser c'est la devise, c'est la devise<br />
        Guindailler, boire et baiser c'est la devise des psychologues<br />
        <br />
        A,E,I,O,U,Y, Psy, Psy, Psy<br />
        Ami, entends-tu le pas lourd des psychos dans la bière ?
    </div>
    <p class="font-weight-light c_titre" id="114"> Sciences </p>
    <div class="chants d-none" id="114c"> 
        Venez venez petite fille<br />
        Le jour de rute est arrivé<br />
        Les étudiants de chimie<br />
        Ont la pine bien echauffée (bis)<br />
        Entendez-vous dans nos campagnes<br />
        La geographie en chaleur<br />
        Et les matheux si bon baiseurs<br />
        Travailler vos mignone compagne<br />
        <br />
        Refrain:<br />
        <br />
        Aux pines, la fac des sciences<br />
        Enlevons nos pantalons<br />
        Bandons, bandons<br />
        Qu'un sperme pur<br />
        Abreuve tous ces cons<br />
        <br />
        Les physiciens aiment les beguignes<br />
        Pour leur cons molasses, mais sacrés<br />
        Mais le beguignes preferent leurs pines<br />
        Aux crucifix froids et dorés. (bis)<br />
        Les botanistes avec tendresse<br />
        Receuillent les fleurs de tiedes bosquets<br />
        D'où coulent de gluants pisselets<br />
        Entre les monts que l'on nomme fesses<br />
        <br />
        Refrain<br />
        <br />
        Quand on est en biologie<br />
        On a le sperme gras et bouillant.<br />
        C'est qu'a force d'élever des bactéries<br />
        On s'y prend mieux pour les rendre consistant. (bis)<br />
        Les géologues dans leur soutane<br />
        A grand coup de pics et de burins<br />
        Ont cherche d'génitaux organes<br />
        Mais n'ont trouve que d'hibrides machins.
    </div>
    <p class="font-weight-light c_titre" id="115"> Vétérinaire Cureghem </p>
    <div class="chants d-none" id="115c"> 
        Devenir vété n'est pas une sinécure,<br />
        Il faut avoir une mémoire d'éléphant,<br />
        Il faut braver ruades et morsures,<br />
        Et puis surtout les profs pendant six ans.<br />
        <br />
        Refrain :<br />
        Quelle que soit la vie,<br />
        Flandre ou Wallonie,<br />
        Dans un régiment<br />
        Ou au milieu des paysans,<br />
        On fera la noce,<br />
        On roulera sa bosse,<br />
        Mais qu'on foute le camp,<br />
        De cet ignoble, de cet ignoble,<br />
        Mais qu'on foute le camp,<br />
        De cet ignoble établissement.<br />
        <br />
        Doué en stat, expert en génétique,<br />
        Pascal Leroy est sans doute théorique<br />
        Mais en pratique tous ses disciples se marrent,<br />
        La sélection engendre de bons culards.<br />
        <br />
        Refrain<br />
        <br />
        Sourire charmeur, tu es un gros planqué<br />
        En autopsie, tu pointes jamais ton nez<br />
        Beau décolté, t'es sûre d'être pistonné<br />
        Daniel Desmecht, aime bien les bonnets D.<br />
        <br />
        Refrain <br />
        <br />
        Baguette en main, devant ses étudiantes,<br />
        Fait-il de même avec ses assistantes ?<br />
        Playboy Lekeux, les chevaux asthmatiques,<br />
        Lui il s'en fout, c'est pas ça qui l'excite.<br />
        <br />
        Refrain<br />
        <br />
        Gueule de ciné, séducteur de mémères,<br />
        C'est Henroteaux, protecteur des toutous,<br />
        Soyez-en sûrs, pas une ne désespère,<br />
        De lui passer un jour la corde au cou.<br />
        <br />
        Refrain<br />
        <br />
        <br />
        <br />
        Pauv' Pastoret, t'as l'air bien cachectique,<br />
        Est-ce l'IBR qui t'a dépucelé ?<br />
        T'as découvert la passion herpétique,<br />
        Sans la viro, on t'aimerait bien P.P.<br />
        <br />
        Refrain<br />
        <br />
        L'anatomie, ça commence par les fesses,<br />
        Même pour Collin, enseignant distingué,<br />
        Talons ferrés, ondulant en souplesse,<br />
        Bernard Collin, séduit même les mofflés<br />
        <br />
        Refrain<br />
        <br />
        L'air souriant derrière son microscope,<br />
        Cécile Dessy, nous parle des embryons,<br />
        Mais en session, c'est la reine des salopes,<br />
        Pour faire des points faut être beau garçons,<br />
        <br />
        Refrain<br />
        <br />
        Grand échalas en combinaison blanche,<br />
        Chewing-gum Coignoul, partout il met les doigts<br />
        En anapath, sur tous les trous se penche,<br />
        Cadavre ou pas, il faut faire gaffe à toi.<br />
        <br />
        Refrain<br />
        <br />
        Horreur des ch'vaux, fuyant devant les vaches,<br />
        Le  petit Nicks nous vient de l'extérieur,<br />
        Peut être qu'aux cours, il  joue la bravache,<br />
        Mais qu'un chat pète et il s'enfuit de peur.<br />
        <br />
        Refrain<br />
        <br />
        Barbe de curé où tous les poux s'agitent,<br />
        Bertrand Losson élève les parasites,<br />
        Dans son anus, les oxyures profitent,<br />
        Et Haemonchus toujours qui l'excite.<br />
        <br />
        Refrain<br />
        <br />
        La vache Thiry, tu nous donnes de l'herpès,<br />
        Prions pour toi que folle tu n' deviendras,<br />
        Garde tes microbes, ils nous mettent mal à  l'aise,<br />
        Viroshima, en juin nous explosera.<br />
        <br />
        Refrain<br />
        <br />
        Célibataire, fétichiste endurci,<br />
        J-F Beckers rêve d'être un spéculum,<br />
        Pour découvrir les petits secrets des filles,<br />
        Et pour pouvoir devenir un jour un homme.<br />
        <br />
        Refrain<br />
        <br />
        Bouillon d'culture, ou bien vrai soupe au lait,<br />
        Sensei Mainil, les microbes dans l'ambiance,<br />
        Gram + Gram -, il faut positiver<br />
        Les colonies, c'est pas pour les vacances.<br />
        <br />
        Refrain<br />
        <br />
        Anesthésiste, roi des soporifiques<br />
        Le p'tit crollé, le cheval c'est son dada<br />
        Tous les matins, fait le roi en clinique<br />
        Ca c'est Serteyn, le cheval t'y toucheras pas.<br />
        <br />
        Refrain<br />
        <br />
        Fourche à la main, et langage de culto<br />
        Louis Istasse ricane sous sa moustache<br />
        Pour ta ration, c'est un triple zéro<br />
        C'est con pour toi, elle est crevée la vache.<br />
        <br />
        Refrain<br />
        <br />
        OGA, une fille, ça sent l'fouiller rectal<br />
        Christian Hanzen semble avoir le bras long<br />
        Tu l'as dans l'fion, son exam'de chacal,<br />
        Ovair'booké, t'en prends pour tes gallons.<br />
        <br />
        Refrain<br />
        <br />
        Crâne d'œuf à fond, sur tout ce qui a un rumen<br />
        Rollin complexe sur son alopécie<br />
        Grand pessimiste, sa logorrhée nous gêne<br />
        T'es sans ami, seuls les vaches t'apprécient<br />
        <br />
        Refrain<br />
        <br />
        <br />
        <br />
        <br />
        Beau brun en blouse, qui s'tape ses secrétaires<br />
        C'est Balligand, le pro d'l'orthopédie<br />
        Tout droit sorti d'la cuisse de Jupiter<br />
        Et les grosses bêtes te donnent de l'allergie<br />
        <br />
        Refrain<br />
        <br />
        Look de garçonne, sourire plein d'ironie,<br />
        Cécile Clercx flaire bon l'hypocrisie,<br />
        Pouffe fan des PIFs, qui a l'esprit tordu,<br />
        Son endoscope, elle peut se l'mettre dans le cul !<br />
        <br />
        Refrain<br />
        <br />
        Qu'ils soient à poils, à écailles ou à plumes,<br />
        Des animaux, nous guérirons les maux,<br />
        De l'empirisme, nous dissiperons les brumes,<br />
        La vérité sera notre flambeau.<br />
        <br />
        Refrain<br />
        <br />
        A l'Yser les poilus<br />
        A Cureghem les… couillus.
    </div>
    <p class="mt-2 font-weight-bold chants_titre"> Chants folkloriques </p>
    <p class="mt-1 font-weight-light c_titre" id="116"> A-fond Liégeois </p>
    <div class="chants d-none" id="116c">
        Amis, il existe un moment <br />
        Où les femmes, les filles et les mères <br />
        Amis, il existe un moment <br />
        Où les femmes ont besoin d'un amant <br />
        Qui les chatouille <br />
        Jusqu'à ce qu'elles mouillent <br />
        Et qui les baise <br />
        Le cul sur une chaise <br />
        <br />
        Amis pour bien chanter l'amour <br />
        Il faut boire (ter) <br />
        Amis pour bien chanter l'amour <br />
        Il faut boire la nuit et le jour <br />
        <br />
        A la santé du p'tit conduit par où Margot fait pipi <br />
        Margot fait pipi par son p'tit con-con<br />
        Par son p'tit duit-duit, par son p'tit conduit <br />
            A la santé du p'tit conduit par où Margot fait pipi <br />
        <br />
        Il est en face du trou-la-trou-la-trou-la-trou-la-lère <br />
        Il est en face du trou-la-trou-la-trou-la-trou-la-la<br />
        <br />
        Il est en haut du trou ... <br />
        Il est en bas du trou ... <br />
        Il est à gauche du trou ... <br />
        Il est à droite du trou ... <br />
        Il est très loin du trou ... <br />
        Il est très près du trou ... <br />
        Il va passer par l'trou ... <br />
        <br />
        Vérolés, verre aux lèvres, <br />
        Une minute de silence ! <br />
        Un instant de recueillement ! <br />
        Une seconde d'abnégation ! <br />
        Vérolés, verre aux lèvres, A FOND !!! <br />
        <br />
        Il est passé par l'trou ... <br />
        Il repassera par l'trou ...
    </div>
    <p class="mt-1 font-weight-light c_titre" id="117"> Chant des Wallons </p>
    <div class="chants d-none" id="117c">
        Que jusque tout au bord, on remplisse nos verres<br />
        Qu'on les remplisse encore, de la même manière<br />
        Car nous sommes les plus forts, buveurs de blonde bière<br />
        <br />
        Refrain:<br />
        <br />
        Car nous restons Todi!<br />
        De gais Wallons A Poil!<br />
        Dignes de nos aïeux, nom de Dieu<br />
        Car nous sommes comme eux, nom de Dieu<br />
        Disciples de Bacchus et du Roi Gambrinus<br />
        <br />
        Nous ne craignons pas ceux, qui dans la nuit nous guettent<br />
        Les Flamands et les gueux, à la taille d'athlète<br />
        Ni même que l??es cieux, nous tombent sur la tête<br />
        <br />
        Refrain<br />
        <br />
        Nous assistons aux cours, parfois avec courage<br />
        Nous bloquons certains jours, sans trop de surmenage<br />
        Mais nous buvons toujours, avec la même rage<br />
        <br />
        Refrain<br />
        <br />
        Et quand nous fermons l'oeil, au soir de la bataille<br />
        Pour fêter notre deuil, qu'on fasse une guindaille<br />
        Et pour notre cercueil, qu'on prenne une futaille<br />
        <br />
        Refrain<br />
        <br />
        (Moderato !)<br />
        Et quand nous paraîtrons, devant le grand Saint-Pierre<br />
        Sans peur nous lui dirons, qu'autrefois sur la Terre<br />
        (Allegro !)<br />
        Grand Saint nous n'aimions, que les femmes et la bière
    </div>
    <p class="mt-1 font-weight-light c_titre" id="118"> La Brabançonne </p>
    <div class="chants d-none" id="118c">
        O Belgique, ô mère chérie<br />
        A toi nos coeurs, à toi nos bras<br />
        A toi notre sang ô Patrie !<br />
        Nous le jurons tous, tu vivras !<br />
        Tu vivras toujours grande et belle<br />
        En ton invincible unité<br />
        <br />
        Aura pour devise immortelle<br />
        Le Roi, la Loi, la Liberté<br />
        Aura pour devise immortelle<br />
        Le Roi, la Loi, la Liberté<br />
        Le Roi, la Loi, la Liberté<br />
        Le Roi, la Loi, la Liberté
    </div>
    <p class="mt-1 font-weight-light c_titre" id="119"> Valeureux Liégeois </p>
    <div class="chants d-none" id="119c">
        Valeureux Liégeois,<br />
        Fidèle à ma voix,<br />
        Vole à la victoire.<br />
        Et la liberté<br />
        De notre cité<br />
        Te couvrira de gloire<br />
        <br />
        César vainqueur de l'univers<br />
        Te décerna le titre de brave<br />
        Romains tu brisas les fers<br />
        Jamais tu ne vécus esclave<br />
        <br />
        Refrain<br />
        <br />
        Célébrons par nos accords<br />
        Les droits sacrés d'une si belle cause<br />
        Et rions des vains efforts<br />
        Que l'ennemi nous oppose<br />
        <br />
        Refrain <br />
        <br />
        - A-s' veyou - <b> L'Torè ! </b><br />
        - Est-i bê ? - <b> Awè ! </b><br />
        - Ki magne-t-i ? - <b> Dès porês ! </b><br />
        - Ki beût-i ? - <b> Dès pèkèts ! </b><br />
        - Ki fèt-i ? - <b> Dès p'tits vês ! </b><br />
        - En a-t-i ? - <b> Awè ! </b><br />
        - Kimin sont-èlles ? - <b> Hénaurmes ! </b><br />
        - <b> La la la la La la la la la . . . </b><br />
        - <b> La la la la La la la la la . . . (Lîdge) </b><br />
        - Et co'n fèye po nin l'rouvî . . . <b> - Allons Lîdge !</b>
    </div>
    <p class="mt-2 font-weight-bold chants_titre"> Chants indispensables </p>
    <p class="mt-1 font-weight-light c_titre" id="120"> Ah que nos pères étaient heureux </p>
    <div class="chants d-none" id="120c">
        Ah! Que nos pères étaient heureux (bis)<br />
        Quand ils étaient à table,<br />
        Le vin coulait à côté d'eux: (bis)<br />
        Ca leur était fort agréable.<br />
        <br />
        Refrain:<br />
        Ils buvaient à leurs tonneaux,<br />
        Comme des trous, (bis)<br />
        Morbleu! Bien autrement que nous! (bis)<br />
        <br />
        Ils n'avaient ni riches buffets (bis)<br />
        Ni verres de Venise,<br />
        Mais ils avaient des gobelets (bis)<br />
        Aussi grands que leurs barbes grises.<br />
        <br />
        Refrain<br />
        <br />
        Ils ne savaient ni le latin,(bis)<br />
        Ni la théologie,<br />
        Mais ils avaient le goût du vin (bis)<br />
        C'était là leur philosophie.<br />
        <br />
        Refrain<br />
        <br />
        Quand ils avaient quelque chagrin (bis)<br />
        Ou quelque maladie,<br />
        Ils plantaient là le médecin (bis)<br />
        Apothicaire et pharmacie.<br />
        <br />
        Refrain<br />
        <br />
        Et quand le petit dieu d'amour (bis)<br />
        Leur envoyait quelque donzelle,<br />
        Sans peur, sans crainte et sans détour (bis)<br />
        Ils plantaient là la demoiselle.<br />
        <br />
        Refrain<br />
        <br />
        Celui qui planta le bon vin (bis)<br />
        Au doux pays de France,<br />
        Dans l'éclat du rubis divin, (bis)<br />
        Il a planté notre espérance.<br />
        <br />
        Refrain final:<br />
        Amis, buvons à nos tonneaux,<br />
        Comme des trous (bis)<br />
        Morbleu! L'avenir est à nous! (bis)
    </div>
    <p class="mt-1 font-weight-light c_titre" id="121"> Au 31 du mois d'août </p>
    <div class="chants d-none" id="121c">
        Au trente-et-un du mois d'a-oût (bis)<br />
        Nous vim's venir sous l'vent à nous (bis)<br />
        Une frégate d'Angleterre<br />
        Qui fendait la mer-z-et les flots:<br />
        C'était pour bombarder Bordeaux.<br />
        <br />
        Refrain:<br />
        Buvons un coup lala, buvons en deux lala,<br />
        A la santé des amoureux,<br />
        A la santé du Roi de France,<br />
        Et merd' pour le Roi d'Angleterre<br />
        Qui nous a déclaré la guerre !<br />
        <br />
        Refrain<br />
        <br />
        Le Capitain' du bâtiment (bis)<br />
        Fit appeler son lieutenant, (bis)<br />
        "Lieutenant, te sens-tu capable:<br />
        De prendre l'Anglais à son bord <br />
        On verra bien qui s'ra le plus fort !<br />
        <br />
        Refrain<br />
        <br />
        Le Lieutenant fier-z-et hardi (bis)<br />
        Lui répondit: "Capitain'-z-oui !" (bis)<br />
        Fait's branle-bas à l'équipage<br />
        Je vas hisser le pavillon<br />
        Qui rest'ra haut nous le jurons !"<br />
        <br />
        Refrain<br />
        <br />
        Le maitre donne un coup d' sifflet (bis)<br />
        Et haut larguer les perroquet (bis)<br />
        Larger les riz et vent arrière<br />
        Laisse porter jusqu'à son bord<br />
        On verra bien qui s'ra le plus fort !<br />
        <br />
        Refrain<br />
        <br />
        Vir' lof pour lof, au même instant (bis)<br />
        Nous l'attaquâmes par son avant (bis)<br />
        A coups de haches d'abordage,<br />
        De sabres, piqu's et mousquetons,<br />
        Nous l'eûm's vit' mis à la raison.<br />
        <br />
        Refrain<br />
        <br />
        Que dira-t-on dudit bateau (bis)<br />
        En Angleterr'-z-et à Bordeaux (bis)<br />
        Qu'a laissé prendr' son équipage<br />
        Par un corsair' de six canons,<br />
        Lui qu'en avait trente et si bons ?<br />
        <br />
        Refrain
    </div>
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
