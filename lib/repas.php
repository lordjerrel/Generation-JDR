<?php
function creerrepas(){
	//Accompagnement
	//Accompangé synonymes M
	$CreSynAccM = array(" accompagné d'", " complété d'", " garni d'", " agrémenté d'", " avec ");
	//Accompangé synonymes F
	$CreSynAccF = array(" accompagnée d'", " complétée d'", " garnie d'", " agrémentée d'", " avec ");
	//Accompangé synonymes MP
	$CreSynAccMP = array(" accompagnés d'", " complétés d'", " garnis d'", " agrémentés d'", " avec ");
	// Céréales de
	$CreAccCerde = array("blé", "millet", "seigle", "froment", "sarrasin", "blé tendre");
	// Céréales d'
	$CreAccCerd = array("avoine", "orge", "épeautre");
	// Légume Cuit de Accompagnement 
	$CreAccCuide = array("cardons", "carottes", "choux", "fèves", "haricots", "navets", "poireaux", "pois", "courges", "poirées", "potirons", "citrouilles", "courgettes", "pâtissons", "brocolis", "céleris", "chou-fleur", "flageolets", "lentilles", "panais", "pois chiches", "rhubarbes", "topinambours");
	// Légume Cuit d' Accompagnement 
	$CreAccCuid = array("artichauts", "épinards", "aubergines", "asperges");
	// Légume Cru de Accompagnement 
	$CreAccCrude = array("champignons", "feuilles de mâche", "pissenlits", "bettraves", "choux", "cressons", "fenouils", "chicorées", "haricots", "laitues", "pois chiches", "pourpiers", "radis", "radis noir", "rhubarbes", "topinambours", "concombres");
	// Légume Cru d' Accompagnement 
	$CreAccCrud = array("oseilles", "endives", "épinards", "orties");
	// Etat Légume Cuit Accompagnement
	$CreAccEtaCui = array("cuits dans du jus de viande", "en soupe", "en potage", "en bouillon", "mélangés à un gruau", "accompagnés de fromage", "aux champignons", "aux épices", "frits dans l'huile", "sautés au beurre", "en tourte", "rotis au fromage de chèvre");
	// Etat Légume Cru Accompagnement
	$CreAccEtaCru = array("en salade", "en salade agrémentée de fromage", "en salade avec une sauce au miel", "en salade avec sauce vinaigrette moutarde miel", "en salade accompagné de persil et de menthe");
	// Accompagnement de Générique 
	$CreAccGende = array("Un plat de lentilles aux fonds de cardon", "Un plat de purée de blanc de poireaux", "Un plat de riz au safran", "Un plat de beignets d'oseille frits", "Un plat de raviole de poireaux", "Un plat de navet frits", "Un plat de beignets au fromage et vin blanc", "Un plat de fromage à l'ail", "Un brouet de pois", "Un brouet de fèves", "Une soupe d'orties", "Une soupe paysanne à base de choux et de jambon", "Une soupe à l'oignon", "Une tourte aux champignons", "Une tourte à la citrouille et aux lentilles", "Une salade de chou rouge aux pommes", "Un plat de boulettes de pois et d'oignon", "Une tarte aux blettes", "Un paté à la citrouille", "Une soupe de courge", "Une soupe de panais", "Un potage de panais", "Un plat de poivrons farcis", "Un plat de poivrons grillés", "Un plat de poivrons au four", "Un plat de courge farcie", "Un plat de courgettes farcies", "Un plat de panais farcis", "Un plat de fenouils farcis", "Un plat de concombres à la crème", "Un gratin de cardon", "Un gratin de courge", "Un gratin de chou-fleur", "Un plat de fèves au lard", "Un plat d'écrasé de pois", "Un plat d'épinards frits", "Un plat d'asperges frites", "Un plat d'oeufs farcis", "Un plat d'écrasé de poireaux", "Un plat d'omelette aux herbes", "Un plat de carottes cuites avec une sauce au cumin", "Un plat d'haricots bouillis et fumés", "Une omelette au lard et aux champignons", "Une tarte de pommes de terre et chou", "Un pain de pommes de terre au thym et à la tomate", "Une galette aux épinards et à la patate douce", "Un plat de concombres à l'aigre-doux", "Une salade de figues tièdes au roquefort", "Une salade verte aux noix et aux poires", "Une soupe de pommes de terre à l'ail", "Une tourte aux champignons et aux poireaux", "Un ragoût de légume d'hiver");
	// Accompagnement de Générique en minuscule
	$CreAccGendemin = array("un plat de lentilles aux fonds de cardon", "un plat de purée de blanc de poireaux", "un plat de riz au safran", "un plat de beignets d'oseille frits", "un plat de raviole de poireaux", "un plat de navet frits", "un plat de beignets au fromage et vin blanc", "un plat de fromage à l'ail", "un brouet de pois", "un brouet de fèves", "une soupe d'orties", "une soupe paysanne à base de choux et de jambon", "une soupe à l'oignon", "une tourte aux champignons", "une tourte à la citrouille et aux lentilles", "une salade de chou rouge aux pommes", "un plat de boulettes de pois et d'oignon", "une tarte aux blettes", "un paté à la citrouille", "une soupe de courge", "une soupe de panais", "un potage de panais", "un plat de poivrons farcis", "un plat de poivrons grillés", "un plat de poivrons au four", "un plat de courge farcie", "un plat de courgettes farcies", "un plat de panais farcis", "un plat de fenouils farcis", "un plat de concombres à la crème", "un gratin de cardon", "un gratin de courge", "un gratin de chou-fleur", "un plat de fèves au lard", "un plat d'écrasé de pois", "un plat d'épinards frits", "un plat d'asperges frites", "un plat d'oeufs farcis", "un plat d'écrasé de poireaux", "un plat d'omelette aux herbes", "un plat de carottes cuites avec une sauce au cumin", "un plat d'haricots bouillis et fumés", "une omelette au lard et aux champignons", "une tarte de pommes de terre et chou", "un pain de pommes de terre au thym et à la tomate", "une galette aux épinards et à la patate douce", "un plat de concombres à l'aigre-doux", "une salade de figues tièdes au roquefort", "une salade verte aux noix et aux poires", "une soupe de pommes de terre à l'ail", "une tourte aux champignons et aux poireaux", "un ragoût de légume d'hiver");
	$Accompagnement = array('Un plat de '.$CreAccCuide[rand(0,count($CreAccCuide)-1)].' '.$CreAccEtaCui[rand(0,count($CreAccEtaCui)-1)], 
		'Un plat d\''.$CreAccCuid[rand(0,count($CreAccCuid)-1)].' '.$CreAccEtaCui[rand(0,count($CreAccEtaCui)-1)], 
		'Un plat de '.$CreAccCrude[rand(0,count($CreAccCrude)-1)].' '.$CreAccEtaCru[rand(0,count($CreAccEtaCru)-1)], 
		'Un plat d\''.$CreAccCrud[rand(0,count($CreAccCrud)-1)].' '.$CreAccEtaCru[rand(0,count($CreAccEtaCru)-1)], 
		'Un plat de '.$CreAccCuide[rand(0,count($CreAccCuide)-1)].' et d\''.$CreAccCuid[rand(0,count($CreAccCuid)-1)].' '.$CreAccEtaCui[rand(0,count($CreAccEtaCui)-1)], 
		'Un plat de '.$CreAccCrude[rand(0,count($CreAccCrude)-1)].' et d\''.$CreAccCrud[rand(0,count($CreAccCrud)-1)].' '.$CreAccEtaCru[rand(0,count($CreAccEtaCru)-1)], 
		'Une tourte de '.$CreAccCuide[rand(0,count($CreAccCuide)-1)].' et de '.$CreAccCuide[rand(0,count($CreAccCuide)-1)], 
		''.$CreAccGende[rand(0,count($CreAccGende)-1)], ''.$CreAccGende[rand(0,count($CreAccGende)-1)], ''.$CreAccGende[rand(0,count($CreAccGende)-1)], 'Un gruau de '.$CreAccCerde[rand(0,count($CreAccCerde)-1)], 'Un gruau d\''.$CreAccCerd[rand(0,count($CreAccCerd)-1)], 'Une bouillie de '.$CreAccCerde[rand(0,count($CreAccCerde)-1)], 'Une bouillie d\''.$CreAccCerd[rand(0,count($CreAccCerd)-1)]);
	$Accompagnementmin = array('un plat de '.$CreAccCuide[rand(0,count($CreAccCuide)-1)].' '.$CreAccEtaCui[rand(0,count($CreAccEtaCui)-1)], 
		'un plat d\''.$CreAccCuid[rand(0,count($CreAccCuid)-1)].' '.$CreAccEtaCui[rand(0,count($CreAccEtaCui)-1)], 
		'un plat de '.$CreAccCrude[rand(0,count($CreAccCrude)-1)].' '.$CreAccEtaCru[rand(0,count($CreAccEtaCru)-1)], 
		'un plat d\''.$CreAccCrud[rand(0,count($CreAccCrud)-1)].' '.$CreAccEtaCru[rand(0,count($CreAccEtaCru)-1)], 
		'un plat de '.$CreAccCuide[rand(0,count($CreAccCuide)-1)].' et de '.$CreAccCuide[rand(0,count($CreAccCuide)-1)].' '.$CreAccEtaCui[rand(0,count($CreAccEtaCui)-1)], 
		'un plat de '.$CreAccCrude[rand(0,count($CreAccCrude)-1)].' et de '.$CreAccCrude[rand(0,count($CreAccCrude)-1)].' '.$CreAccEtaCru[rand(0,count($CreAccEtaCru)-1)], 
		'une tourte de '.$CreAccCuide[rand(0,count($CreAccCuide)-1)].' et de '.$CreAccCuide[rand(0,count($CreAccCuide)-1)], 
		''.$CreAccGendemin[rand(0,count($CreAccGendemin)-1)], ''.$CreAccGendemin[rand(0,count($CreAccGendemin)-1)], 'un gruau de '.$CreAccCerde[rand(0,count($CreAccCerde)-1)], 'un gruau d\''.$CreAccCerd[rand(0,count($CreAccCerd)-1)], 'une bouillie de '.$CreAccCerde[rand(0,count($CreAccCerde)-1)], 'une bouillie d\''.$CreAccCerd[rand(0,count($CreAccCerd)-1)]);


	//Fruit
	// Fruit de 
	$CreFrude = array("bergamote", "bleuet", "cantaloup", "cassis", "cerise", "châtaigne", "citron", "clémentine", "coing", "datte", "figue", "fraise", "framboise", "grenade", "griotte", "groseille", "mandarine", "marron", "melon", "mûre", "myrtille", "noisette", "noix", "pamplemousse", "pastèque", "pêche", "brugnon", "nectarine", "pistache", "poire", "pomme", "prune", "pruneau", "mirabelle", "raisin");
	// Fruit d' 
	$CreFrud = array("abricot", "amande", "arbouse", "orange");


	//Viande
	// Viande de 
	$CreViadu = array("boeuf", "veau", "canard", "jambon de porc", "lard", "cochon", "jambon de cochon", "porc", "lapin", "lièvre", "mouton", "pigeon", "poisson", "coq", "sanglier", "cerf", "chevreau", "porcelet");
	$CreViadela = array("truie", "perdrix", "tourterelle", "truite", "poule", "chèvre", "poularde");
	// Viande d' 
	$CreViad = array("agneau", "âne");
	// Etat Viande
	$CreViaEtaM = array("grillé", "bouilli", "cuit à la broche", "en gelée", "en pâté", "fumé", "en sauce", "farci", "aux épices", "cuit dans son jus", "cuit à la moutarde", "à la sauce poivre noir", "à la sauce cannelle", "à la sauce à l'ail", "à la sauce au miel", "aux oignons", "aux échalottes", "aux olives", "cuit au vin", "cuit dans la bière", "aux champignons");
	$CreViaEtaF = array("grillée", "bouillie", "cuite à la broche", "en gelée", "en pâté", "fumée", "en sauce", "farcie", "aux épices", "cuite dans son jus", "cuite à la moutarde", "à la sauce poivre noir", "à la sauce cannelle", "à la sauce à l'ail", "à la sauce au miel", "aux oignons", "aux échalottes", "aux olives", "cuite au vin", "cuite dans la bière", "aux champignons");
	// Viande Générique
	$CreViaGenM = array("Du hareng salé", "Un civet de lapin aux épices", "Un civet de lapin", "De l'agneau rôti au sel", "Du lapin au sirop", "Un plat de boulettes de viande au jus de lait aux amandes", "Un roulé de veau", "Du jarret de porc", "Un poulet aux pommes", "Un poulet rôti sauce aigre-douce aux épices", "Un poulet au citron", "Un plat de boulettes de boeuf aux cerises", "Un gigot d'agneau", "Un plat de boulettes de poulet frites", "Du boeuf aux oignons", "Un plat de chausson au fromage de chèvre et au poulet", "Un plat de moule frites dans l'huile", "Un poulet au basilic", "Un millefeuille de panais au porc", "Un poulet aux pruneaux, raisins, amandes et abricots secs", "Un ragoût de lapin", "Du cygne aux trois poivres", "De l'ours au miel", "Un poulet à l'estragon", "Un gigot d'agneau rôti au genévrier", "Un boeuf braisé au vin", "Un ragoût de lapin");
	$CreViaGenF = array("Une tourte à l'ail, au fromage, aux raisins et aux épices", "Une soupe de poisson", "De la morue à l'ail", "Une rissole de poisson", "Une tourte de poisson", "Une soupe au poulet, aux herbes et aux épices", "Une tourte au poulet, au porc, au fromage, aux herbes et aux épices", "Une tourte à l'ail, fromage, raisins et épices", "Une poitrine de sanglier", "Une perdrix aux pommes", "Une volaille rôti sauce aigre-douce aux épices", "Une cane au citron", "Une oie aux oignons", "Une truite au basilic", "Une tourterelle aux pruneaux, raisins, amandes et abricots secs", "Une truite marinées au thé", "Une tourte au poisson");
	$CreViaGenPlu = array("Des oeufs aux plats", "Des oeufs aux plats aillés", "Des oeufs aux plats persillés", "Des oeufs aux plats épicés", "Des oeufs aux plats et du jambon cru", "Des moules grillés à l'ail", "Des brochettes d'agneau épicé", "des haricots au lard et aux poires sèches");
	$Viande = array('Du '.$CreViadu[rand(0,count($CreViadu)-1)].' '.$CreViaEtaM[rand(0,count($CreViaEtaM)-1)],
		'De la '.$CreViadela[rand(0,count($CreViadela)-1)].' '.$CreViaEtaF[rand(0,count($CreViaEtaF)-1)],
		'De l\''.$CreViad[rand(0,count($CreViad)-1)].' '.$CreViaEtaM[rand(0,count($CreViaEtaM)-1)],
		''.$CreViaGenM[rand(0,count($CreViaGenM)-1)], ''.$CreViaGenF[rand(0,count($CreViaGenF)-1)], ''.$CreViaGenPlu[rand(0,count($CreViaGenPlu)-1)]); 
	$ViandeAcc = array('Du '.$CreViadu[rand(0,count($CreViadu)-1)].' '.$CreViaEtaM[rand(0,count($CreViaEtaM)-1)].$CreSynAccM[rand(0,count($CreSynAccM)-1)].$Accompagnementmin[rand(0,count($Accompagnementmin)-1)],
		'De la '.$CreViadela[rand(0,count($CreViadela)-1)].' '.$CreViaEtaF[rand(0,count($CreViaEtaF)-1)].$CreSynAccF[rand(0,count($CreSynAccF)-1)].$Accompagnementmin[rand(0,count($Accompagnementmin)-1)],
		'De l\''.$CreViad[rand(0,count($CreViad)-1)].' '.$CreViaEtaM[rand(0,count($CreViaEtaM)-1)].$CreSynAccM[rand(0,count($CreSynAccM)-1)].$Accompagnementmin[rand(0,count($Accompagnementmin)-1)],
		''.$CreViaGenM[rand(0,count($CreViaGenM)-1)].$CreSynAccM[rand(0,count($CreSynAccM)-1)].$Accompagnementmin[rand(0,count($Accompagnementmin)-1)], 
		''.$CreViaGenF[rand(0,count($CreViaGenF)-1)].$CreSynAccF[rand(0,count($CreSynAccF)-1)].$Accompagnementmin[rand(0,count($Accompagnementmin)-1)], 
		''.$CreViaGenPlu[rand(0,count($CreViaGenPlu)-1)].$CreSynAccMP[rand(0,count($CreSynAccMP)-1)].$Accompagnementmin[rand(0,count($Accompagnementmin)-1)],
		'Une tourte au '.$CreViadu[rand(0,count($CreViadu)-1)].' et aux '.$CreAccCuide[rand(0,count($CreAccCuide)-1)].' accompagnée d\'une salade'); 


	//Dessert
	// Dessert Base + fruit
	$CreDesBas = array("confiture", "chausson", "compote", "tarte");
	//Dessert Générique
	$CreDesGen = array("Des beignets de figues", "Des dattes fourées", "Un chausson aux pommes", "Une compote de pommes", "Un assortiment de fruits secs", "Un gruau de blé surcé et safrané", "Une tarte d'amande et de miel", "Une crème de lait d'amande", "Des biscuits aux amandes", "Un cake de fruits secs", "Des crêpes au vin blanc", "Des gaufrettes et confiture", "Une tarte aux pruneaux", "Un porridge de riz aux pommes et raisins secs", "Une tarte à l'eau de rose", "Une pâtisserie au miel", "Un yaourt de fromage frais", "Un flan au lait", "Une tourte aux pommes", "Un pain d'épices", "De l'écorce d'orange en bonbon", "Des beignets au miel", "Du nougat noir", "Des poires au sirop", "Des gaufrettes de fleur d'oranger", "Une gaufre fromage, ail des ours et lard", "Une gaufre au miel", "Une gaufre au vin blanc", " Du pain perdu", "Des tartelettes de poires aux fruits secs", "Des pommes au four", "Une tarte aux noix", "Une tarte aux fraises", "Une tourte à la cerice", "Des marrons grillés", "Du gingembre confit", "Des gateaux au cumin", "Des sablés aux fraises et à la lavande", "De la marmelade aux myrtilles et au miel", "De la marmelade de prune épicée", "Des gâteaux à la pomme et aux mûres");
	$Dessert = array('Une confiture de '.$CreFrude[rand(0,count($CreFrude)-1)],
		'Une confiture d\''.$CreFrud[rand(0,count($CreFrud)-1)],
		'Un chausson de '.$CreFrude[rand(0,count($CreFrude)-1)],
		'Un chausson d\''.$CreFrud[rand(0,count($CreFrud)-1)],
		'Une compote de '.$CreFrude[rand(0,count($CreFrude)-1)],
		'Une compote d\''.$CreFrud[rand(0,count($CreFrud)-1)],
		'Une tarte de '.$CreFrude[rand(0,count($CreFrude)-1)],
		'Une tarte d\''.$CreFrud[rand(0,count($CreFrud)-1)],
		''.$CreDesGen[rand(0,count($CreDesGen)-1)],
		''.$CreDesGen[rand(0,count($CreDesGen)-1)],
		''.$CreDesGen[rand(0,count($CreDesGen)-1)]);


	//Boisson
	// Boisson Base Masculin
	$CreBoiBasM = array("Cidre", "Poiré", "Vin pétillant", "Vin blanc", "Vin rouge", "Hypocras", "Whisky", "Scotch", "Cognac", "Rhum"); 
	// Boisson Base Feminin
	$CreBoiBasF = array("Cervoise", "Vodka", "Hydromel");
	// Boisson Adjectif Masculin
	$CreBoiAdjM = array("", "aromatisé", "fort", "léger", "aux épices", "vieilli", "au miel");
	// Boisson Adjectif Feminin
	$CreBoiAdjF = array("", "aromatisée", "forte", "légère", "aux épices", "vieillie", "au miel");
	// Boisson Base + Fruit
	$CreBoiFruBas = array("Liqueur", "Eau de vie", "Elixir");
	// Vin Base
	$CreVinBas = array("Vin");
	// Vin Adjectif
	$CreVinAdj = array("rouge", "rouge", "rouge", "blanc", "blanc", "rosé", "épicé", "aromatisé de miel", "aromatisé de cannelle", "de pin (additionné de résine de pin)", "blanc", "rosé", "rouge", "doux", "chaud", "cuit", "gris (rosé à macération moins longue)", "de paille (très sucré et aromatique)", "liquoreux (très surcé)");
	$CreVinAdj1 = array("de noix", "épicé", "aromatisé de miel", "aromatisé de cannelle", "aromatisé de thym", " de pin (additionné de résine de pin)", "râpeux (dans lequel a été plongé du raifort)", "cordial (à base de tisane et d'épices)", "sauvage (à base de chou rouge et d'ortie)", "de campanule", "de sauge", "anisé", "de pêches", "d'orange", "chaud", "cuit", "elfique", "blanc elfique", "de cerices", "de groseilles", "aux fruits halfling",  "liquoreux halfling");
	// Bière Base
	$CreBieBas = array("Bière");
	// Bière Adjectif
	$CreBieAdj = array("légère", "double", "triple", "arômatisée", "forte", "aux épices", "au miel", "ambrée", "blanche", "blonde", "brune", "noire"); 
	$CreBieAdj1 = array("légère", "double", "triple", "arômatisée", "forte", "aux épices", "au miel", "naine", "triple naine", "ambrée", "blanche", "blonde", "brune", "noire", "de seigle", "de garde", "poivrée halfling", "au beurre halfling"); 
	// Boisson Générique
	$CreBoiGen = array("Ale de blé", "Ale d'orge", "Ale amère", "Vin gris elfique", "Vin ambrée", "Vin fin elfique", "Bière noire naine", "Bière forte naine", "Cognac des Chevaliers", "Cidre de frêne", "Ortillette (Alcool à base d'ortie)", "Whisky de seigle", "Pommeau", "Armagnac", "Lager", "Absinthe", "Ratafia", "Abricotine", "Vin fin", "Vin de mûres", "Vin de rose", "Hypocras au vin blanc", "Vin de sauge", "Tafia à la couleur étrange", "Cidre halfling", "Bière fruitière halfling", "Bière au citron halfling", "Vin de myrtilles halfling", "Hydromel aux fruits halfling");
	// Boisson mauvaise qualité
	$CreBoiMauAdj = array("coupé d'eau", "de table", "de mauvaise qualité", "vieux et éventé");
	$CreBoiMauGen = array("gros rouge", "picrate", "vinasse");
	//Boisson
	$Biere = array('Bière '.$CreBieAdj[rand(0,count($CreBieAdj)-1)]);
	$Biere1 = array('Bière '.$CreBieAdj1[rand(0,count($CreBieAdj1)-1)]);
	$Vin = array('Vin '.$CreVinAdj[rand(0,count($CreVinAdj)-1)]);
	$Vin1 = array('Vin '.$CreVinAdj1[rand(0,count($CreVinAdj1)-1)]);
	$Jus = array('Jus de '.$CreFrude[rand(0,count($CreFrude)-1)], 'Jus d\''.$CreFrud[rand(0,count($CreFrud)-1)]);
	$Boisson = array(''.$CreBoiBasM[rand(0,count($CreBoiBasM)-1)].' '.$CreBoiAdjM[rand(0,count($CreBoiAdjM)-1)],
		''.$CreBoiBasF[rand(0,count($CreBoiBasF)-1)].' '.$CreBoiAdjF[rand(0,count($CreBoiAdjF)-1)]);


	// à faire - terrine + viande -  avec pain (plusieurs type), pain blanc, pain plat, galette, pain et pâté, boisson de mauvaise qualité

	// Creation de repas simple
	$repassimple = array(''.$Accompagnement[rand(0,count($Accompagnement)-1)], ''.$Accompagnement[rand(0,count($Accompagnement)-1)], ''.$Accompagnement[rand(0,count($Accompagnement)-1)], ''.$Accompagnement[rand(0,count($Accompagnement)-1)], 'Un gruau de '.$CreAccCerde[rand(0,count($CreAccCerde)-1)].' préparé dans du jus de viande', 'Un gruau d\''.$CreAccCerd[rand(0,count($CreAccCerd)-1)].' agrementé d\'un petit paté au '.$CreViadu[rand(0,count($CreViadu)-1)], 'Une bouillie de '.$CreAccCerde[rand(0,count($CreAccCerde)-1)].' agrementée d\'un peu de lard', 'Une bouillie d\''.$CreAccCerd[rand(0,count($CreAccCerd)-1)].' accompagnée de fromage');

	// Creation de repas
	$repasnormal0 = array($ViandeAcc[rand(0,count($ViandeAcc)-1)].'.'.'<br/>'.$Biere[rand(0,count($Biere)-1)]);
	$repasnormal1 = array($repassimple[rand(0,count($repassimple)-1)].'.'.'<br/>'.$Dessert[rand(0,count($Dessert)-1)].' en dessert.'.'<br/>'.$Biere[rand(0,count($Biere)-1)]);
	$repasnormal = array($repasnormal0[rand(0,count($repasnormal0)-1)], $repasnormal1[rand(0,count($repasnormal1)-1)]);

	// Creation de repas fin
	$repasfin = array($ViandeAcc[rand(0,count($ViandeAcc)-1)].'.'.'<br/>'.$Dessert[rand(0,count($Dessert)-1)].' en dessert.'.'<br/>'.$Vin[rand(0,count($Vin)-1)]);

	// Creation d'un menu
	$repas ='<h4>Repas simple :</h4>'.$repassimple[rand(0,count($repassimple)-1)].'.'.'<br/>'.'<br/>'.'<h4>Repas :</h4>'.$repasnormal[rand(0,count($repasnormal)-1)].'<br/>'.'<br/>'.'<h4>Repas fin :</h4>'.$repasfin[rand(0,count($repasfin)-1)].'<br/>'.'<br/>'.'<h4>Boissons :</h4>'.$Biere[rand(0,count($Biere)-1)].'<br/>'.$Biere1[rand(0,count($Biere1)-1)].'<br/>'.$Vin[rand(0,count($Vin)-1)].'<br/>'.$Vin1[rand(0,count($Vin1)-1)].'<br/>'.$Boisson[rand(0,count($Boisson)-1)].'<br/>'.$CreBoiGen[rand(0,count($CreBoiGen)-1)].'<br/>'.$CreBoiFruBas[rand(0,count($CreBoiFruBas)-1)].' de '.$CreFrude[rand(0,count($CreFrude)-1)].'<br/>'.$Jus[rand(0,count($Jus)-1)];
	return $repas;
}
?>