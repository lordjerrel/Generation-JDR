<?php
include ('lib/compteur.php');
include ('lib/auberge.php');
include ('lib/aubergedetaillee.php');
include ('lib/nomevolue.php');

if (isset($_GET['nom'])) 	{
	$nom=stripslashes($_GET['nom']); 
	$_POST['typeetablissement']=0;
	$_POST['environnement']=0;
	//$_POST['aqua']=0;
	$_POST['qualite']=0; 
	$_POST['race']=0;
	}
else {
	$nom =creerauberge(); 					// génération du nom de l'auberge	
}

//fumée - encens 
//création de l'auberge.
if(!empty($_POST) || isset($_GET['nom'])){
$_GET['nom']=$nom;


// BASE DE L'ENVIRONNEMENT 1
if ($_POST['environnement']==0) $environnement=rand(0,1);
else $environnement=$_POST['environnement']-1; // 0 = rural - 1 = urbain
//if ($_POST['aqua']==1) $aqua=?; // proximité d'eau
if ($environnement==0) $environnementtexte="rural";
elseif ($environnement==1) $environnementtexte="urbain";


// BASE DE LA QUALITE
$qualitetab=array(0,0,1,1,2);
if ($_POST['qualite']==0) $qualite=$qualitetab[rand(0,count($qualitetab)-1)];
else $qualite=$_POST['qualite']-1; // 0 = faible - 1 = moyen - 2 = elevé
$modifqualite=array(-1,0,0,0,0,0,1); //modificateur de qualité
$qualiterepas=$qualite+$modifqualite[rand(0,count($modifqualite)-1)]; //qualité des repas
$qualiteboisson=$qualite+$modifqualite[rand(0,count($modifqualite)-1)]; //qualité des boissons
$qualitechambre=$qualite+$modifqualite[rand(0,count($modifqualite)-1)]; //qualité des chambres
$qualiteservice=$qualite+$modifqualite[rand(0,count($modifqualite)-1)]; //qualité des services


// BASE L'ETABLISSEMENT
$typeetablissement=$_POST['typeetablissement']; // 0 = auberge - 1 = taverne - 2 = hotel
$etablissementfm =rand(0,1); //type d'auberge feminin 0 ou masculin 1
$etage =rand(0,2); //nombre d'étages
$placebase =rand(1,2)+$qualiteservice; //multiplicateur de place dans la grande salle
if ($typeetablissement==2) $placebase=$placebase-1; // malus de place en salle des hotels
if ($placebase<1) $placebase=1; //limite minimum de place en salle = 1
$place=$placebase*10;
$tablenombre=(round($place/3))+$qualiteservice;

// creation type d'établissement
if ($etablissementfm==0 && $typeetablissement==0 && $environnement==0) $typebase=array ("e auberge-relai", "e auberge", "e auberge fortifiée", "e ferme-auberge");
elseif ($etablissementfm==0 && $typeetablissement==0 && $qualite==0 && $environnement==1) $typebase=array ("e gargote", "e auberge");
elseif ($etablissementfm==1 && $typeetablissement==0 && $environnement==0) $typebase=array (" établissement", " établissement fortifié", " relai de voyageur");
elseif ($etablissementfm==0 && $typeetablissement==0) $typebase=array ("e auberge"); // auberge F
elseif ($etablissementfm==1 && $typeetablissement==0) $typebase=array (" établissement", " cabaret"); // auberge M
elseif ($etablissementfm==1 && $typeetablissement==1 && $qualite==0 && $environnement==1) $typebase=array (" bistrot", " tripot", " troquet");
elseif ($etablissementfm==0 && $typeetablissement==1 && $qualite!=0 && $environnement==1) $typebase=array ("e maison de jeu", "e taverne", "e taverne", "e brasserie", "e distillerie", "e maison de bain");
elseif ($etablissementfm==0 && $typeetablissement==1) $typebase=array ("e taverne", "e brasserie", "e distillerie", "e taverne", "e maison d'étuvage"); // taverne F
elseif ($etablissementfm==1 && $typeetablissement==1) $typebase=array (" établissement", " débit de boisson"); // taverne M
elseif ($etablissementfm==1 && $typeetablissement==2 && $environnement==0) $typebase=array (" gîte d'étape", " établissement fortifié"); 
elseif ($etablissementfm==1 && $typeetablissement==2 && $qualite==0 && $environnement==1) $typebase=array (" bordel", " logis", " hôtel");
elseif ($etablissementfm==0 && $typeetablissement==2 && $qualite==1 && $environnement==1) $typebase=array ("e maison de passe", "e hostellerie", "e hôtelleie");
elseif ($etablissementfm==0 && $typeetablissement==2 && $qualite==2 && $environnement==1) $typebase=array ("e maison de plaisir", "e hostellerie", "e hôtelleie");
elseif ($etablissementfm==0 && $typeetablissement==2) $typebase=array ("e résidence", "e hostellerie", "e hôtelleie"); // Hotel F
elseif ($etablissementfm==1 && $typeetablissement==2) $typebase=array (" établissement", " logis", " hôtel", " gîte"); // Hotel M
else $typebase=array (" établissement");
$type=$typebase[rand(0,count($typebase)-1)]; //type final
if ($typeetablissement==2) $typename="l'hôtel";
elseif ($typeetablissement==1) $typename="la taverne";
else $typename="l'auberge";

// Nom de la salle principale
if ($typeetablissement==0) $namesalle="salle principale";
elseif ($typeetablissement==1) $namesalle="grande salle";
else $namesalle="salle commune"; 

// Cabaret = scène avant cuisine
$artiste=0;
$cabaret=""; 

// Relai = écruie après terrasse
$palefrenier=0;
$relai="";

// Brasserie après cuisine
$brasseur=0;
$brasserie=""; 

// Tripot = salle de jeu après cabaret
$spadassin=0;
$tripot="";
$jeu=array("<a target=\"_BLANK\" title=\"Jeu de société\" href=\"https://fr.wikipedia.org/wiki/%C3%89checs\">Jeu d'échecs</a>","<a target=\"_BLANK\" title=\"Jeu de société\" href=\"https://fr.wikipedia.org/wiki/Alquerque\">Jeu de l'Alquerque</a>", "<a target=\"_BLANK\" title=\"Jeu de société\" href=\"https://fr.wikipedia.org/wiki/Jeu_du_moulin\">Jeu de Moulin</a>", "<a target=\"_BLANK\" title=\"Jeu de carte\" href=\"https://fr.wikipedia.org/wiki/Tarot_fran%C3%A7ais\">Tarot</a>", "<a target=\"_BLANK\" title=\"Jeu de carte\" href=\"https://fr.wikipedia.org/wiki/Trente_et_un_(jeu)\">Trente et un</a>", "<a target=\"_BLANK\" title=\"Jeu de carte\" href=\"https://fr.wikipedia.org/wiki/Aluette\">Jeu de l'Aluette</a>", "<a target=\"_BLANK\" title=\"Jeu de carte\" href=\"https://fr.wikipedia.org/wiki/Prime_(jeu_de_cartes)\">Prime</a>", "<a target=\"_BLANK\" title=\"Jeu de dés\" href=\"https://fr.wikipedia.org/wiki/Farkle\">Farkle</a>", "<a target=\"_BLANK\" title=\"Jeu de dés\" href=\"https://fr.wikipedia.org/wiki/421_(jeu)\">421</a>", "<a target=\"_BLANK\" title=\"Jeu de dés\" href=\"https://fr.wikibooks.org/wiki/Bo%C3%AEte_%C3%A0_jeux/Le_cul_de_chouette\">Cul de Chouette</a>"); 


// Fortification = palissade/muraille après environnement
$portier=0; 
$soldat=0;
$fortifiee=""; 

// Bordel = prostitution ??
$prostitue=0;
$bordelnumber=0;
$bordel=""; 
if ($type =="e maison de passe" or $type ==" bordel" or $type =="e maison de plaisir") $bordelnumber=1; 

// Etuve = salle de  bain après cuisine
$prostitueetuve=0;
$nombreetuve=0;
$etuve="";

// Ferme avant fortifiee
$fermier=0;
$ferme=""; 

// Brasserie/Distillerie
$brasseur=0;
$brasserie="";
$distilleur=0;
$distillerie="";

$chien=0;
$chat=0;

// CREATION PNJ
$racetaballtext=array("","Demi-elfe","Demi-orque","Elfe","Gnome","Gobelin","Halfelins","Humain","Nain","Drow");
$racetaball = array(1,2,3,4,5,6,7,8);
$sexetaballtext = array("","masculin","feminin");
$sexetaball = array(1,2);
$racetab0 = array(1,2,3,4,6,6,7,7,7,7,7,8); //humain
if ($_POST['race']==0) $racetabzone=$racetab0;
$racetab1 = array(1,3,4,4,6,6,6,6,6,7,8,8); //halfelin
if ($_POST['race']==1) $racetabzone=$racetab1;
$racetab2 = array(1,3,4,4,4,4,4,6,6,7,8,8); //gnome
if ($_POST['race']==2) $racetabzone=$racetab2;
$racetab3 = array(4,4,6,6,7,8,8,8,8,8,8,8); //nain
if ($_POST['race']==3) $racetabzone=$racetab3;
$racetab4 = array(1,3,3,3,3,3,3,4,4,6,6,7); //elfe
if ($_POST['race']==4) $racetabzone=$racetab4;


// CREATION PROPRIO
$raceproprio = $racetabzone[rand(0,count($racetabzone)-1)];
$sexeproprio = $sexetaball[rand(0,count($sexetaball)-1)];
if (strstr($nom,'Chez ')) {$tenancier=substr($nom,'5');
$tenancier.=" (".$racetaballtext[$raceproprio].", ".$sexetaballtext[$sexeproprio].")";}
$proprio =creernomevo($raceproprio,$sexeproprio);
if ($typeetablissement==0) $propriotexte="'aubergiste";
elseif ($typeetablissement==1 && $sexeproprio==1) $propriotexte="e tavernier";
elseif ($typeetablissement==1 && $sexeproprio==2) $propriotexte="a tavernière";
elseif ($typeetablissement==2 && $sexeproprio==2) $propriotexte="'hôtellière";
elseif ($typeetablissement==2 && $sexeproprio==1) $propriotexte="'hôtellier";


// CREATION AIDE PROPRIO
$aidefemmn = array(" sa cousine"," sa soeur", " sa fille", " sa mère"," sa nièce", " sa belle soeur", " son aïeul", " son épouse");
$aidefemnd = array(" son amie"," une ancienne compagne d'aventure", " son amie d'enfance", "son amante");
$aidemasmn = array(" son cousin"," son frère", " son fils", " son père", "son neveu", "son beau frère", " son aïeul", " son époux");
$aidemasnd = array(" son ami"," un ancien compagnon d'aventure"," son ami d'enfance", "son amant");
switch (rand(0,3)) {
	case 0: //meme nom mas
	$aideprorio = $aidemasmn[rand(0,count($aidemasmn)-1)].' '.creernomsim($raceproprio,1);
	break;
	case 1: //meme nom fem
	$aideprorio = $aidefemmn[rand(0,count($aidefemmn)-1)].' '.creernomsim($raceproprio,2);
	break;
	case 2: //nom différent mas
	$aideprorio = $aidemasnd[rand(0,count($aidemasnd)-1)].' '.creernomevo($racetabzone[rand(0,count($racetabzone)-1)],1);
	break;
	case 3: //nom différent fem
	$aideprorio = $aidefemnd[rand(0,count($aidefemnd)-1)].' '.creernomevo($racetabzone[rand(0,count($racetabzone)-1)],2);
	break;}


// CREATION CUISTOT
$sexecuistot=$sexetaball[rand(0,count($sexetaball)-1)];
if (rand(1,100)<50) {
$cuistotfemmn = array(" une cousine du propriétaire,"," la soeur du propriétaire,", " la fille du propriétaire,", " la mère du propriétaire,"," une nièce du propriétaire,", " une belle soeur du propriétaire,", " la grand-mère du propriétaire,", " l'épouse du propriétaire,");
$cuistotfemnd = array(" une amie du propriétaire,"," une ancienne compagne d'aventure du propriétaire,", " une amie d'enfance du propriétaire,", "l'amante  du propriétaire,");
$cuistotmasmn = array(" un cousin du propriétaire,"," le frère du propriétaire,", " le fils du propriétaire,", " le père du propriétaire,", "un neveu du propriétaire,", "un beau frère du propriétaire,", " le grand-père du propriétaire,", " l'époux du propriétaire,");
$cuistotmasnd = array(" un ami du propriétaire,"," un ancien compagnon d'aventure du propriétaire,"," un ami d'enfance du propriétaire,", "l'amant du propriétaire,");
switch (rand(0,3)) {
	case 0: //meme nom mas
	$cuistot = $cuistotmasmn[rand(0,count($aidemasmn)-1)].' '.creernomsim($raceproprio,1);
	break;
	case 1: //meme nom fem
	$cuistot = $cuistotfemmn[rand(0,count($aidefemmn)-1)].' '.creernomsim($raceproprio,2);
	break;
	case 2: //nom différent mas
	$cuistot = $cuistotmasnd[rand(0,count($aidemasnd)-1)].' '.creernomevo($racetabzone[rand(0,count($racetabzone)-1)],1);
	break;
	case 3: //nom différent fem
	$cuistot = $cuistotfemnd[rand(0,count($aidefemnd)-1)].' '.creernomevo($racetabzone[rand(0,count($racetabzone)-1)],2);
	break;}}
else $cuistot=creernomevo($racetabzone[rand(0,count($racetabzone)-1)],$sexecuistot);
if ($sexecuistot==1) $cuistotfm="le cuisinier"; 
else $cuistotfm="la cuisinière"; 


// CREATION BRASSEUR / DISTILLEUR
	$pnjbrasseur=creernomevo($racetabzone[rand(0,count($racetabzone)-1)],rand(1,2)); 
	$pnjdistilleur=creernomevo($racetabzone[rand(0,count($racetabzone)-1)],rand(1,2));


// CREATION VISITEUR 
// ???


// CREATION ENVIRONNEMENT DE L'ETABLISSEMENT
	//aqua : bac
// Rural = L'établissement est situé $route, $paysage
$route = array("au bord de la route principale", "au bout d'un petit chemin perpendiculaire à la route", "au sommet d'une petite colline sur les abords de la route", "après un petit pont enjambant une rivière qui traverse la route", "au bout d'un chemin, près de la route", "au niveau d'une vieille borne routière illisible", "au carrefour entre deux routes", "au niveau d'un dédoublement de la route principale", "aux abords d'un étang à deux cents mètres de la route", "à un croisement entre un petit chemin et la route", "au niveau d'une bifurcation de la route", "dans le pli d'un coude de la route", "à l'angle d'un embranchement", "tel un rond-point au milieu d'un croisement", "au bord de la route", "juste avant un péage routier barrant la route au niveau d'un pont", "juste après un pont à péage gardé par les soldats du seigneur local", "au sommet d'une longue côte");
$paysage = array("au loin la fumée d'une hutte solitaire perce l'horizon", "à proximité d'une série de monolithe portant des visages sculptés", "dominé par un monument commémorant la présence d'un antique champ de bataille dans la plaine alentour", "derrière un muret de pierre séchée qui encadre les champs alentours", "juste après une grande arche de pierre, sous laquelle il faudra passer pour rejoindre ".$typename."", "dominant une fontaine en pierre garnie d'offrande de fleur séchée", "à proximité d'un cercle intacte de pierres levées", "à coté d'un immense chêne pluricentenaire", "surplombant un petit cimetière dans lequel une tombe a été creusée récemment", "proche d'une crête au sommet de laquelle on peut admirer les ruines d'un vieux château", "à proximité d'une colline crevée par une mine adjointe de quelque baraquement", "juste en face d'une pierre fendue surmontée d'une statue elfique de laquelle sort source d'eau qui semble remarquablement pure", "juste en face d'une chapelle en l'honneur d'une divinité du voyage et des routes", "un fort militaire occupe la crête la plus proche de sa masse imposante", "au loin, une caravane de petites gens (difficile de dire si ce sont des nains ou des gnomes à cette distance) forme un cercle de chariot", "surplombant un marais, telle une ile au milieu des flots", "à proximité de la lisière d'une forêt inquiétante", "entouré de champs sur des lieux à la ronde", "au loin, un marécage brumeux repend ses effluves nauséabonds", "dominé par un énorme rocher en équilibre précaire sur un mince pilier de pierre naturel", "au loin, une ferme solitaire trône en majesté au milieu des prairies alentours", "la plaine alentour est constellée de nombreuses petites exploitations agricoles", "au sein une clairière entourée d'une dense forêt", "entouré d'une plaine herbeuse dans laquelle une troupe de mouton pâture sous la surveillance d'une jeune bergère et de son chien", "surplombé d'une imposante crête rocheuse sur laquelle pointe une vieille statue érodée par le temps", "à proximité d'un magnifique bosquet sauvage", "au loin la fumée des cheminées d'un village perce l'horizon", "à proximité d'un petit hameau qui semble en fête", "non loin d'un hameau de taudis, visiblement des refugiers de guerre", "à proximité d'un antique tumulus brumeux", "au loin un moulin à vent tourne au sommet d'une crête qui étend son ombre sur un petit hameau", "non loin d'un village visiblement abandonné", "à proximité d'une paisible tourbière herbeuse occupant le point le plus bas de la vallée", "entouré de collines basse et broussailleuse", "juste après une vaste collection de lampes et de lanternes accrochée autour du chemin qui mène à ".$typename."", "à proximité d'un banc de pierre abrité sous un vieux chêne", "entouré de collines viticoles et de quelques fermes", "à proximité d'un grand chêne qui grouille de papillons d'un noir de jais", "en face d'une vieille statue recouverte de mousse et entouré d'un parterre de fleur sauvage", "non loin d'une grande pierre noir dressée et ornée de rune", "à proximité d'une dépression à peu près circulaire où tous semblent avoir fondu et brulé récemment", "au milieu d'une plantation d'arbre fruitier", "non loin d'une scierie, des baraquements d'ouvriers et de la forêt dévastée qui les entours", "en face d'un petit fortin appartenant à la patrouille rurale", "en face d'un charmant monastère, de leurs jardins et des champs qui les entourent", "proche d'une colline déformée par l'exploitation d'une mine de fer et de ces fonderies", "non loin d'un atelier de tissage et des élevages de moutons qui broutent la prairie alentour", "au loin, la fumée d'une briqueterie peut être observée", "à proximité le campement d'une troupe d'archerie mercenaire est visible, à moins que ce ne soit un campement de brigand", "une tour de guet surplombe les alentours, mais elle semble vide", "en face du bivouac d'une petite troupe de chevalier errant", "à proximité d'une imposante forêt sombre d'où provient les hurlements d'une bête non identifiable", "la plaine et la forêt alentours semblent avoir été inondée récemment", "le hameau voisin semble avoir subi récemment la colère d'un dragon", "non loin, un colosse de pierre construit un édifice au sommet d'une colline sous la supervision d'un sorcier", "un orage gronde dans le lointain et se rapproche de la vallée", "une carrière de pierres et les baraquements des ouvriers se trouvent non loin", "de nombreuses fermes maraichère se trouvent aux alentours", "aux alentours, de vaste champ de blé semble avoir été traversé par une bête de forte taille qui a couché les cultures sur son passage, un fermier bien impuissant constate les dégâts", "non loin, une troupe de bucheron travaille en chantant joyeusement au rythme des haches", "les alentours sont peuplées de colline, de vignoble et d'élevage", "un cor de chasse retenti dans la forêt proche, dans le lointain se trouve la silhouette d'un château", "en face de l'immense domaine d'une commanderie fortifiée");

// Urbain = L'établissement est situé $rue, il a pour voisin proche, $voisin1 et $voisin2
if ($qualite==0) $rue = array("dans une petite ruelle populaire", "dans une rue aussi sinueuse que mal famée", "au fond d'une impasse", "dans un passage étroit reliant deux avenue", "dans une rue en pente surplombée par une place", "à l'angle d'une impasse sombre", "dans une galerie couverte aussi sombre qu'humide reliant une avenue avec les rues adjacentes", "dans une venelle non pavée", "dans une place aussi isolée que peu fréquentable", "dans une petite rue adossée à la muraille", "dans une rue au centre de laquelle coule un immonde petit ruisseau nauséabond", "dans une rue malodorante", "dans une ruelle sinistre", "dans une ancienne rue mondaine aujourd'hui abandonnée par les autorités", "à l'angle d'une rue, juste en face du pilori municipal", "dans une rue, juste en face d'un abattoir qui déverse les restes dans le caniveau des restes de carcasse", "dans une venelle, juste en face de la porte arrière d'une forge réputée, mais travaillant aussi bien le jour que la nuit pour honorer les commandes", "dans une ruelle maudite, juste en face de la maison du bourreau", "dans une rue discrète", "dans une obscure ruelle de la ville basse");
else $rue = array("dans une rue passante, mais aussi bruyante", "dans une petite ruelle baignée de soleil en journée", "le long d'une petite place pavée", "le long de l'antique avenue pavée qui dessert le bourg depuis toujours", "au fond d'une petite venelle fleurie", "à l'angle d'une riche rue marchande", "dans une ruelle aussi ombragée que calme", "dans une impasse, à l'ombre du château du guet", "sur l'une des plus importantes places du marché du bourg", "sur les hauteurs du bourg, au sommet d'une avenue escarpée", "dans une grande avenue en face d'un imposant hôtel particulier", "dans une rue passante, en face d'une imposante fontaine en bronze en forme de sanglier", "dans une rue, juste en face de la porte arrière d'un monastère", "sur la place du palais de la ville, dans lequel résident le bougmestre", "dans une ruelle discrète, mais passante, juste en face du bordel municipal", "à l'angle d'une avenue menant directement sur le champ de foire", "dans une large rue, juste en face du théâtre communal", "dans une rue étroite menant aux bains public", "sur une adorable placette de la ville haute", "à l'angle d'un carrefour où trône la statue d'un héros local", "à l'angle de la grand-rue et d'une venelle");
if ($qualite==0) {
	$voisin1 = array("un poste du guet", "une maison décrépie", "un dispensaire délabré", "le bureau des coursiers locaux ainsi que leurs écuries", "l'antique bâtisse des archives municipales", "un poste de charretier débordant d'activité", "une halle couverte abandonnée", "un scriptorium aux fenêtres barrées de métal ainsi qu'à la porte renforcée", "les écuries fortifiées de la patrouille rural", "une école populaire devant laquelle un vieux chevalier en armes monte la garde", "un hôtel privé gardé par des malandrins", "l'hôtel particulier d'une guilde de mercenaire", "un antique beffroi équipé d'un cadran solaire neuf", "une caserne militaire qui sert aussi de centre de recrutement pour l'ost royal", "un taudis occupé illégalement par un groupe de jeune enfant des rues", "un taudis clos abritant une communauté de lépreux", "un taudis qui sert d'antre à des drogués", "un marchand de poisson à la fraîcheur douteuse", "une tannerie pestilentielle", "un vendeur de chevaux", "une herboristerie recouverte de plante grimpante", "l'aire d'entraînement de la milice du quartier", "un usurier véreux", "un bâtiment en ruine d'où sorte les râles d'un mourant", "un immeuble vétuste portant un panneau qui vante le faible coût de son loyer", "le mince atelier d'un tatoueur nain", "une distillerie qui répand des vapeurs alcoolisées dans tous le quartier", "une imposante citerne d'eau couverte en pierre", "la boutique d'un chirurgien-barbier");
	$voisin2 = array("une ruelle boueuse où des enfants joutent monter sur les épaules leurs camarades", "l'atelier d'un artisan, surmontée d'habitation", "une guilde de barde à la façade de mauvais goût", "un amphithéâtre populaire bruyant, mais surtout riant", "une maison de passe devant laquelle des jeunes personnes font du racolage", "l'ancien château du guet, qui sert aujourd'hui de prison", "un vieil entrepôt louche", "un silo sur piloti", "un élevage de porc bruyant", "un silo à grains gardé par des mercenaires patibulaires", "un autel votif dédié à une divinté oubliée", "une chapelle dont l'unique prêtresse sert la soupe populaire", "un temple irradiant de pureté", "une mission cherchant à convertir la population à une divinité étrangère", "l'abri clos d'une recluse que personne ne semble vouloir approcher malgré ces appels", "un atelier de fabrique textile", "les étuves du quartier qui ressemblent plus à une maison de passe", "une antique basilique", "les greniers communaux", "un fumoir à viande duquel sort un lourd panache de fumée qui embrume le quartier", "un atelier massif depuis lequel sort le rire et les chants des ouvriers", "une petite halle commerçante");
}
else {
	$voisin1 = array("l'hôtel de ville", "une boutique surmontée d'habitation", "une arène dans laquelle se déroulent les duels judiciaires", "un corps de ferme ainsi qu'un potager enclavé entre les bâtiments qui l'entourent", "l'imposante façade d'un opéra à colonnade", "une maison de plaisir à la façade colorée", "un palais de justice qui ressemble plus à un petit fortin", "L'intendance générale d'un ordre de paladin", "l'édifice de la trésorerie royal ainsi que du collecteur des impôts", "la villa d'une ambassade", "la boutique enclavée d'un apothicaire", "l'une des rares universités du royaume", "une libraire à l'intérieur sombre", "une bibliothèque devant laquelle un clerc fait l'école aux enfants des rues", "une académie mystérieuse ne laissant rien transparaitre des cours qu'on y donne", "le haut donjon dans lequel travail le sorcier municipal", "la boutique d'un maraicher", "une boutique proposant la vente d'animaux de compagnie", "un menuisier de bois rare, proposant aussi des lances de qualité", "une boutique vendant des vêtements de grande qualité", "une cave à vin", "la boutique d'un bijoutier nain", "l'atelier d'un orfèvre réputé", "une petite officine", "le beffroi des échevins", "un petit parc public où des enfants jouent", "un monument commémorant la mémoire des morts de la dernière peste", "l'atelier d'un alchimiste réputé dans le royaume");
	$voisin2 = array("la seule imprimerie de la région", "une modeste maison bourgeoise", "la boutique d'un armurier connu dans la région pour la finesse de son travail", "l'une des forges les plus réputées de la région", "l'un des fours communal embaumant les alentours d'une délicieuse odeur de pain chaud", "un adorable petit châtelet neuf qui appartient à la fille du seigneur de la région", "la maison du capitaine de la garde avec un splendide jardin bien entretenu", "le bureau des poids et mesures communal", "la maison d'un apothicaire avec jardin débordant de plante exotique", "un imposant manoir, décoré de sinistre gargouille", "un temple à colonnade richement décorée mais dont les ombres dansent étrangement sur sa façade", "un hôpital entretenu par un ordre religieux", "une monumentale cathédrale, fleuron de l'architecture régionale", "le bruyant comptoir d'une guilde marchande", "la grange communal chargé de récolter la dîme", "la chambre du commerce, chargé de réguler l'activité et l'influence des guildes marchandes", "le fastueux manoir d'une guilde marchande", "un grenier à sel ainsi que sa boutique attenante", "un hôtel de la monnaie qui frappe les pièces toutes la région", "une belle demeure en construction avec son lot d'échafaudages et sa grue", "une maison bourgeoise qui laisse échapper un chant étrange et des sons de carillons");}


// QUALITE DE L'ETABLISSEMENT
$divers1 = array("qui est plutôt", "","","");
if ($etablissementfm==0) $qualif = array ("de qualité médiocre","de qualité moyenne","réputée");
else $qualif = array ("de mauvaise qualité","de qualité moyenne","prestigieux");


// CREATION DU BATIMENT DE L'ETABLISSEMENT
//Le bâtiment $forme" est composé d'un $etagetexte. $construction0-1-2. A l'intérieur, se trouve une salle pouvant contenir $place personnes.
// Forme
$formetab = array("en forme de U","en forme de L","de forme rectangulaire", "de forme carré", "de forme atypique", "disposant d'une cour extérieure", "disposant d'une petite cour intérieure", "principale, séparé de son annexe par une petite cour,", "principale, accompagné d'une aile en bois");
$forme=$formetab[rand(0,count($formetab)-1)];
if ($qualite==0 && $forme=="disposant d'une petite cour intérieure") $forme="disposant d'une cour extérieure";
$totalchambre=0; //calcul plus tard

// Escalier
if($qualite==2) $qualiteescalier="en pierre";
else $qualiteescalier="en bois";
$escalier1 = array("un escalier extérieur ".$qualiteescalier, "un escalier intérieur", "une tour d'angle qui abrite un escalier à vis", "l'escalier qui mène aux galeries surplombant la ".$namesalle);
$escalier2 = array("un escalier extérieur ".$qualiteescalier, "plusieurs escaliers intérieur", "une tour d'angle qui abrite un escalier à vis");
if($qualite==2 && $etage<2) $etage=$etage+1;
if($qualite==1 && $etage<1) $etage=$etage+1;
if($typeetablissement==1 && $etage>0) $etage=$etage-1;
if($typeetablissement==2 && $etage<1) $etage=$etage+1;
if ($etage==0) $etagetexte='unique rez-de-chaussée';
else if ($etage==1) $etagetexte="rez-de-chaussée et d'un étage desservi par ".$escalier1[rand(0,count($escalier1)-1)];
else $etagetexte="rez-de-chaussée et de deux étages desservis par ".$escalier2[rand(0,count($escalier2)-1)];

// Qualité du batiment
$construction0 = array ("Il ne semble tenir que par la force de l'habitude et l'aide non négligeable de plusieurs poteaux de bois qui soutiennent les murs", "Il a visiblement été construit par des artisans peu compétent, mais il tient debout et on peut difficilement lui demander plus", "Il semble avoir subi les ravages d'un incendie et a été reconstruit récemment", "Il laisse entrevoir des trous en de nombreux endroits de sa toiture", "Il est entièrement construit en bois et la toiture est faite de vieux chaume", "C'est une bâtisse à la peinture décrépie et aux volets brisés", "Il semble avoir été reconstruit sur les ruines d'une ancienne maison abandonnée", "On accède au rez-de-chaussée par ce qui semble être une ancienne cave réaménagée et à demi-enterrée dans la chaussée");

$construction1 = array ("Il dispose d'une solide maçonnerie de pierre taillée et d'un toit d'ardoise", "C'est une jolie bâtisse à colombages aux fenêtres barrées", "Il a été récemment rénovée et une belle fresque au motif humoristique orne la façade", "Il est construit en brique et dispose d'un toit de tuile en parfait état", "Il semble y avoir une influence nanique dans son style architectural, c'est un bâtiment massif et robuste", "C'est une solide bâtisse à colombages disposant d'un perron en pierre de taille");

$construction2 = array ("Il est le témoin de l'excellence du savoir-faire de ces bâtisseurs", "C'est une jolie bâtisse à colombages et en encorbellement", "Il est idéalement situé au coeur de la ville", "Il fût construit par un architecte réputé pour la qualité de son travail", "Il semble y avoir une influence elfique dans son style architectural", "Il a été récemment rénovée et une belle fresque au motif floral orne la façade", "C'est une jolie bâtisse peinte dont le perron de bois sculpté augure un intéreur accueillant");

// Qualité
if ($typeetablissement==0) {
$objet0sin = array (
	"Un comptoir en pin vermoulu et sal", "Le trou béant par lequel le vent s'engouffre", "La cheminée complètement bouchée par la suie", "Le mauvais éclairage dû au manque et à l'étroitesse des fenêtres", "Le sol en terre battu irrégulier et sal,", "Le plafond trop bas de la ".$namesalle, "Le sol de paille souillée", "La porte d'entrée grinçante", "La boue qui couvre le sol", "La vaisselle ébréchée et sal,", "L'usure du mobilier et l'inconfort qu'il procure,", "Le mobilier rafistolé témoignant des nombreuses bagarres", "La poussière sur le mobilier et la manque visible d'entretien", "L'odeur apre de vinaigre qui émane de la paille, sale de mauvais vin, qui recouvre le sol");
$objet0plr = array (
	"Des rats sortant de la cave", "Des odeurs de vomi mélangées à de vagues relants de cuisine", "Les vitres crasseuses et cassées", "Les graffitis sur les murs et le mobilier", "Les gravats qui occupent un coin de la salle", "Les tables branlantes", "Les nuées d'insectes grouillants dans la salle", "Les tables constituées de simple planche de bois, sur tréteaux", "Les toiles d'araignées qui pendent du plafond");
$objet1sin = array (
	"Le mobilier massif en chêne", "La belle cheminée en pierre", "Le bon éclairage par de large fenêtre", "La bonne odeur de cuisine", "Le sol garni de sciure propre", "Le plancher de bois", "La vaisselle propre", "La plante exotique qui orne le comptoir", "Le calme de la ".$namesalle); 
$objet1plr = array (
	"Les murs propres et lisses", "Les murs en bon état et blanchis à la chaux", "Les deux mercenaires qui gardent la porte", "les peintures murales", "Les trophées de chasse qui ornent les murs", "Les chandeliers de fer forgé", "Les grilles de fer qui protègent les fenêtres d'intrus", "La bannière du roi flottant à l'entrée", "Les rideaux aux fenêtres", "Les vêtements propre du personnel", "Les bonnes odeurs provenant des cuisines");
$objet2sin = array (
	"Un sol aux pierres parfaitement taillées", "L'imposante cheminée de granit poli", "Le comptoir sculpté dans du bois d'ébène", "La hauteur de plafond", "Le sol pavé", "La monumentale tapisserie qui orne le fond de l'auberge", "Le spadassin bien équipée qui sert de garde", "Le petit balcon disponible dans chaque chambre", "La vaisselle de porcelaine", "La bibliothèque qui occupe un coin de la salle", "La rune de protection qui est gravée sur le linteau de la porte", "La splendide mosaïque qui couvre l'entrée");
$objet2plr = array (
	"De belles poutres de chêne apparentes", "Des boiseries finement ciselées", "Les tables et les chaises en bois d'oeuvre", "Les tentures qui pendent aux murs", "Les magnifiques vitres multicolore", "Les tableaux qui ornent les murs", "Les jolies vitraux", "Les trophées de guerre qui ornent les murs", "Les plantes en pot qui ornent l'auberge", "Les lourds rideaux qui permettent d'isoler les clients entre eux", "Les beaux atours du personnel", "Les magnifiques voutes qui soutiennent la ".$namesalle, "Les décorations antiques qui ornent la ".$namesalle);}

elseif ($typeetablissement==1) {$objet0sin = array (
	"Un comptoir en chêne rongé par les champignons", "Le trou béant par lequel le vent s'engouffre", "La cheminée complètement bouchée par la suie", "Le mauvais éclairage dû au manque et à l'étroitesse des fenêtres", "Le sol en terre battu irrégulier et sal,", "Le plafond trop bas dans la ".$namesalle, "Le sol de paille souillée", "La porte d'entrée grinçante", "La boue qui couvre le sol", "L'usure du mobilier et l'inconfort qu'il procure,", "La poussière sur le mobilier et la manque visible d'entretien", "L'odeur apre de vinaigre qui émane de la paille, sale de mauvais vin, qui recouvre le sol");
$objet0plr = array (
	"Des odeurs de vomi mélangées à de vagues relants de vieille bière", "Des débris de mobiliers témoignant des nombreuses bagarres", "La vaisselle ébréchée", "Les vitres crasseuses", "Les graffitis sur les murs et le mobilier", "Les détritus qui occupent un coin de la salle", "Les vieux tonneaux servant de table", "Les nuées d'insectes grouillants dans la salle", "Les tables constituées de simple planche de bois, sur tréteaux", "Les toiles d'araignées qui pendent du plafond");  
$objet1sin = array (
	"Le mobilier massif en chêne", "La belle cheminée de brique", "Le bon éclairage de la salle", "La diversité des boissons proposée", "Le sol garni de sciure propre", "Le plancher de bois neuf", "La belle tenture colorée qui orne le comptoir", "Le chant joyeux qu'entonne la clientèle", "Le sol couvert de plante odorante et de paille fraiche"); 
$objet1plr = array (
	"Les murs propres et lisses", "Les murs en bon état et blanchis à la chaux", "Les deux malabars qui gardent la porte", "les peintures murales", "Les trophées de chasse qui ornent les murs", "Les chandeliers de fer forgé", "Les verres propres", "Les grilles de fer qui protègent les fenêtres d'intrus", "La bannière du prince flottant à l'entrée", "Les vêtements propre du personnel");
$objet2sin = array (
	"Un sol aux pierres parfaitement taillées", "L'imposante cheminée de pierre poli", "Le comptoir sculpté dans du bois d'oeuvre", "La hauteur de plafond", "Le sol pavé", "La monumentale tapisserie qui orne le fond de la taverne", "La magnifique voute qui soutient la ".$namesalle, "Le spadassin bien équipée qui sert de videur", "La bibliothèque qui occupe un coin de la salle", "La splendide mosaïque qui couvre l'entrée");
$objet2plr = array (
	"De belles poutres de chêne apparentes", "Des boiseries finement ciselées", "Les tables et les chaises en bois d'oeuvre", "Les tentures qui pendent aux murs", "Les magnifiques vitres multicolore", "Les tableaux qui ornent les murs", "Les amuse-gueules qui garnissent les tables", "Les belles chopes de bronze poli", "Les trophées de guerre qui ornent les murs", "Les plantes en pot qui ornent les tables", "Les lourds rideaux qui permettent d'isoler les clients entre eux", "Les beaux atours du tavernier", "Les décorations élaborées qui ornent la salle");} 

else {
$objet0sin = array (
	"L'accueil déplorable", "Le trou béant par lequel le vent s'engouffre", "Le manque de chauffage", "Le mauvais éclairage dû au manque et à l'étroitesse des fenêtres", "Le sol en terre battu irrégulier et sal,", "Le plafond trop bas des chambres", "Le sol de paille souillée", "La porte d'entrée grinçante", "La boue qui couvre le sol", "Le pot de chambre encore plein et ébréché", "L'usure des \"matelas\" et des lits", "La poussière dans les chambres et la manque visible d'entretien");
$objet0plr = array (
	"Les puces sautant des couvertures", "Les odeurs d'urine dans les chambres", "Les vitres crassées et sales", "Les graffitis sur les murs", "Les planches de bois qui servent de lit", "Les portes grinçantes des chambres", "Les nuées d'insectes grouillants", "Les toiles d'araignées qui pendent du plafond");
$objet1sin = array (
	"Les lits massif en pin", "La belle cheminée en pierre", "Le bon éclairage", "La fraîcheur des draps", "Le sol propre", "Le plancher de bois", "La plante exotique qui orne l'accueil'", "Le calme des chambres", "Le petit balcon disponible dans chaque chambre"); 
$objet1plr = array (
	"Les murs propres et lisses", "Les murs en bon état et blanchis à la chaux", "Les deux mercenaires qui gardent l'établissement jour et nuit", "les peintures murales", "Les chandeliers de fer forgé", "Les grilles de fer qui protègent les fenêtres d'intrus", "La bannière du seigneur local flottant à l'entrée", "Les rideaux aux fenêtres", "Les volets aux fenêtres", "Les vêtements propre du personnel");
$objet2sin = array (
	"Un sol en pierre de taille", "Le cheminée dans toutes les chambres", "L'accueil sculpté dans du bois d'ébène", "La hauteur de plafond des pièces", "Le sol pavé", "Le balcon disponible dans chaque chambre", "Le mobilier de qualité", "La rune de protection qui est gravée sur le linteau de la porte", "Le mobilier en bois d'oeuvre", "La splendide mosaïque qui couvre l'entrée");
$objet2plr = array (
	"De belles poutres de chêne apparentes", "Des boiseries finement ciselées", "Les tentures qui pendent aux murs", "Les magnifiques fenêtres à croisé", "Les quatres porte-glaive bien équipée qui montent de garde", "Les tapisseries qui ornent les chambres", "Les tableaux qui ornent les murs des couloirs", "Les jolies vitraux de la ".$namesalle, "Les plantes en pot qui ornent chaque chambres", "Les lourds volets en bois gravé", "Les beaux atours du personnel", "Les magnifiques voutes qui soutiennent le rez-de-chaussée");}
$verbe = array ("donne une idée de ", "démontre ", "illustre ", "atteste de ", "révèle ", "témoigne de ");
$verbes = array ("donnent une idée de ", "démontrent ", "illustrent ", "attestent de ", "révèlent ", "témoignent de ");

// Jardin, Potager, Poulailler, pressoir
$cour="";
if ($qualiterepas>$qualite) $courtab="un petit potager bien entretenu, qui permet de fournir quelques herbes et légumes frais en cuisine.";
elseif ($qualiteservice>$qualite) $courtab="un petit jardin d'agrément, disposant d'un banc, parfait pour se ressourcer.";
elseif ($qualiteboisson>$qualite) $courtab="un pressoir qui permet à l'établissement de produire son propre vin et son huile pour compléter ses reserves.";
elseif ($qualiterepas>$qualitechambre && $qualite!=2) $courtab="un poulailler bruyant qui permet d'avoir des oeufs frais en cuisine.";
elseif ($qualiterepas>$qualiteservice && $qualite!=2) $courtab="un enclos à cochon qui permet de recycler les restes de repas, en viande et en charcuterie.";
else {$chien=1; $courtab="un gros chien qui dort près d'une niche.";}

if ($forme=="disposant d'une petite cour intérieure") $cour="Dans la cour intérieur, se trouve ".$courtab;

elseif ($forme=="disposant d'une cour extérieure" or $forme=="principale, séparé de son annexe par une petite cour,") $cour="Dans un coin de la cour, se trouve ".$courtab;

elseif ($environnement ==0 and (rand(1,10)<=5)) $cour="Derrière ".$typename.", se trouve ".$courtab;

// Terrasse
$terrassetexte="";
if ($environnement==0) $terrasse=1;
elseif ($forme=="disposant d'une cour extérieure" or $forme=="disposant d'une petite cour intérieure" or $forme=="principale, séparé de son annexe par une petite cour,") $terrasse=2;
else $terrasse=0;
if ($terrasse==1){ 
	if ($qualite==0) $terrassetexte="Devant ".$typename.", deux bancs et une table à tréteaux bancal font office de terrasse. ";
	else if ($qualite==1) $terrassetexte="Devant ".$typename.", quelques tables et chaises permettent de profiter du paysage. ";
	else $terrassetexte="Devant ".$typename.", installées sur du parquet, de belles tables et chaises permettent de se restaurer en contemplant le paysage. ";}
elseif ($terrasse==2){
	if ($qualite==0) $terrassetexte="On y trouve aussi, deux bancs et une table à tréteaux bancal font office de terrasse. ";
	else if ($qualite==1) $terrassetexte="On y trouve aussi, quelques tables à tréteaux et chaises permettent de profiter de l'extérieur. ";
	else $terrassetexte="On y trouve aussi, installées sur du parquet, de belles tables et chaises permettent de se restaurer en extérieur. ";}
elseif (rand(1,10)<=(3+$qualiteservice)){$terrasse=3;
	if ($qualite==0) $terrassetexte="Devant ".$typename.", deux malheureux tabourets et une table basse font office de terrasse. ";
	else if ($qualite==1) $terrassetexte="Devant ".$typename.", quelques tables à tréteaux et chaises permettent de boire à l'extérieur. ";
	else $terrassetexte="Devant ".$typename.", installées sur du parquet, de belles tables et chaises permettent de se restaurer en terrasse. ";}



// Disposition d'une pièce
// Dispo Cuisine, dortoir
$dispotab = array("A l'arrière du bâtiment, ","Dans une salle adjacente à la ".$namesalle.", ", "Dans une annexe de l'arrière cour, ", "Dans une salle du rez-de-chaussée, ");
if ($forme=="principale, séparé de son annexe par une petite cour,") $dispo="Dans l'annexe de l'autre côté de la cour, ";
elseif($forme=="principale, accompagné d'une aile en bois") $dispo="Dans l'aile adjacente au bâtiment principale, ";
else $dispo=$dispotab[rand(0,count($dispotab)-1)];
// Dispo cellier
$celliertab=array("une petite salle attenante. ", "la cave, que l'on atteint par un petit escalier en bois. ", "un réduit de bonne taille, encastré dans le mur de la pièce. ", "une petite salle attenante, à demi-enterrée dans le sol. ");
$cellier=$celliertab[rand(0,count($celliertab)-1)];
// Dispo Etuves
$dispoetuvetab=array("Dans une salle à l'arrière du bâtiment, ", "Dans une salle à demi-enterrée dans le sol du rez-de-chaussée, ", "Dans une salle adjacente à la cuisine, ", "Dans une annexe de l'arrière cour, ", "Dans une salle du rez-de-chaussée, ", "En extérieur, sous un auvent, "); 
$dispoetuve=$dispoetuvetab[rand(0,count($dispoetuvetab)-1)];
// Dispo Brasserie
$dispobrasserietab = array("Dans une salle à l'arrière du bâtiment, ","Dans une salle adjacente à la cuisine, ", "Dans une annexe de l'arrière cour, ", "Dans une salle du rez-de-chaussée, ", "Dans une cave, prévu à cet effet, que l'on accède par un escalier extérieur, ");
$dispobrasserie=$dispobrasserietab[rand(0,count($dispobrasserietab)-1)];
$dispodistillerie=$dispobrasserietab[rand(0,count($dispobrasserietab)-1)];


$bonplat = array(
	"\"Ours au miel\"",
	"\"Cygne aux trois poivres\"", 
	"\"Ragoût de lapin sauce verte\"",
	"\"Poulet aux pruneaux, raisins, amandes et abricots secs\"",
	"\"Potage Jaunet\"",
	"\"Civet de lapin aux épices\"",
	"\"Agneau rôti au sel\"",
	"\"Lapin au sirop\"",
	"\"Pain de voyage\"",
	"\"Haricots au lard et aux poires sèches\""
	);

$mauvaisplat = array (
	"une tourte au mouton",
	"une omelette à la sauce grise et ses croûtons",
	"un cake aux carottes",
	"un ragoudabats",
	"un gruau"
	);


$nbrservice = rand(2,3)+($etage-1)+($qualiteservice-1);
if ($nbrservice<1) $nbrservice=1;

$servicequalite = array ();
$servicequalite[0] = array ("Un barbier, ","incompétent et ivre, qui ne fera pas ce qui lui est demandé","qui a en plus des connaissances en chirurgie, mais qui jure comme un mercenaire","qui exécute son travail convenablement.");

$servicequalite[1] = array ("Un barde, ","qu'il faut payer pour qu'il se taise.","qui, pour quelques piécettes, chante.","qui peut chanter des exploits dans les environs.");
	
$servicequalite[2] = array ("Un bain privé, ","dans la cuisine avec de l'eau tiède et sale.","dans une salle prévue à cet effet.","dans une chambre avec de l'eau à bonne température.");

$servicequalite[3] = array ("Un petit commerce,","avec différents objets de mauvaise qualité mais bon marché.","avec différents objets utiles.","avec différents objets de bonne qualité.");

$servicequalite[4] = array ("Des rations sèches, ","permettant de ne pas mourir de faim mais au goût infâme.","permettant de se sustenter durant les longs voyages.","permettant de bien manger même lors de voyages.");

$servicequalite[5] = array ("Un médecin, ","pouvant panser les blessures.","maîtrisant l'herboristerie et pouvant préparer des décoctions.","pouvant faire usage de magie.");

$servicequalite[6] = array ("Un scribe, ","qui, malgré de nombreuses fautes, peut écrire contrats et actes de vente.","capable d'écrire tout acte de vente ou contrat, voir de faire de faux documents.","qui, avec une belle calligraphie, peut écrire contrats, actes de vente, poèmes, livres ...");

$servicequalite[7] = array ("Un écuyer, ","qui, logiquement, rendra les armes plus propres qu'il ne les a reçues.","qui prendra soin des pièces d'armure et des armes.","qui donnera une deuxième vie à l'équipement qu'on lui fournit.");

$servicequalite[8] = array ("Un coffre-fort, ","qui cache du regard des biens, pour leur sécurité, il faudra trouver autre chose.","qui permet de mettre à l'abri les biens précieux.","qui protège autant mécaniquement que magiquement des biens.");

$servicequalite[9] = array ("Un salon privé, ","plutôt miteuse mais pour le prix...","assez calme pour discuter sans être interrompu.","confortable et discrète.");

$servicequalite[10] = array ("Une arrière-salle, ","d'une qualité égale à la salle principale.","permettant de s'isoler du bruit de la ". $namesalle.".","grande, confortable et bien agencée.");

$servicequalite[11] = array ("Une blanchisseuse, ","qui lavera des vêtements.","qui lavera et nettoiera des vêtements.","qui lavera, nettoiera et raccommodera des vêtements.");

$servicequalite[12] = array ("Un banquier, ","qui gardera de l'or à l'abri.","capable de faire convoyer des richesses dans une grande ville et qui pourra échanger des pièces étrangères.","qui pourra convoyer de l'or, faire des échanges et même prêter de l'argent à des taux d'intérêt exorbitants.");

$servicequalite[13] = array ("Un cocher, ","capable de convoyer sa modeste charrette dans les environs.","capable de convoyer son chariot dans les environs.","capable de convoyer un carrosse dans les environs.");

$servicequalite[14] = array ("Un cordonnier, ","capable de réparer des bottes.","qui pourra réparer et nettoyer des bottes.","capable de réparer et de renforcer des bottes.");

$servicequalite[15] = array ("Un homme de loi, ","véreux, mais qui a l'habitude de défendre des criminelles.","qui connaît bien les lois locales et sait défendre son client.","qui connaît les lois locales et leurs failles, accessoirement, il connaît aussi bien les juges.");

$servicequalite[16] = array ("Une toiletteuse, ","qui a plutôt l'habitude de maquiller de prostituer.","qui saura vous mettre en valeur.","capable de vous faire admettre dans la bonne société.");

$servicequalite[17] = array ("Un spadassin, ","qui jouera de la dague au besoin, temps que ça se passe bien.","qui n'a pas froid aux yeux.","très compétent et assez respectable pour avoir le droit de représenter en duel judiciaire.");

$servicequalite[17] = array ("Un spadassin, ","qui jouera de la dague au besoin, temps que ça se passe bien.","qui n'a pas froid aux yeux.","très compétent et assez respectable pour avoir le droit de représenter en duel judiciaire.");

$servicequalite[18] = array ("Un guide, ","qui connaît bien les environs, mais qui est aussi peu fiable.","qui connaît bien les environs .","qui connaissent bien la région.");

$servicequalite[19] = array ("Un messager, ","qui fera passer un message, en plus aucune chance qu'il le lise, il en est incapable.","qui peut faire passer un message ou un colis dans les environs.","capable de faire passer un message ou un colis sur de longues distances pourvu qu'on y met le prix.");

$servicequalite[20] = array ("Un érudit, ","qui sait lire et c'est déjà bien.","qui pourra faire des recherches tant qu'on le paye.","qui a accès une bibliothèque conséquente, ainsi qu'aux archives de la région.");

/*$perso0 = array (
	"individus peu fréquentables" , 
	"brigands de bas-étage",
	"malandrins prêts à en découdre",
	"des engeances de la ville",
	"gens de mauvaise vie",
	"personnages à la réputation plus que douteuse",
	"mercenaires qui, pour quelques pièces d'or, acceptent tout contrat",
	"ivrognes qui oublient leurs soucis dans la bouteille",
	"exclus de la société",
	"receleurs fourguant leur camelotte",
	"femmes au physique disgracieux cherchant de la compagnie"
	);
	
$perso1 = array (
	"gardes de la ville après leur service",
	"marchands à la recherche de fortune", 
	"aventuriers qui cherchent du travail",
	"voyageurs cherchant une escorte",
	"héros en quête d'aventures",
	"jeunes femmes cherchant bonne compagnie",
	);
	
$perso2 = array (
	"nobles et des nantis n'ayant d'autre occupation que de se détendre",
	"riches marchands se reposant avant de repartir",
	"héros ayant fait fortune et coulant des jours heureux",
	"nobles",
	"veuves fortunées cherchant de la compagnie"
	);

$debut = array (
	"Les rencontres les plus fréquentes dans cette auberge sont des ",
	"Dans cette auberge, on peut rencontrer des ",
	"Dans cet établissement viennent souvent des ",
	"L'on y rencontre souvent des ",
	"Il est fréquent de croiser le chemin de ",
	"La clientèle présente est principalement composée de ",
	"Cette auberge est principalement fréquentée par des "
	);	
	
$lieu0 = array (
	"des docks, permet aux marins inactifs d'être des clients assidus.",
	"du port, laisse une odeur permanente de poisson.",
	"des bas-quartiers, rend cet établissement peu fréquentable.",
	"d'un temple d'une divinité mauvaise, amène parfois à côtoyer de drôles de religieux.",
	"des quartiers de la populace, ne permet pas d'élever le niveau de l'établissement."
);
$lieu1 = array (
	"des quartiers du peuple donne une ambiance correct sans fioriture.",
	"des docks, permet aux capitaines de vaisseaux de s'y restaurer.",
	"d'un temple d'une divinité bonne, amène souvent de braves gens.",
	"de la place du marché, donne à cet établissement une ambiance festive."
);
$lieu2 = array (
	"des riches quartiers marchands, rend souvent aisé la négociation de contrats.",
	"de l'hôtel de ville, permet d'y rencontrer souvent les notables.", 
	"de la tour d'un magicien renommé, semble attirer bon nombre de voyageurs.", 
	"de la maison d'un héros d'antan, amène celui-ci à y passer parfois pour raconter ses aventures.",
	"d'une route fortement fréquentée, permet à l'établissement d'être toujours bondé."
);*/


//création du texte l'auberge........................................................................................................
compteur('aubergedetail');
$output =' ';
$output.='<h2>'.$nom.'</h2>';
$output.="\"".$nom."\" est un".$type." ".$divers1[rand(0,count($divers1)-1)]." ".$qualif[$qualite];

if($etablissementfm==0) $output.=" tenue par ";
else $output.=" tenu par ";

if (empty($tenancier)) $output.=$proprio;
else $output.=$tenancier;

if (rand(1,10)<=7){
	$output.=" et ";
	$output.=$aideprorio;
}

$output.=".<br/><br/> Cet établissement ".$environnementtexte." est situé ";
if ($environnement==0) $output.=$route[rand(0,count($route)-1)].", ".$paysage[rand(0,count($paysage)-1)].".<br/>";
else $output.=$rue[rand(0,count($rue)-1)].", il a pour voisin proche, ".$voisin1[rand(0,count($voisin1)-1)]." et ".$voisin2[rand(0,count($voisin2)-1)].".<br/>";

if ($type =="e ferme-auberge" or ($environnement ==0 and (rand(1,10)<=3))) {$output.="<br/>"; $fermier=(1+(rand(1,2)*$qualite)); $elevageagricole=array("ovin", "bovin", "caprin", "de poule", "de porc"); $fermiertab=array("", "Un", "Deux", "Trois", "Quatre", "Cinq", "Six", "Sept");
	if ($qualiterepas<=0) {$ferme=$fermiertab[$fermier]." paysan cultive quelques champs de céréales, conjointement avec les employés de ".$typename.". Les maigres récoltes et le matériel agricole sont mis à l'abri dans petite grange en bois adossée au corps de logis.";}
	elseif ($qualiterepas==1) {$ferme=$fermiertab[$fermier]." fermiers cultivent quelques champs de céréales et de légumineuses, conjointement avec les employés de ".$typename.". Les récoltes et le matériel agricole sont mis à l'abri dans grange en bois, qui sert aussi d'habitation aux agriculteurs, proche du corps de logis.";}
	elseif ($qualiterepas>=2) {$ferme=$fermiertab[$fermier]." fermiers cultivent quelques champs de céréales et de légumineuses, ainsi qu'un petit élevage ".$elevageagricole[rand(0,count($elevageagricole)-1)].", pour le compte du propriétaire de ".$typename.". Les récoltes et le matériel agricole sont mis à l'abri dans grange en bois et une étable de pierre, qui sert aussi d'habitation aux exploitants agricoles, proche du corps de logis.";}}
$output.=$ferme;

if ($type =="e auberge fortifiée" or $type ==" établissement fortifié"  or ($environnement ==0 and (rand(1,10)<=(2+$qualite)))){$output.="<br/>"; $nombretour=(rand(1,2)+$qualite);
	if ($qualite==0 && $nombretour==1) {$soldat=rand(1,3); $portier=rand(0,1); $fortifiee="Une palissade de bois de ".rand(3,4)." mètres de haut, additionnée d'une tourelle de bois, protége sommairement ".$typename.".";}
	elseif ($qualite==0) {$soldat=rand(1,3); $portier=rand(0,1); $fortifiee="Une palissade de bois de ".rand(3,4)." mètres de haut, additionnée de ".$nombretour." tourelles de bois, protége sommairement ".$typename.".";}
	elseif ($qualite==1) {$soldat=rand(2,5); $portier=1;  $fortifiee="Un robuste mur de pierre d'une hauteur de ".rand(3,4)." mètres, surmonté de ".$nombretour." tourelles de bois, forme une enceinte autour de ".$typename.".";}
	else {$soldat=rand(3,7); $portier=1;  $fortifiee="Une muraille de pierre d'une hauteur de ".rand(4,5)." mètres, disposant d'un chemin de ronde et de ".$nombretour." tours de pierre, forme une enceinte efficace autour de ".$typename.".";}}
$output.=$fortifiee;


$output.="<br/>";

$output.="Le bâtiment ".$forme." est composé d'un ".$etagetexte.". ";
if (($forme=="disposant d'une cour extérieure" or $forme=="principale, séparé de son annexe par une petite cour,") && $environnement ==1) {$portier=1; $output.="Un mur de pierre d'une hauteur de ".(3+$qualite)." mètres, sépare la cour et la rue. ";}
if ($qualite==0) $output.= $construction0[rand(0,count($construction0)-1)].". ";
else if ($qualite==1) $output.=$construction1[rand(0,count($construction1)-1)].". ";
else $output.=$construction2[rand(0,count($construction2)-1)].". ";
$output.=$cour." ".$terrassetexte;

if ($type ==" relai de voyageur" or $type =="e auberge-relai" or $type ==" gîte d'étape"  or ($environnement ==0 and (rand(1,10)<=(3+$qualiteservice)))){$output.="<br/>"; 
	if ($qualiteservice<=0) {$placeecurie=rand(4,8); $relai="Le bâtiment est adjoint d'une écurie en bois, composée de ".$placeecurie." stalles sales, le fourrage est entreposé à même le sol dans un coin. L'écurie étant petite, on ne peut pas y garer de véhicule à l'intérieur. De plus, il n'y a pas de palefrenier, les cavaliers doivent s'occuper eux-même de leurs montures.";}
	elseif ($qualiteservice==1) {$palefrenier=1; $placeecurie=rand(7,10); $relai="Le bâtiment est adjoint d'une grande écurie en bois, composée de ".$placeecurie." stalles, une échelle permet d'accéder à l'étage dans lequel sont entreposés le fourrage et la paille propre. De plus, il est possible de mettre un véhicule à l'abri, on y trouve aussi une petite forge pour faire des réparations. Un palefrenier prend soin des chevaux et les prépare sur demande.";}
	else {$placeecurie=rand(8,12); $palefrenier=1; $relai="Le bâtiment est adjoint d'une longue écurie de pierre, composée de ".$placeecurie." boxes individuel. Un palefrenier compétent prend grand soin des chevaux et est capable d’entretenir, voir à réparer les attelages et referrer les chevaux grâce à une forge. Un escalier extérieur permet d'accéder à l'étage du bâtiment dans lequel sont entreposés le fourrage, la paille propre et les appartements du palefrenier. De plus, il est possible de mettre deux véhicules à l'abri.";}} 
elseif ($environnement ==0) {$relai="L'établissement n'a pas d'écurie, mais dispose d'une barre d'attache et d'un enclos sommaire.";}
elseif ($environnement ==1 && rand(1,10)<=(1+$qualiteservice)) {$placeecurie=(rand(2,3+$qualiteservice)); $relai="L'établissement est adjoint d'une écurie en bois, composée de ".$placeecurie." stalles. Il dispose aussi d'une barre d'attache.";}
elseif (rand(1,10)<=(3+$qualiteservice)) {$relai="L'établissement n'a ni écurie, ni enclos, mais dispose d'une barre d'attache sommaire.";}
$output.=$relai;



$output.="<br/>";
if ($etage==0) $output.="A l'intérieur, ";
else $output.="Au rez-de-chaussée, "; 
$output.="se trouve la ".$namesalle.", elle contient ".$tablenombre." tables et peut accueillir ";
$environ=array(" au maximum ", " environ ", " à peu près ", " à première vue ", " à vue de nez ", " approximativement ", "");
$output.=$environ[rand(0,count($environ)-1)].$place." personnes. ";
	
$plu=rand(0,1);
if ($qualite==0) {
	if ($plu==0) $output.=$objet0sin[rand(0,count($objet0sin)-1)];
	else $output.=$objet0plr[rand(0,count($objet0plr)-1)];}
else if ($qualite==1) {
	if ($plu==0) $output.=$objet1sin[rand(0,count($objet1sin)-1)];
	else $output.=$objet1plr[rand(0,count($objet1plr)-1)];}
else {
	if ($plu==0) $output.=$objet2sin[rand(0,count($objet2sin)-1)];
	else $output.=$objet2plr[rand(0,count($objet2plr)-1)];}
if ($plu==0) $output.=" ".$verbe[rand(0,count($verbe)-1)]." la qualité des lieux. ";
else $output.=" ".$verbes[rand(0,count($verbes)-1)]." la qualité des lieux. ";

if ($type ==" cabaret" or (rand(1,15)<=(1+$qualiteservice))) {
	if ($qualiteservice<=0){$artiste=1; $cabaret="Dans un coin de ".$namesalle.", un espace est dégagé pour aménager une scène sommaire et mal éclairée.";}
	elseif ($qualiteservice==1){$artiste=1; $cabaret="Dans le fond de ".$namesalle.", une petite estrade de bois forme une scène sommaire.";}
	else {$artiste=1; $cabaret="Dans le fond de ".$namesalle.", un petit escalier donne accès à une estrade de bois qui surplombe la pièce, formant une large scène garnie de somptueux rideaux amovible pouvant cacher la préparation des artistes.";}} 
$output.=$cabaret;

if ($type =="e maison de jeu" or $type ==" tripot" or (rand(1,15)<=(1+$qualiteservice))) {
	if ($qualiteservice<=0) $tripot="Dans un coin de ".$namesalle.", un espace de jeu est amenagé, on y joue principalement au ".$jeu[rand(0,count($jeu)-1)].", les tricheurs y sont légion et les mises y sont faibles.";
	elseif ($qualiteservice==1) $tripot="Dans un coin de ".$namesalle.", un espace de jeu surélevé et séparé par des rideaux, est aménagé, on y joue principalement au ".$jeu[rand(0,count($jeu)-1)].", l".$propriotexte." surveille et expulse les suspects de triche.";
	else {$spadassin=1; $tripot="Dans une arrière-salle, gardée par un spadassin, un espace de jeu est aménagé dans le confort et le luxe, on y joue principalement au ".$jeu[rand(0,count($jeu)-1)].", les mises y sont forte, mais les joueurs sont bons et tricher y est dangereux.";}}
$output.=$tripot;

$output.= "<br/>".$dispo.'se situe la cuisine où '.$cuistot. " est au fourneau, on y trouve aussi le cellier dans ".$cellier;
if ($qualiterepas<=0) {
	$output.=$cuistotfm." prépare ".$mauvaisplat[rand(0,count($mauvaisplat)-1)]." qu'il est fort déconseillé de manger.";}
elseif ($qualiterepas>=2) {
	if ($sexecuistot==1) $output.="Le "; else $output.='La ';
	$output.=$cuistotfm." se targue de faire le meilleur ".$bonplat[rand(0,count($bonplat)-1)]." de toute la région.";}
else $output.="";

if ($type=="e maison de bain" or $type=="e maison d'étuvage" or ($bordelnumber==1 && (rand(1,10)<=(3+$qualiteservice))) or ($environnement ==1 && (rand(1,10)<=(1+$qualiteservice))) || ($environnement ==0 && (rand(1,10)<=(0+$qualiteservice)))) {
	$output.="<br/>"; $nombreetuve=(2+$qualiteservice); if($nombreetuve<2) $nombreetuve=2; if($bordelnumber==1)$motifetuve="érotiques"; else $motifetuve="floraux";
	if ($type=="e maison de bain" or $type=="e maison d'étuvage") {$nombreetuve=(rand(2,3)+($qualiteservice*2)); if($nombreetuve<2) $nombreetuve=2; $bordelnumber=rand(0,1); if($bordelnumber==1) $prostitueetuve=($prostitue+(rand(1,2)+$qualiteservice));} 
	if ($dispoetuve=="En extérieur, sous un auvent, " && $qualiteservice==1) $etuve=$dispoetuve."".$nombreetuve." étuves disposant de rabat isolant, pouvant contenir deux ou trois personnes chacune, sont mises à la disposition de la clientèle. C'est un lieu mixte, conviviale et où on peut boire et manger.";
	elseif ($dispoetuve=="En extérieur, sous un auvent, " && $qualiteservice>=2) $etuve=$dispoetuve."".$nombreetuve." étuves propres disposant de somptueuses tentures isolante et rabattable, pouvant contenir de deux ou trois personnes chacune, sont mises à la disposition de la clientèle. C'est un lieu mixte, conviviale et où on peut boire et manger toute en profitant d'un bon bain chaud.";
	elseif ($qualiteservice<=0) $etuve=$dispoetuve."".$nombreetuve." grandes baignoires aux eaux sales, sont mises à la disposition de la clientèle. C'est un lieu mixte et conviviale, trop conviviale même, étant donné le faible prix, elles servent de bain à toutes les personnes peu fréquentables et peu fortunées du coin.";
	elseif ($qualiteservice==1) $etuve=$dispoetuve."".$nombreetuve." étuves chaudes, pouvant contenir deux ou trois personnes chacune, sont mises à la disposition de la clientèle, des fresques aux motifs ".$motifetuve." ornent les murs. C'est un lieu de sociabilité où l'on discute et mange.";
	else $etuve=$dispoetuve."".$nombreetuve." étuves propres et vaporeuses, pouvant contenir de deux ou trois personnes chacune, sont mises à la disposition de la clientèle, de somptueuses fresques aux motifs ".$motifetuve." ornent les murs. C'est un lieu mixte, chaud, où on peut boire et manger, bref un haut lieu de convivialité et de sociabililté des environs.";}
$output.=$etuve;

if ($type =="e brasserie" or (rand(1,15)<=(0+$qualiteboisson))){$output.="<br/>";  
	if ($qualiteboisson<=0) {
		$brasserie=$dispobrasserie."une brasserie artisanale fonctionne tant bien que mal sous la surveillance du propriétaire de l'établissement', mais l'unique cuve et le manque de place pour stocker les céréales n'offrent qu'un maigre rendement et une bière de mauvaise qualité.";}
	elseif ($qualiteboisson==1) {$nombrecuve=rand(2,4); 
		$brasserie=$dispobrasserie.$cuistotfm." fait fonctionner une brasserie artisanale, dans laquelle on trouve ".$nombrecuve." cuves et un stockage de céréales dans une mezzanine, atteignable par une échelle. Le rendement n'est pas énorme, mais la bière est de qualité et suffit aux besoins de la taverne.";}
	elseif ($qualiteboisson>=2) {$nombrecuve=(rand(2,4)*2); $brasseur=1;
		$brasserie=$dispobrasserie."un maître-brasseur, ".$pnjbrasseur." fait fonctionner une brasserie d'artisan, dans laquelle on trouve ".$nombrecuve." cuves et un stockage de céréales dans une pièce adjacente. La bière est de qualité et le rendement important, suffit largement aux besoins de la taverne et permet de vendre le surplus aux alentours.";}}
$output.=$brasserie;

if ($type =="e distillerie" or ($brasserie=="" && (rand(1,15)<=(0+$qualiteboisson)))){$output.="<br/>";  
	if ($qualiteboisson<=0) {$nombrefut=rand(2,3); 
		$distillerie=$dispodistillerie."une distillerie artisanale fonctionne tant bien que mal sous la surveillance du propriétaire de l'établissement, mais le petit alambic et les ".$nombrefut." tonneaux de fermentation n'offrent qu'un maigre rendement.";}
	elseif ($qualiteboisson==1) {$nombrefut=rand(3,4); 
		$distillerie=$dispodistillerie.$cuistotfm." fait fonctionner une distillerie artisanale, dans laquelle on trouve ".$nombrefut." tonneaux de fermentation et un alambic de cuivre chauffé à feu nu. Le rendement n'est pas énorme, mais l'alcool obtenu suffit aux besoins de l'établissement.";}
	elseif ($qualiteboisson>=2) {$nombrefut=(rand(3,4)*2); $distilleur=1;
		$distillerie=$dispodistillerie."un distilleur, ".$pnjdistilleur."fait fonctionner une distillerie d'artisan, dans laquelle on trouve ".$nombrefut." fûts de fermentation et deux beaux alambics de cuivre chauffés par bain-marie. Le rendement important suffit largement aux besoins de l'établissement et permet de vendre le surplus aux alentours.";}}
$output.=$distillerie;

if (($type =="e maison de passe" or $type ==" bordel" or $type =="e maison de plaisir") && $bordelnumber==1 && $typeetablissement!=1) {
	$etage1chambre=(rand(1,2)+($qualite*2));
	$etage1chambrepasse=(rand(2,4)+($qualite*2));
	$etage2chambre=(rand(2,3)+$qualite);}
elseif ($typeetablissement==2) {
	$etage1chambre=(rand(2,4)+($qualite*2));
	$etage1chambrepasse=0;
	$etage2chambre=(rand(2,3)+$qualite);}
elseif ($typeetablissement==0) {
	$etage1chambre=(rand(2,4)+$qualite);
	$etage1chambrepasse=0;
	$etage2chambre=rand(2,3);}


$output.="<br/>";
$dortoirtab=array($dispotab[rand(0,count($dispotab)-1)]."se trouve un dortoir pour les moins fortunées.", "Il n'y a pas de dortoir, mais il est possibilité de dormir dans la ".$namesalle." en négoçiant avec l".$propriotexte.".", "Il est possible de dormir dans le grenier pour les moins fortunées.");
if ($forme=="principale, séparé de son annexe par une petite cour,") $dortoir="<br/>Dans le grenier de l'annexe de l'autre côté de la cour, se trouve un dortoir pour les moins fortunées, on y accède par une échelle.";
elseif($forme=="principale, accompagné d'une aile en bois") $dortoir="<br/>Un dortoir est aménagé dans le grenier de l'aile adjacente, pour les moins fortunées.";
elseif ($qualite<2) $dortoir=$dortoirtab[rand(0,count($dortoirtab)-1)];
else $dortoir="<br/>Il n'y a pas de dortoir pour les moins fortunées, mais une place dans les appartements des serviteurs ou dans le grenier est négociable.";

//Idées non utilisée : appartement du propriétaire, appartement des serviteurs, ce qui relie les chambres
if ($typeetablissement==1) $output.="La taverne ne dispose ni de chambre, ni de dortoir pour sa clientèle, mais bon, en cas de besoin, ce doit être négociable dans un coin de la grande salle, parmi les appartements des serviteurs ou dans le grenier.";

if ($etage>=1 && $typeetablissement!=1) {
	$output.=" A l'étage se trouvent ";
	if ($qualitechambre<=0 && $etage1chambre==1 && $bordelnumber==1){$output.=$etage1chambrepasse." petites chambres, composées uniquement d'un matelas de foin disposé sur une banquette, elles ne sont séparées du couloir que par un simple rideau. "; $output.=$etage1chambre." petite chambre où l'on partage un matelas de foin avec les puces et/ou une autre personne, sans verrou aux portes.";}
	else if ($qualitechambre<=0 && $bordelnumber==1){$output.=$etage1chambrepasse." petites chambres, composées uniquement d'un matelas de foin disposé sur une banquette, elles ne sont séparées du couloir que par un simple rideau. "; $output.=$etage1chambre." petites chambres où l'on partage un matelas de foin avec les puces et/ou une autre personne, sans verrou aux portes.";}
	else if ($qualitechambre==1 && $bordelnumber==1){$output.=$etage1chambrepasse." petites chambres, composées d'un simple lit de bois, d'un matelas de plume, d'une jolie fresque érotique et d'une bassine d'eau, elles ne sont séparées du couloir que par une porte sans verrou. "; $output.=$etage1chambre." petites chambres avec un minimum de commodité, c'est-à-dire, un lit garni d'un matelas rembourré de laine, un coffre et un verrou qui permet de fermer la porte.";}
	else if ($qualitechambre>=2 && $bordelnumber==1){$output.=$etage1chambrepasse." petites chambres, composées d'un lit robuste en bois, d'un matelas en duvet d'oie ou de canard et d'une baignoire, de souptueuses fresque érotiques, et d'un verrou qui permet de fermer la porte. "; $output.=$etage1chambre." petites chambres joliment décorées, garnies d'un lit, d'un matelas de plume et d'une solide porte munie d'une serrure à clé.";}
	else if ($qualitechambre<=0)$output.=$etage1chambre." chambres où l'on partage un matelas de paille avec les puces et/ou une autre personne, sans verrou aux portes.";
	else if ($qualitechambre==1)$output.=$etage1chambre." chambres avec un minimum de commodité, c'est-à-dire, un lit garni d'un matelas rembourré de laine, une couverture en laine épaisse et grossière, un coffre et un verrou qui permet de fermer la porte.";
	else if ($qualitechambre>=2) $output.=$etage1chambre." chambres joliment décorées, garnies d'un lit-armoire isolant du bruit et du froid, d'un matelas de plume et d'une solide porte munie d'une serrure à clé. Il y a même une chance pour que votre hôte glisse une bouillotte sous les couvertures avant que le client ne monte dormir.";
	$totalchambre=$etage1chambre+$etage1chambrepasse;}
if ($etage==2 && $typeetablissement!=1) {
	$output.="<br/>Au deuxiéme étage se trouve ";
	if ($qualitechambre<=0) $output.=$etage2chambre." autres chambres dites \"luxueuses\", mais dont le principal luxe est une simple caisse de bois garnie d'un matelas de foin, d'une armoire et d'un verrou.";
	else if ($qualitechambre==1) $output.=$etage2chambre." autres chambres plus spacieuses pourvue d'un lit double, un coffre et d'une baignoire, la porte se ferme grâce à un verrou solide.";
	else if ($qualitechambre>=2) $output.=$etage2chambre." autres chambres richement décorées, avec lit double à baldaquin, bureau de travail, baignoire, grande armoire, diverses décorations et une robuste serrure à la porte.";
	$totalchambre=$etage1chambre+$etage1chambrepasse+$etage2chambre;}
	
if ($typeetablissement!=1) $output.=" ".$dortoir;


//place temporaire
$personnelcuisine=$qualiterepas;
$personnelsalle=$qualiteboisson;
$personneldebain=(round(($nombreetuve/3), 0));
$personneldechambre=(round(($totalchambre/10), 0));

/*$output.="<br/>personnelcuisine ".$personnelcuisine."<br/>personnelsalle ".$personnelsalle."<br/>personneldebain ".$personneldebain."<br/>personneldechambre ".$personneldechambre;
$output.="<br/>qualiterepas ".$qualiterepas."<br/>qualiteboisson ".$qualiteboisson."<br/>qualitechambre ".$qualitechambre."<br/>qualiteservice ".$qualiteservice;*/
$output.="<br/>";
if ($nbrservice==1) $output.="<br/>Il est aussi possible d'avoir un service supplémentaire dans cet établissement (contre rémunération bien entendu) : <br/>";
else $output.="<br/>Il est possible de bénéficier des ".$nbrservice." services supplémentaires suivants dans cet établissement (contre rémunération bien entendu) : <br/>";

/*if ($etage>0  && $typeetablissement!=1) {
	$output.="-Chambre, <i>";
	if ($qualitechambre<=0){
		if ($etage==1) $output.=$totalchambre ." misérables pièces";
		else if ($etage==2) $output.=$totalchambre ." misérables pièces"; 	
	}
	else if ($qualitechambre==1)$output.=$totalchambre." pièces avec des commodités agréables";
	else $output.=$totalchambre." salles spacieuses et soignées";
	$output.='.</i><br/>';	
	$nbrservice=$nbrservice-1;
}*/



/*

Salon privé de guilde

Sanctuaire chapelle oratoire

Patrouilleur ruraux

chien chat

*/

for ($i = 0; $i < $nbrservice; $i++) {
	$element=rand(0,count($servicequalite)-1);
	$output.="-".$servicequalite[$element][0].'<i>'.$servicequalite[$element][$qualite+1]."</i><br/>";
	unset($servicequalite[$element]);
	$servicequalite = array_values($servicequalite);
	
}
/*$output.='<br/>'.$debut[rand(0,count($debut)-1)];

	if ($qualite==0) $output.=$perso0[rand(0,count($perso0)-1)];
	else if ($qualite==1) $output.=$perso1[rand(0,count($perso1)-1)];
	else $output.=$perso2[rand(0,count($perso2)-1)];

$output.=', de plus la proximité ';
	if ($qualite==0) $output.=$lieu0[rand(0,count($lieu0)-1)];
	else if ($qualite==1) $output.=$lieu1[rand(0,count($lieu1)-1)];
	else $output.=$lieu2[rand(0,count($lieu2)-1)];*/

//affichage de l'auberge
	//$output.= '	<form method="get" onsubmit="return valid();" action="index.php?page=aubergedetail">';		
	//foreach ($_GET as $key=>$val){			
	//$output.= "<input type='hidden' name='".$key."' value=\"".$val."\"'>";		}	

	$output.= appeltableauauberge();
	
	//$output.= '<br />'.'<input type="submit" name="genere" value="Générer la même auberge" />&nbsp;<input type="submit" formmethod="POST" formtarget="_blank" formaction="index.php?page=aubergedetaillee" name="bouton" value="Générer une autre auberge">&nbsp;<input type="submit" formmethod="POST" formtarget="_blank" formaction="index.php?page=repas" name="bouton" value="Générer un menu"></form>';	

	echo $output;
}
else {	
	echo appeltableauauberge();
}

?>

