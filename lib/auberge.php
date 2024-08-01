<?php

function creerauberge(){
	// Nom Feminin 
	$CreFemCon = array("belette", "bête", "belle", "biche", "cuisinière", "colombe", "corneille", "chèvre", "chevaleresse", "coquette", "chimère", "dryade", "demoiselle", "duchesse", "fille", "grenouille", "harpie", "jument", "loutre", "licorne", "marmotte", "mésange", "manticore", "mouette", "mule", "muse", "nourrice", "pieuvre", "pie", "princesse", "paysanne", "poétesse", "reine", "renarde", "salamandre", "sirène", "sentinelle", "tortue", "vouivre", "wyverne"); 
	$CreFemVoy = array("amante", "amazone", "anguille", "abeille", "écrevisse", "elfe", "oie", "ogresse", "hirondelle", "hermine", "hydre"); 
	// Nom Masculin 
	$CreMasCon = array("blaireau", "barde", "bateleur", "baron", "boeuf", "bouffon", "bouc", "chat", "chien", "castor", "cheval", "chevalier", "chevreuil", "canard", "cerf", "cochon", "capitaine", "corbeau", "crabe", "carthographe", "crapaud", "caviste", "coq", "coquatrice", "cygne", "destrier", "démon", "daim", "dauphin", "dragon", "dandy", "faucon", "géant", "gnome", "goinfre", "griffon", "garçon", "garde", "gobelin", "héron", "hibou", "hérisson", "kraken", "léopard", "lynx", "lion", "lièvre", "lutin", "loup", "molosse", "mouton", "noble", "nain", "papillon", "pêcheur", "pégase", "poisson", "pélerin", "poney", "porc", "poulet", "phénix", "prince", "renard", "rat", "roi", "satyre", "seigneur", "sanglier", "serpent", "taureau", "tigre", "troll", "vigeron", "voyageur");
	$CreMasVoy = array("ami", "amoureux", "agneau", "aurochs", "alchimiste", "acolyte", "aigle", "aigle bicéphale", "agneau", "écureuil", "esprit", "herboriste", "hermite", "ours", "ogre");

	// Adjectif Feminin singulier
	$AdjFemCre = array("amoureuse", "aventureuse", "audacieuse", "affectueuse", "au coeur brisé", "astucieuse", "bleue", "blanche", "bagarreuse", "brailleuse", "cuivrée", "chantante", "chaste", "chaleureuse", "d'azur", "dédaigneuse", "dansante", "délicate", "d'amour et de beauté", "errante", "en détresse", "étincellante", "finaude", "friponne", "gourmande", "grimaçante", "galante", "goulue", "ivre", "ingénue", "insouciante", "ingénieuse", "jaune", "joviale", "jalouse", "joyeuse", "malchanceuse", "mystérieuse", "maline", "noire", "pourpre", "populaire", "partageuse", "rieuse", "raffinée", "savante", "saoule", "solitaire", "séduisante", "studieuse", "timide", "triomphante", "verte", "vertueuse");
	// Adjectif Masculin singulier
	$AdjMasCre = array("avide", "affamé", "abattu", "accueillant", "amical", "arrogant", "aviné", "blanc", "brulé", "chantant", "couard", "coquet", "chanceux", "débauché", "déchu", "de fer", "enragé", "essouflé", "errant", "fringant", "fraceur", "fourbe", "fripon", "fatigué", "fou", "gastronome", "glouton", "généreux", "gourmet", "honnête", "humble", "hurlant", "insatiable", "ivre", "itinérant", "jaune", "loyal", "licencieux", "hébété", "malicieux", "malchanceux", "masqué", "mesquin", "noir", "naïf", "niais", "paisible", "prospère", "perdu", "paillard", "pudique", "rieur", "royal", "rouge", "ripailleur", "redoutable", "rusé", "sage", "saoul", "sympathique", "sentimental", "triste", "vorace", "vicieux", "victorieux");

	// Objet Feminin 
	$ObjFemCon = array("barbe", "bannière", "bouilloire", "bougie", "bouteille", "barque", "chopine", "comète", "compagnie", "couronne", "cuillère", "chope", "coupe", "corne", "cruche", "cuirasse", "cloche", "coquille", "clef", "charette", "chaîne", "dague", "fleur", "flûte", "fiole", "fourchette", "fourche", "gamelle", "gelée", "goutte", "galère", "gourde", "jatte", "jambe", "hache", "hallebarde", "herse", "harpe", "lance", "lune", "louche", "lyre", "marmite", "main", "montagne", "plume", "pertuisane", "poêle", "pique", "roue", "route", "selle", "serpe", "table", "tasse", "tête", "trompette", "tourte", "tour", "noix");
	$ObjFemVoy = array("ancre", "arbalète", "étoile", "épée", "huile", "oreille");
	$ObjFemSing = array("bonne étoile", "corne d'abondance", "canne à pêche", "tombée de la nuit", "fin du jour", "flûte de pan", "pointe de lance", "patte de lapin", "tête de taureau", "tête de sanglier");
	// Objet Masculin 
	$ObjMasCon = array("bouclier", "bateau", "bras", "breuvage", "bocal", "bol", "château", "casque", "carrosse", "char", "chariot", "chaudron", "couteau", "compotier", "coquillage", "cruchon", "coeur", "crâne", "chardon", "dé", "doigt", "flacon", "fanal", "fruit", "glaive", "gourdin", "gantelet", "gobelet", "luth", "pot", "poivre", "pain", "panier", "pont", "roc", "sablier", "sceptre", "soleil", "seau", "tonneau", "trône", "tambour", "trident", "tonnelet", "vase");
	$ObjMasVoy = array("arbre", "alambic", "antidote", "arc", "os", "orbe", "oeil");
	$ObjMasSing = array("cor de chasse", "fléau d'armes", "fer à cheval", "jeu d'échecs", "jeu de dames", "jeu de cartes", "jeu de dés", "levé de l'aube", "soleil rayonnant");
	// Objet Pluriel
	$ObjNeuPlu = array("ailes d'ange", "bois de cerf", "cornes de taureau", "serres d'aigle");

	// Adjectif Feminin Singulier
	$AdjFemObj = array("argentée", "brûlante", "blanche", "brisée", "dorée", "d’émeraude", "de bois", "d'or", "chaude", "étincellante", "hurlante", "percée", "noircie", "rouge", "sale", "de sinople");	
	// Adjectif Masculin Singulier
	$AdjMasObj = array("brûlant", "bleu", "blanc", "brisé", "doré", "de cuivre", "de fer", "enflammé", "étincellant", "oublié", "fendu", "hurlant", "noirci", "orné", "percé", "rouge", "sale", "vert");	
	//QuaNum		Aux		
	$QuaNum = array("deux", "trois", "quatre", "cinq", "six", "sept", "cent");
	
	//Personnage
	$Perso = array("Abbon","Abélard","Abul","Achard","Adalbéron","Adalbert","Adhémar","Aelfric","Aethelred","Agobard","Aimery","Aimon","Hakim","Mustansir","Qadir","Alain","Alexis","Alfred","Alp","Alphonse","André","Annon","Anselme","Ansold","Ardouin","Arduin","Armanieu","Arnaud","Arnoulf","Athoenus","Atton","Aynard","Ayyoub","Badr","Baha","Baillon","Baldwin","Barthélémy","Basile","Baudoin","Baudouin","Béatus","Beaudouin","Béranger","Bermude","Berna","Bernard","Bernward","Bertolf","Bertrand","Berward","Bohémond","Boleslas","Boleslav","Boris","Brian","Bruno","Brunon","Burchard","Canut","Knut","Casimir","Césaire","Chao","Charles","Cnut","Coloman","Conan","Conrad","Constantin","Crinan","Daimbert","Dalmace","Daniel","Domenico","Dominique","Drogo","Drogon","Duncan","Ebles","Edgar","Edmond","Edmund","Edouard","Edwin","Emich","Emma","Emmish","Engenulphe","Enguerrand","Erluin","Ermenfroid","Ermengaud","Ermengol","Eschivard","Ethereld","Ethelred","Etienne","Eudes","Eustache","Everard","Evrard","Eystein","Fastrad","Ferdinand","Finnlaech","Foucher","Foulque","Foulques","Fouques","Frédéric","Friedrich","Fromond","Fulbert","Gagik","Garcia","Gaston","Gautier","Geffroy","Geodefroid","Geoffroi","Geoffroy","Godefroy","Gérard","Gerbert","Geza","Gilbert","Gillacomgain","Girald","Glaber","Godwin","Godwine","Gottschalk","Goufier","Grégoire","Guelfe","Gui","Guibert","Guido","Guidon","Guigues","Guillaume","Gunther","Guy","Hakim","Hakon","Halinard","Hamon","Harald","Hariulf","Harold","Harpin","Harthaknut","Hassan","Hector","Heinfridus","Helgaud","Hélie","Hélinand","Henri","Henry","Henrique","Herbert","Hériger","Hermann","Hervé","Hildebert","Hildebrand","Hubert","Hues","Hugues","Humbert","Iarosla","Jaroslaf","Ildebrand","Ingvar","Irnérius","Isaac","Isarn","Itier","Jarl","Jean","Joffré","Joseph","Josselin","Kenneth","Kilik","Kilij","Knud","Knut","Knùtr","Konrad","Ladislas","Lambert","Lampert","Landolphe","Landry","Lanfranc","Léger","Leif","Léofric","Liébaut","Limosus","Lionnet","Lisois","Lothaire","Louis","Lulach","Macaire","Macbeth","Macer","Maelbrigte","Magnus","Maimon","Mainard","Malcolm","Malek","Malik","Manassès","Marbode","Martin","Mauger","Mauguin","Maurille","Mélès","Michel","Morcar","Mundhir","Nicéphore","Niel","Nizam","Norman","Notker","Ochin","Odilon","Odon","Olaf","Olav","Olivier","Olov","Onfroi","Orderic","Othon","Otton","Otto","Pallig","Pantaleone","Paul","Philarète","Philippe","Pierre","Pietro","Quirin","Raban","Rabbi","Radbod","Radulf","Raymond","Raimond","Rainier","Rainolf","Rainulf","Ralph","Ramier","Ramire","Ramon","Raoul","Raymond-Bérenger","Renato","Renaud","Renouf","Richard","Richer","Rivallon","Robert","Rodolphe","Rodrigo","Rodrigue","Roger","Romain","Roupen","Roussel","Rudiger","Samuel","Sanche","Schlomo","Siegfried","Sieghard","Siguinus","Sigurd","Siméon","Simon","Siward","Soffred","Soliman","Stanislas","Stigand","Suppo","Sveinn","Svend","Sviatopolk","Sylvestre","Tancrède","Tescelin","Tetbert","Théophile","Thibaud","Thibaut","Thierry","Thiètmar","Thietmart","Thorfin","Thoros","Toghrol","Toghrul","Tostig","Turchetil","Turstin","Ubayd","Vahram","Vajk","Valkmar","Vital","Vladimir","Vulgus","Waltheof","Welf","Willaume","Willelm","William","Witukin","Wofrad","Yaroslav","Yves","Zeng","Adélaïde","Adèle","Adèle","Adélaïde","Adelise","Adelwidis","Agnès","Alditha","Aleth","Alix","Almodis","Anastasie","Anna","Anne","Arembourge","Arletta","Arlette","Auberelde","Béatrice","Berthe","Bertrade","Betha","Chimène","Constance","Cunegonde","Doña","Douce","Edith","Edwige","Elisabeth","Elizabeth","Elizaeta","Emma","Emma","Aelgyfa","Ermangarde","Ermengarde","Ermessinde","Estefania","Eudoxe","Fabrisa","Faydide","Ganne","Garsinde","Gisela","Gisèle","Godeliva","Gruoch","Guiraude","Gunhild","Hélie","Héloïse","Hermengarde","Hersende","Hildegarde","Hiltrerd","Ida","Ingegerd","Irène","Judith","Jutta","Mauh","Mathilde","Mainsende","Marguerite","Marie","Mathilde","Mechtild","Munie","Elvire","Odeline","Pétronille","Romelde","Sancha","Sykelgaite","Théodora","Théophano","Thérèse","Zoé","Mahyar","Minst","Mirra","Avygael","Taklin", "Rudolf", "Argawen", "Hadush", "Ash", "Pam", "Rick Tapdur", "Eris","Saumeth","Latur","Grecarsos","Trados","Burtath","Gigollel","Kolecan","Lodersan","Lacesor","Pamilion","Ascis","Etal","Druveth","Poncebrar","Bomis","Proris","Piscur","Kodien","Mecegrus","Jimican","Drae","Gige","Remithath","Pedus","Gisin","Siscel","Calin","Bertas","Baran");	
	
	//lieu
	$LieFemCon = array("brasserie", "cabane", "demeure", "distillerie", "hutte", "maison", "table", "taverne");
	$LieMasCon = array("bol", "chaudron", "chêne", "flacon", "comptoir", "foyer", "gîte", "gobelet", "palais", "relais", "repaire", "tonneau");
	
	//quineu
	$QuiNeu = array("attent", "boit", "chasse", "dort", "fume", "grogne", "louche", "mange", "s'encanaille", "philosophe", "rote", "voyage");
	// du
	$du = array("coureur de jupons", "bord de route", "bon vivant", "bourg", "bon repos", "château", "conteur", "cavalier", "chasseur", "compagnon", "cruchon", "grand-père", "joyeux larron", "loup de mer", "lever de coude", "marcheur", "mage", "nain", "pélerin", "pirate", "petit génie", "rodeur", "roi", "sorcier", "soldat", "troll", "vaillant", "voyageur", "voisin", "vieux sage", "vieil avare");
	
	$d = array("or", "argent", "albâtre", "ivoire", "émeraude", "hydromel", "azur");
	$des = array("neuf preuses", "artistes", "arts", "deux tours", "buveurs", "bons amis",  "chansons", "chanteurs", "caravanes", "compagnons", "délices", "elfes", "gobelins", "halfelins", "légendes", "petites personnes", "plaisirs", "portes", "pélerins", "quais", "quatres chemins", "rêves", "rires", "rencontres", "saveurs");
	$dela = array("chevaleresse", "courtisane", "forteresse", "longue barbe", "petite personne", "porte qui grince", "reine", "voisine");

	$nomcomplet = array("Au bouffon triste", "La brasserie du cygne noir", "La mésange bleue", "Le comptoir du bon vin", "L'établissement des honnêtes gens", "Le gobelet de bronze", "L'agaçante belette",  "Le buveur qui boit", "La cruche percée", "Les trois amis", "Le tonneau brisé", "La bougie de minuit", "L'anguille féroce", "Les deux amants", "Les pieds dans le plat", "Le plat sans fond", "la corne d'abondance", "Le fond du chaudron", "La lune écarlate", "Le chat perché", "Le veau qui tète", "La pie voleuse", "Les délices du château", "Le faiseur de ripailles", "La chope et la cruche", "La grasse licorne", "Les pieds sous la table", "Le corbeau et le renard", "Les braises rouges", "La blanche hermine", "Les belles lavandières", "Les petits plaisirs", "Le couche tard", "Le cavalier repu", "Le petit creux", "Sur un arbre perché", "La lune noire", "La bourse et la vie", "Le hall du buveur heureux", "A la bière au beurre", "La cave de maître miron", "Les pieds sur terre", "Le nez dans l'assiette", "Le fer à cheval", "La tête de lion", "Le relais de père la bedaine", "La marmite des bâfreurs", "La bouteille damnée", "Les cinq couronnes", "L'Ours farceur", "Le bol bien rempli", "Le chat qui louche", "La table des gloutons", "La taverne du bon roi", "La fleur de lys", "Le tonneau du ménestrel", "La coupe plein", "Les joyeux drilles", "Au fou rire", "La Dernière chope", "L'écu de la dame", "L'épée royale", "La fille d'argent", "La souche de vigne", "La taberge");

	$nomcomplet2 = array("Au hareng salé", "Le civet de lapin", "A l'agneau rôti", "Le lapin au sirop", "Le jarret de porc", "Le poulet aux pommes", "Le poulet au citron", "Au gigot d'agneau", "Le boeuf aux oignons", "Le cygne aux trois poivres", "A l'ours au miel", "Le boeuf braisé au vin", "A la tourte à l'ail", "La soupe de poisson", "La morue à l'ail", "La poitrine de sanglier", "A la perdrix aux pommes", "Les oeufs au plat", "La poularde farcie", "Le jambon fumé", "Le pain chaud", "Les petits pains", "Le coq en pâte", "Le sang des vignes", "La pisse et le sifflet", "Le coucher du soleil", "Le soleil levant", "Le lion rouge", "Le trou du gnome", "Le troll affalé", "L'erreur de dame Mathilde", "La roue de la fortune", "La porte noire", "A l'ombre du château", "La brasserie d'Eugène", "La lame rouillée", "Le foyer du nain de travers", "les libations du seigneur", "Les crevettes froissées", "Le veuf sinistre", "La maîtresse silencieuse", "Le clou rouillé", "Le gnome a l'envers", "La charrue cassée", "La dernière goutte de vin", "Le cavalier heureux", "La fée engloutie", "L'éléphant blanc", "La fin de la route", "La vieille clef", "La taverne des épées de bronze", "La hache et le roncier", "La taverne aux graines de moutarde", "L'abeille et la fleur", "Le cidre de pomme", "La bonne bière bien fraiche", "La tourbière et le pêcheur", "La fourche tordue", "Le dragon sans tête", "Le dixième enfer", "La gorge brûlante", "Le spectateur aveugle", "Le grand-cerf");
	
	$nomcomplet3 = array("La fine bouche", "Au bon vivant", "Au coin du feu", "Le panier garni", "La table ronde", "Les quatre vents", "Le plat d'étain", "La belle étoile", "La rose rouge", "La tête à l'envers", "La belle gueuse", "La goutte de trop", "Le tonneau et le tonnelier", "Le cul de la crémière", "Le vin joyeux", "La vache au plafond", "La jeune veuve de mer", "Le pot au lait", "Les pattes de lapin", "La poule aux oeufs d'or", "La cage aux oiseaux du seigneur", "Les coeurs joyeux", "Au tapage de cloche", "Au petit creux", "L'appétit vient en mangeant", "Les pissenlits par la racine", "A la cure de jouvence", "Aux larmes du houblon", "A l'aigle à deux têtes", "Le sac à vin", "La taverne de la joyeuse prêtresse", "La taverne de la gaïeté", "Au voyageur qui mange bien mieux ici qu'à l'établissement d'en face", "Aux amants", "La fontaine d'eau bénite", "Le bénitier", "La plume et de l'encrier", "Le doux poison", "Au siffleur de verre", "Le mors et la bride", "Le confessionnal", "Le damoiseau en détresse", "Le crochet du boucher", "Le sourire à pleines dents", "L'abbé et la duchesse", "Lits et brasserie de chez Arron", "Le Styx", "Oubliez vos problèmes", "L'elfe d'émeraude", "Les neuf chevaliers ivres", "Le paladin stupéfiant", "Le pélerin assoiffé", "La mule et la jument", "Le chef et le prince", "Le serpent et la vierge", "La branche d'olivier", "Le logeur astucieux", "La haute mandoline", "La dame", "Les fûts d'ambre", "Le fermier torride", "Le canard ivre", "La bosse du bossu", "Le règne du marin", "Le repos du bon chevalier", "L'ogre qui rit", "Les érudits sans sommeil", "Le chemin perdu", "La boucle en bronze", "La crème glacée", "Au Trésor");

	$auberge='';
	switch(rand(1,24)){
		case 1;
			$auberge.='A la '.$CreFemCon[rand(0,count($CreFemCon)-1)].' '.$AdjFemCre[rand(0,count($AdjFemCre)-1)];
		break;
		case 2;
			$auberge.='Au '.$CreMasCon[rand(0,count($CreMasCon)-1)].' '.$AdjMasCre[rand(0,count($AdjMasCre)-1)];
		break;
		case 3;
			$auberge.='La '.$CreFemCon[rand(0,count($CreFemCon)-1)].' '.$AdjFemCre[rand(0,count($AdjFemCre)-1)];
		break;
		case 4;
			$auberge.='Le '.$CreMasCon[rand(0,count($CreMasCon)-1)].' '.$AdjMasCre[rand(0,count($AdjMasCre)-1)];
		break;
		case 5;
			$auberge.='A l\''.$CreFemVoy[rand(0,count($CreFemVoy)-1)].' '.$AdjFemCre[rand(0,count($AdjFemCre)-1)];
		break;
		case 6;
			$auberge.='A l\''.$CreMasVoy[rand(0,count($CreMasVoy)-1)].' '.$AdjMasCre[rand(0,count($AdjFemCre)-1)];
		break;
		case 7;
			$auberge.='A la '.$ObjFemCon[rand(0,count($ObjFemCon)-1)].' '.$AdjFemObj[rand(0,count($AdjFemObj)-1)];
		break;
		case 8;
			$auberge.='Au '.$ObjMasCon[rand(0,count($ObjMasCon)-1)].' '.$AdjMasObj[rand(0,count($AdjMasObj)-1)];
		break;
		case 9;
			$auberge.='La '.$CreFemCon[rand(0,count($CreFemCon)-1)].' et le '.$ObjMasCon[rand(0,count($ObjMasCon)-1)];
		break;
		case 10;
			$auberge.='Le '.$CreMasCon[rand(0,count($CreMasCon)-1)].' et la '.$ObjFemCon[rand(0,count($ObjFemCon)-1)];
		break;
		case 11;
			$auberge.='A la '.$LieFemCon[rand(0,count($LieFemCon)-1)].' du '.$CreMasCon[rand(0,count($CreMasCon)-1)];
		break;
		case 12;
			$auberge.='Au '.$LieMasCon[rand(0,count($LieMasCon)-1)].' de la '.$CreFemCon[rand(0,count($CreFemCon)-1)];
		break;
		case 13;
			$auberge.='A la '.$CreFemCon[rand(0,count($CreFemCon)-1)].' qui '.$QuiNeu[rand(0,count($QuiNeu)-1)];
		break;
		case 14;
			$auberge.='Au '.$CreMasCon[rand(0,count($CreMasCon)-1)].' qui '.$QuiNeu[rand(0,count($QuiNeu)-1)];
		break;
		case 15;
			$auberge.='Au '.$LieMasCon[rand(0,count($LieMasCon)-1)].' du '.$CreMasCon[rand(0,count($CreMasCon)-1)].' '.$AdjMasCre[rand(0,count($AdjMasCre)-1)];
		break;
		case 16;
			$auberge.='A la '.$LieFemCon[rand(0,count($LieFemCon)-1)].' de la '.$CreFemCon[rand(0,count($CreFemCon)-1)].' '.$AdjFemCre[rand(0,count($AdjFemCre)-1)];
		break;
		case 17;
			$auberge.='Aux '.$QuaNum[rand(0,count($QuaNum)-1)].' ';
			switch (rand(0,3)) {
				case 0;
					$auberge.=$CreFemCon[rand(0,count($CreFemCon)-1)];
				break;
				case 1;
					$auberge.=$ObjMasCon[rand(0,count($ObjMasCon)-1)];
				break;
				case 2;
					$auberge.=$ObjFemCon[rand(0,count($ObjFemCon)-1)];
				break;
				case 3;
					$auberge.=$CreMasCon[rand(0,count($CreMasCon)-1)];
				break;			
			}
			if ( substr($auberge, -2) =="au")$auberge.='x';
			else $auberge.='s'; 
		break;
		case 18;
			$auberge.='Chez '.$Perso[rand(0,count($Perso)-1)];
		break;
		case 19;
			$auberge.='Au '.$LieMasCon[rand(0,count($LieMasCon)-1)];
			switch (rand(0,3)){
				case 0;
					$auberge.=' du '.$du[rand(0,count($du)-1)];	
				break;
				case 1;
					$auberge.=' d\''.$d[rand(0,count($d)-1)];
				break;
				case 2;
					$auberge.=' des '.$des[rand(0,count($des)-1)];
				break;
				case 3;
					$auberge.=' de la '.$dela[rand(0,count($dela)-1)];
				break;
			}
		break;
		case 20;
			$auberge.='A la '.$LieFemCon[rand(0,count($LieFemCon)-1)];
			switch (rand(0,3)){
				case 0;
					$auberge.=' du '.$du[rand(0,count($du)-1)];	
				break;
				case 1;
					$auberge.=' d\''.$d[rand(0,count($d)-1)];
				break;
				case 2;
					$auberge.=' des '.$des[rand(0,count($des)-1)];
				break;
				case 3;
					$auberge.=' de la '.$dela[rand(0,count($dela)-1)];
				break;
			}
		break;
		case 21;
			$auberge.=''.$nomcomplet[rand(0,count($nomcomplet)-1)];
		break;
		case 22;
			$auberge.=''.$nomcomplet2[rand(0,count($nomcomplet2)-1)];
		break;
		case 23;
			$auberge.=''.$nomcomplet3[rand(0,count($nomcomplet3)-1)];
		break;
		case 24;
			$auberge.='';
			switch (rand(0,2)){
				case 0;
					$auberge.='A la '.$ObjFemSing[rand(0,count($ObjFemSing)-1)];	
				break;
				case 1;
					$auberge.='Aux '.$ObjNeuPlu[rand(0,count($ObjNeuPlu)-1)];
				break;
				case 2;
					$auberge.='Au '.$ObjMasSing[rand(0,count($ObjMasSing)-1)];
				break;
				}
		break;
	}
	return $auberge;
}

?> 