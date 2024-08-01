<?php
include ('lib/compteur.php');

function creerNomRuine(){
	$LieuMas = array("Bourg","Castel","Champ","Château","Fond","Mont","Moulin","Pont","Port","Pré","Pic","Puy","Roc","Rocher","Tertre","Val","Valon","Lac","Bois","Bord","Cerf",
                    "Croc","Comble","Mur","Parc","Gué","Garde","Havre","Deuil");
	
	$LieFem = array("Roche","Ville","Vigne","Terre","Forge","Maison","Mer","Rive","Roche",
					"Ronce","Cime","Herbe","Citadelle","Passerelle","Butte","Colline","Brume",
					"Cour","Douve","Dune","Fosse","Grange","Muraille","Plaine","Tour","Valée",
                    "Tourbière","Crète","Pierre","Hache","Corneille","Tempête");

	$AdjMas = array("vif","rude", "vert", "vieu", "bas", "beau", "blanc", "clair","fier","franc","froid", 
					"grand", "haut", "morne", "mort", "noble", "noir","fou","court","-sur-mine","-sur-lac",
					" du tonnerre","-à-brume","-à-embrum","-à-fer","-à-loup","-à-pluie","brave","calme","courbe","-de-fer",
					"-de-feu","-de-mine","-de-père","-de-pluie","-de-suif","doré","droit","dur","-en-bois","-en-croc",
					"-en-embrum","-en-fer","-en-feu","-en-ours","-en-père","-en-suif","fer","long","neuf","-sous-cerf",
					"-sous-croc","-sous-écume","-sous-lin","-sous-loup","-sous-puit","-sous-suif","-sous-bois",
					"-sous-colline","-sous-laine","-sous-pluie","-sous-tourbe","-sur-suif","-sur-puit","-sur-loup",
					"-sur-bois","-sur-cerf","-sur-croc","-sur-écume","-sur-embrum","-sur-lin","-sur-laine","-sur-pluie",
					"-sur-tourbe","royal");
					
	$AdjFem = array("vive","rude","verte","vieille","basse","belle","blanche","claire","fière","franche","froide","grande",
					"haute","morne","mort","noble","noire","folle", "courte","-sur-mine","-sur-lac"," du tonnerre","-à-brume",
					"-à-embrum","-à-fer","-à-loup","-à-pluie","brave","calme","courbe","-de-fer","-de-feu","-de-mine","-de-père",
					"-de-pluie","-de-suif","dorée","droite","dure","-en-bois","-en-croc","-en-embrum","-en-fer","-en-feu",
					"-en-ours","-en-père","-en-suif","fer","longue","neuve","-sous-cerf","-sous-croc","-sous-écume","-sous-lin",
					"-sous-loup","-sous-puit","-sous-suif","-sous-bois","-sous-embrum","-sous-laine","-sous-pluie","-sous-tourbe",
					"-sur-suif","-sur-puit","-sur-loup","-sur-bois","-sur-cerf","-sur-croc","-sur-écume","-sur-embrum","-sur-lin",
					"-sur-laine","-sur-pluie","-sur-tourbe","royale");
		
	$QuaMas = array("Vif","Rude", "Vert", "Vieu", "Bas", "Beau", "Blanc", "Clair","Fier","Franc","Froid", 
					"Grand", "Haut", "Morne", "Mort", "Noble", "Noir","Fou","Court",
					"Brave","Calme","Courbe","Rouge");
	
	$QuaFem =array("Vive","Rude","Verte","Vieille","Basse","Belle","Blanche","Claire","Fière","Franche","Froide","Grande",
					"Haute","Morne","Mort","Noble","Noire","Folle", "Courte","Calme","Courbe","Droite","Dure","Grise");

	$NomMas = array("ecueil","bourg","castel","champ","château","fond","mont","moulin","pont","port","arbre",
					"pré","pic","puy","roc","rocher","tertre","val","valon","lac","bois","bord","cerf","croc","comble","mur");
	
	$NomFem = array("roche","ville","eau","vigne","terre","forge","maison","mer","rive","roche",
					"ronce","cime","herbe","citadelle","passerelle","butte","colline","brume",
					"cour","douve","dune","fosse","grange","muraille","plaine","tour","valée","épée","épine");

    $lieudit='';
    $trand = rand(1,100);
	switch($trand){
		case $trand<25;
			$lieudit.="de ".$LieuMas[rand(0,count($LieuMas)-1)].$AdjMas[rand(0,count($AdjMas)-1)];
		break;
		case $trand>=25&&$trand<48;
			$lieudit.="de la ".$LieFem[rand(0,count($LieFem)-1)].$AdjFem[rand(0,count($AdjFem)-1)];
		break;
		case $trand>=48&&$trand<76;
			$lieudit.="du ".$QuaMas[rand(0,count($QuaMas)-1)].$NomMas[rand(0,count($NomMas)-1)];
		break;
		case $trand>=76&&$trand<=100;
			$lieudit.="de la ".$QuaFem[rand(0,count($QuaFem)-1)].$NomFem[rand(0,count($NomFem)-1)];
		break;
	}
	return $lieudit;
}

    $nom = creerNomRuine();

    $ruine = array(
        "Des tunnels creusés par des chasseurs de trésors sous un monolithe bizarre invoqué depuis la dimension du Typhon.",
        "La pile isolée et déconnectée d’un ancien aqueduc, s’élevant au milieu d’une vallée, à plusieurs dizaines de mètres de hauteur.",
        "Le chantier abandonné d’une cathédrale construite en pleine région sauvage par des pèlerins illuminés.",
        "Les couloirs d’un immense tumulus entre les racines d’un arbre géant.",
        "Les multiples niveaux de caves d’une ancienne cité vinicole gnome aujourd’hui rasée – la plupart des caves communiquaient déjà entre elles avant que d’autres ouvertures ne soient percées.",
        "Un complexe souterrain construit par une antique civilisation chtonienne, aux ornements outrageux et à la configuration un brin dérangeante pour la conformation physique humaine.",
        "Un fortin abandonné aux marches du sauvage, tout au bout d’un éperon barré.",
        "Un temple à la déesse de la magie, jadis assiégé et pris par des forces vénérant la déesse de la nuit, repris et constamment disputé jusqu’à ce qu’on en perde la trace.",
        "Un vieux navire de pierre, perdu dans le désert, ensablé et oublié, jusqu’à ce qu’un glissement de terrain le révèle quelque part, n’importe où.",
        "Un village construit sous la saillie d’une vaste barre rocheuse percée de cavernes.",
        "Une ancienne cité aux murs cyclopéens enfouie, pratiquement intacte, sous les cendres d’un volcan.",
        "Une antique bibliothèque perdue dans les méandres des ruelles d’une cité de terre sèche.",
        "Une arène de combat au sommet d’une colline, vestige d’un temple à la déesse des batailles aujourd’hui abandonné à la végétation.",
        "Une cité royale au plan carré, envahie par des arbres immenses et une végétation luxuriante.",
        "Une dernière maison elfique dont les poutres et colonnes imputrescibles ont résisté aux outrages du temps et à la lente corruption des environs.",
        "Une forêt féerique pétrifiée dans le temps, à jamais immobile, verte et moussue, pleine de pièges, de poisons et de venins.",
        "Une manufacture naine abandonnée au cœur d’une vallée industrielle aux ressources épuisées.",
        "Une mine de charbon abandonnée depuis des années à la suite d’effondrements et d’inondations étranges et fatales.",
        "Une nécropole elfique construite à la verticale d’une immense falaise, fouillée, pillée, vidée et qui attire toujours autant les convoitises.",
        "Une pyramide construite en grande partie sous le sol, dont seule la pointe émerge."
);

    $ruine_alternative = array(
        "Carrefour","Village","Bourgade","Ville","Cité","Temple","Tour","Tunnel","Domaine agricole","Temple","Monastère","Pont fortifié","Sanctuaire",
        "Camp abandonné","Ville orque","Forteresse","Académie","Cité souterraine naine","Laboratoire","Observatoire","Sépulcre","Tertre","Dernière maison elfique","Tumulus",
        "Habitat troglodyte","Mégalithes","Mine","Murailles","Nécropole","Palais","Puits","Arènes","Lazaret","Caravansérail","Maison","Carrière","Manufacture","Cavernes","Moulin",
        "Champ","Muraille","Champ de bataille","Port","Château","Relais","Chemin","Rivière","Cité","Route","Colline","Sanctuaire","Église","Scierie","Entrepôt","Souterrains","Fabrique",
        "Taberge","Ferme","Temple","Foire","Tertre","Forêt","Théâtre","Forteresse","Tour","Fortin","Vallée","Grand hall","Village","Hameau","Ville","Alcôve","Amphithéâtre","Antre",
        "Arcade","Arènes","Armurerie","Arsenal","Ateliers","Auberge","Aula","Balcon","Baraquements","Barbacanes","Basse-cour","Bastillon","Bibliothèque","Bordel","Boutique","Bretèche",
        "Bureau","Camp temporaire","Campanile","Casemate","Catacombes","Cavernes naturelles","Caves","Cazelle","Celliers","Chais","Chambre","Chaussée","Cheminées","Chenils","Citernes",
        "Clocher","Cloître","Coffre-fort","Concrétions naturelles","Couloir instable","Couloirs","Crevasse","Cryptes","Cuisines","Déambulatoire","Décharge","Dispensaire","Dortoirs",
        "Éboulement","Écluse","Écuries","Égouts","Poste de veille","Élevage","Enclos","Entrepôts","Escaliers","Fontaine","Forge","Fosse","Four","Galerie de surveillance","Garde-pile",
        "Geôles","Glacière","Grottes étroites","Halles","Herboristerie","Jardins","Laboratoire","Labyrinthe","Latrines","Lavoir","Lazaret","Mess","Mezzanine","Mines","Moineau","Moulin",
        "Nécropole","Nef","Nid","Nurserie","Ouvrage de défense","Passage inondé" ,"Passage secret","Phare","Placards","Point d’eau","Pont et gouffre","Pont suspendu","Porche",
        "Porticuli","Poterne","Puits à eau","Puits d’ascenseur","Quais","Redoute","Réfectoire","Refuge","Repaire","Réserves","Réservoir","Salle à manger","Salle au trésor",
        "Salle cachée","Salle d’entraînement","Salle d’étude","Salle d’invocation","Salle de garde","Salle de réception","Salle de réunion","Salle des orbes","Salle des portes",
        "Salle du trône","Salle majestueuse","Sanctuaire","Sanctuaire abandonné","Temple abandonné","Théâtre","Thermes","Tombeau","Tour de garde","Tunnel","Volière","Zoo"
);

    $abandon = array(
        "L’hiver est venu et le froid s’est installé.","La déesse de la nuit a lâché ses morts-vivants sur les campagnes.",
        "La forêt est revenue, encouragée par les fée.s","La grande route s’est déplacée plus loin vers l’ouest.","La sécheresse a brûlé les champs et vidé les rivières.",
        "Les gens sont tombés malades.","Les gobelins ont razzié et pillé l’endroit durant des générations.","Les orques ont envahi le pays.","Les ressources locales se sont épuisées.",
        "Les structures sociales se sont effondrées suite à des conflits.","Personne ne sait pourquoi les gens sont partis.","Tous les jeunes sont partis.",
        "Un accident magique a créé une zone morte.","Un ancien roi est revenu d’entre les morts.","Un grand dragon rouge est passé par là.",
        "Un portail vers les Abysses a attiré tous les maléfices possibles.","Un seigneur élémentaire fâché a dévasté les lieux.","Un sorcier a maudit les lieux.",
        "Un tremblement de terre a détruit les infrastructures.","Une guerre a ravagé la contrée."
);

    $rumeur = array(
        "Ceux qui visitent les ruines en reviennent maudits et malchanceux.","Des créatures se disputent l’endroit depuis longtemps.",
        "Des magiciens et des sorciers ont l’habitude de conduire leurs rituels dans les ruines.","Des monstres étranges y naissent naturellement à cause de l’influence du Typhon.",
        "Des sacrifices humains y sont régulièrement pratiqués.","Il faut posséder un artéfact magique spécifique pour visiter les ruines sans danger.",
        "L’évènement qui a causé la ruine des lieux était le résultat d’une histoire d’amour malheureuse et d’une vengeance.",
        "Les dieux n’ont aucune influence à l’intérieur des ruines.","Les humanoïdes monstrueux évitent les ruines, mais patrouillent sans cesse dans les environs.",
        "Les ruines servent de refuges à tous ceux qui fuient la justice.","Les ruines servent de relais à des esclavagistes.",
        "On peut entendre un démon murmurer de noirs conseils aux visiteurs.","Personne n’est jamais revenu des ruines.",
        "Si on voit un corbeau blanc avant de rentrer dans les ruines, tout se passera bien.","Un ancien dragon s’est installé quelque part dans les ruines et y sommeille depuis lors.",
        "Un héros du passé a disparu là-bas au cours d’une mission de sauvetage.","Un trésor immense y est dissimulé derrière des sceaux magiques et des pièges.",
        "Une créature bienveillante vit dans les ruines qui récompense les visiteurs.","Une créature surnaturelle très puissante est prisonnière là-bas.",
        "Une énigme détermine le destin des visiteurs."
);

    $ecart = array(
        "C’est en plein milieu du sauvage.","C’est trop loin de tout.","Il faut obtenir l’autorisation des dieux pour passer.",
        "Il y a trop de monstres dans les environs.","La loi interdit aux gens d’y aller.","Le chemin se dérobe constamment à ceux qui cherchent les ruines.",
        "Le seigneur local exige de rencontrer tous ceux qui se dirigent vers les ruines.","Les entrées sont inaccessibles.","Les humanoïdes monstrueux rôdent un peu partout.",
        "Les lieux sont maudits.","Les superstitions sont puissantes.","On ne sait pas vraiment où la ruine se trouve et il y a trop de versions contradictoires.",
        "Personne n’est jamais revenu.","Seule l’invocation d’un démon permet de trouver le chemin.","Seuls les fous et les idiots y vont – c’est un attrape-nigaud.",
        "Tous les abords ont été piégés par des générations de voisins.","Tout le monde sait que la ruine n’existe pas.",
        "Un grand dragon a bien prévenu que personne ne devait y aller.","Un ordre de paladins protège et défend les accès.","Une secte d’assassins empêche l’accès."
);

    $trouver = array(
        "De grandes richesses","De quoi lever une malédiction ancienne","De vieux papiers ou de rares grimoires","Des informations sur une histoire ancienne",
        "Des preuves concernant la culpabilité ou l’innocence d’un criminel","Des réponses","L’immortalité","La révélation d’un grand secret","Le remède à une grave maladie",
        "Les signes d’une royauté","Un artéfact magique","Un héritage familial","Un indice pour vaincre un grand méchant pas beau","Des ennuis","Un monstre particulier",
        "Un passage vers un autre endroit","Un sage","Un sort unique et puissant","Une carte","Une relique divine"
);

    $danger = array(
        "De nombreux prédateurs","Des éboulements soudains","Des glyphes magiques","Des humanoïdes monstrueux aux fréquents passages","Des parasites",
        "Des pièges vicieux","Des poisons et venins","Des poussières toxiques","Des structures fragiles qui s’écroulent","L’air empoisonné ou absent","L’eau polluée",
        "Les équipes de nettoyeurs","Les ténèbres vivantes","Se perdre et s’égarer","Un fantôme","Un monstre invincible","Un passage vers le Typhon","Un passage vers les Abysses",
        "Une divinité malfaisante","Une malédiction terrible"
);

    $qui = array(
        "Des brigands et pillards","Des contrebandiers","Des fées","Des gnolls","Des gobelins","Des guenaudes","Des hors-la-loi","Des humains","Des elfes","Des nains",
        "Des gnomes","Des mercenaires","Des monstres","Des morts-vivants","Des orques","Des prédateurs","Un culte maléfique","Un démon","Un dragon","Un groupe secret de paladins",
        "Un sanctuaire de la déesse de la nuit","Une secte d’assassin","Une société secrète"
);

    $pourquoi = array(
        "Comme base d’opération","Pour attendre quelque chose","Pour conduire un rituel","Pour conquérir la région","Pour construire une communauté",
        "Pour défendre les lieux","Pour dissimuler quelque chose","Pour effectuer des recherches","Pour élever des petits","Pour établir un temple",
        "Pour exploiter les ressources locales","Pour préparer une campagne militaire","Pour protéger quelqu’un","Pour restaurer les ruines","Pour révéler un secret",
        "Pour s’abriter temporairement","Pour se cacher","Pour se loger","Pour se reposer ou se soigner","Pour trouver un trésor"
);

    $secret = array(
        "Il existe plusieurs exemplaires de cette ruine à travers le monde.","La ruine dissimule autre chose.",
        "La ruine est une épreuve organisée par une divinité pour sélectionner des champions.","La ruine est vivante.","La ruine n’existe que certains jours par an.",
        "La ruine se déplace ou se téléporte chaque année.","Un artéfact dangereux dont tout le monde a oublié l’existence.",
        "Un danger mortel peut être libéré par erreur ou par hasard.","Un esprit des lieux règne sur la ruine.","Une autre ruine git en-dessous."
);

    $mauvais = array(
        "Des démons agissant sur Argosia ont choisi l’endroit pour se rencontrer.","Il est impossible d’y trouver à manger ou à boire.",
        "La ruine est le terrain de chasse d’un puissant guerrier.","La situation a complètement changé depuis que les aventuriers se sont renseignés.",
        "Le temps n’y passe pas à la même vitesse qu’ailleurs.","Les méchants ont des otages (ou un moyen de tenir les aventuriers en respect).",
        "Les torches et lanternes n’y brillent pour ainsi dire pas.","On les attend.","Un puissant magicien y expérimente sa magie et ses sorts les plus dangereux.",
        "Une créature (ou un groupe) a décidé de détruire ou ravager l’endroit."
);

    $bon = array(
        "Il est facile de monter un camp non loin.","Il est facile de trouver des herbes de soin.",
        "Il y a un quiproquo et les occupants des ruines les prennent pour des alliés.","Ils trouvent une entrée secondaire très discrète qui mène au cœur des ruines.",
        "Ils vont rapidement trouver des alliés ou un guide.","Le plan des ruines est gravé ou peint sur un mur près de l’entrée.",
        "Les lieux sont illuminés presque comme en plein jour.","Les trésors sont un peu plus nombreux que prévu.","Personne ne s’attend à leur arrivée.",
        "Une divinité leur apporte de l’aide en échange d’un tout petit service très facile."
);


//création du texte d'une ruine'.
compteur('ruines');
$output =' ';
$output.="<h2>Ruines ".$nom."</h2></br>";

$output.="<h4>Quelle est la ruine ?</h4>";
$output.= $ruine[rand(0,count($ruine)-1)];
$output.= "</br>ou alors : ".$ruine_alternative[rand(0,count($ruine_alternative)-1)]."</br></br>";

$output.= "<h4>Pourquoi l’endroit fut-il abandonné ?</h4>";
$output.= $abandon[rand(0,count($abandon)-1)];

$output.= "<h4>Quelles histoires et rumeurs courent à son propos ?</h4>";
$output.= $rumeur[rand(0,count($rumeur)-1)];

$output.= "<h4>Qu’est-ce qui tient les gens à l’écart ?</h4>";
$output.= $ecart[rand(0,count($ecart)-1)]."</br></br>";

$output.= "<h4>Que peut-on espérer y trouver ?</h4>";
$output.= $trouver[rand(0,count($trouver)-1)];

$output.= "<h4>Quel est le danger le plus important des lieux ?</h4>";
$output.= $danger[rand(0,count($danger)-1)]."</br></br>";

$output.= "<h4>Qu’est-ce qui s’y est installé ?</h4>";
$output.= $qui[rand(0,count($qui)-1)];

$output.= "<h4>Pourquoi ça s’y est installé ?</h4>";
$output.= $pourquoi[rand(0,count($pourquoi)-1)]."</br></br>";

$output.= "<h4>Quel secret cache la ruine ?</h4>";
$output.= $secret[rand(0,count($secret)-1)];

$output.= "<h4>Quelle mauvaise surprise attend les aventuriers ?</h4>";
$output.= $mauvais[rand(0,count($mauvais)-1)];

$output.= "<h4>Quelle bonne surprise attend les aventuriers ?</h4>";
$output.= $bon[rand(0,count($bon)-1)];




$output.= "</br></br>";

$output.= '<form method="get" onsubmit="return valid();" action="index.php?page=cv/ruines">';		
$output.= '<input type="submit" formmethod="POST" formtarget="_blank" name="bouton" value="Générer une autre ruines"></form></br></br>';	
$output.= "Générateur utilisant les tables de <a href='http://legrumph.org/Terrier/?Chibi/Coeurs-Vaillants'>Coeurs Vaillants</a>, par <a href='http://www.legrog.org/biographies/le-grumph'>John Grümph</a>";
echo $output;

?>