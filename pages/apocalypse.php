<script type="text/javascript" src="javascript/valider.js"></script>
<script type="text/javascript" src="javascript/verifint.js"></script>
<?php
include ('lib/compteur.php');
include ('lib/deltab.php');

	compteur('apocalypse');
	$cause = array (
/*0*/		"d'un virus",
/*1*/		"d'une infection bactériologique",
/*2*/		"du réveil de Cthulhu",
/*3*/		"d'une guerre atomique",
/*4*/		"d'une apocalypse divine",
/*5*/		"d'une invasion d'extra-terrestre",
/*6*/		"d'une chute de météorite",
/*7*/		"de rayonnements solaire",
/*8*/		"de la suprématie alimentaire de Monsanto",
/*9*/		"d'une domination politique par des cultistes",
/*10*/		"de l'arrivée de Satan",
/*11*/		"du réveil des machines",
/*12*/		"d'un mal antique libéré",
/*13		"d'un manque de ressource",		*/		
/*14*/		"d'un changement climatique brusque");
		
	$intro = array("Ce virus","Cette infection","Ce réveil","Cette guerre","Cette intervention divine","Cette invasion","Cette catastrophe","Ces rayonnements","La qualité des aliments","Cette domination","Cette arrivée","Ce réveil","Cette libération","Ce changement");
	$annee = rand(10,100);
	$contree = array("la Coréée","la chine","l'amérique","l'europe","la russie");
	
	
	$consequence2 = array();
	  $consequence2[0] = array(	"la transformation des humains en zombies",
								"la mutation des insectes",
								"la mutation des mammifères",
								"la transformation des humains en fou meurtrier",
								"l'infertilité de ".rand(75,99)."% des hommes",
								"la mutation de l'homme ",
								"l'infertilité de ".rand(75,99)."% des femmes");
								
	  
	  $consequence2[1] = array(	"la transformation des humains en zombies",
								"la mutation des insectes",
								"la mutation des mammifères",
								"la transformation du comportement humain en une folie meurtrière",
								"l'infertilité de ".rand(75,99)."% des hommes",
								"l'infertilité de ".rand(75,99)."% des femmes");
	  
	  $consequence2[2] = array(	"la destruction de la côte est des États-Unis",
								"la destruction de la côte ouest des États-Unis",
								"la destruction d'une partie de l'Europe",
								"la destruction de l'Australie",
								"un raz de marée gigantesque");
	  
	  $consequence2[3] = array(	"un hiver nucléaire de ".rand(10,100)." ans",
								"la destruction de ".$contree[rand(0,count($contree)-1)],
								"la mutation des insectes",
								"la mutation des mammifères");
	  
	  $consequence2[4] = array(	"des pluies acide",
								"des tsunamis d'ampleurs inégalées",
								"des trombes d'eau durant plus de ".rand(10,100)." mois",
								"des invasions de criquets",
								"des transformations d'eau en sang","des invasions de grenouilles",
								"des vermines sortant de la poussière et couvrant le monde ",
								"des hordes d'animaux sauvages errant dans toute la campagne et détruisant tout sous leurs pas",
								"des ulcères s'ouvrirent sur le corps des hommes et des bêtes à travers le monde",
								"des tempêtes de grêle d'une violence sans précédent",
								"des tempêtes assourdissante grondant sur la terre, ou des éclairs fendirent les cieux, laissant des traînées de flamme sur le sol");
	  
	  $consequence2[5] = array(	"des nations entières réduitent à l'esclavages",
								"des disparitions d'enfants",
								"des guerres aux proportions inouïes",
								"l'exode massif de différentes nations");
								
	  $consequence2[6] = array(	"la destruction de la côte est des États-Unis",
								"la destruction de la côte ouest des États-Unis",
								"la destruction d'une partie de l'Europe",
								"la destruction de l'Australie",
								"un raz de marée gigantesque",
								"la transformation des humains en zombies",
								"la mutation des insectes",
								"la mutation des mammifères",
								"l'apparition de pouvoirs étranges chez certains individus");
								
	  $consequence2[7] = array(	"une augmentation importante de la température",
								"la fonde des glaces artiques",
								"une désertification des continents",
								"une augmentation rapide des cas de cancers de la peau",
								"une augmentation du niveau de l'eau recouvrant les zones les moins élevées de la terre");
	  
	  $consequence2[8] = array(	"la transformation des humains en zombies",
								"la mutation des insectes",
								"la mutation des mammifères",
								"l'apparition de pouvoirs étranges chez certains individus",
								"l'infertilité de ".rand(75,99)."% hommes",
								"l'infertilité de ".rand(75,99)."% femmes",
								"la transformation du comportement humain en une folie meurtrière",
								"le cannibalisme");
	  
	  $consequence2[9] = array(	"des sacrifices humains sont demandé a chaque nation",
									"une taxe sur les revenus astronomique entrainant vol, ",
									"une inquisition dictant tout les faits et gestes et tuant à chaque faute",
									"une vague de folie poussant les humains au suicide",
									"l'apparition de bêtes étranges sémants la mort",
									"des nations entières réduitent à l'esclavages",
									"des disparitions d'enfants",
									"des guerres aux proportions inouïes",
									"l'exode massif de différentes nations");
	  
	  $consequence2[10] = array(	"l'apparition de démon tuant chaque homme sur leurs passage ",
									"une vague de folie poussant les humains au suicide",
									"des nations entières réduitent à l'esclavages",
									"des disparitions d'enfants",
									"des guerres aux proportions inouïes",
									"l'exode massif de différentes nations");
	  
	  $consequence2[11] = array(	"une guerre contre les machines",
									"un arrêt total de l'industrie",
									"l'explosion de centrale nucléaire",
									"la chute de sattélite sur terre",
									"l'esclavagisme de peuples");
	  
	  $consequence2[12] = array(	"des pluies acide",
									"des tsunamis d'ampleurs inégalées",
									"des trombes d'eau durant plus de ".rand(10,100)." mois",
									"des invasions de criquets",
									"des transformations d'eau en sang","des invasions de grenouilles",
									"des vermines sortant de la poussière et couvrant le monde ",
									"des hordes d'animaux sauvages errant dans toute la campagne et détruisant tout sous leurs pas",
									"des ulcères s'ouvrirent sur le corps des hommes et des bêtes à travers le monde",
									"des tempêtes de grêle d'une violence sans précédent",
									"des tempêtes assourdissante grondant sur la terre, ou des éclairs fendirent les cieux, laissant des traînées de flamme sur le sol",
									"la transformation des humains en zombies",
									"la mutation des insectes",
									"la mutation des mammifères",
									"la transformation des humains en fou meurtrier");
	  
	  /*$consequence2[14] = array(	"des actes de vandalismes dans les magasins",
									"du cannibalisme",
									" ",
									" ");*/
	  
	  $consequence2[13] = array(	"une augmentation importante de la température",
									"la fonde des glaces artiques",
									"une désertification des continents",
									"une augmentation rapide des cas de cancers de la peau",
									"une augmentation du niveau de l'eau recouvrant les zones les moins élevées de la terre");
	
	$consequence3 = array ("un effondrement économique","une militarisation de diverses zones","un soulèvement des populations","des guerres urbaines");
	$comment = array ("caché","terré","reclus","planqué","dissimulé","tapi","blotti","refugié","enfermé");
	$localisation = array ("dans de petites grottes montagneuses","dans d’immenses bunkers protégés","sur des plates-formes en mer","dans des minuscules villages","dans des villes fortifiées","sur des bateaux","dans des stations sous-marine");
	$avantfin = array ("afin de ","espérant ");
	$fin = array (	"se protéger du virus.",
					"se protéger des infections.",
					"se cacher du Grand Ancien.",
					"se se mettre à couvert de cette guerre.",
					"se protéger de la colère divine.",
					"ne plus être en contact avec cette invasion.",
					"se protéger de cette catastrophe.",
					"se protéger des rayonnements.",
					"de ne plus manger des produits Monsanto.",
					"se cacher et non couvert par les cultistes en recherchent de sacrifice.",
					"se cacher et non couvert par Satan et ses sbires.",
					"se cacher et non couvert par les machines.",
					"se protéger de ce changement.");
	
	$type=rand(0,count($cause)-1);
	$redupop=100-rand(25,60);
	
	$redupop2=(100-$redupop)-rand(4,25);
	$tabutile=$consequence2[$type];
	
	for($i=0;$i<3;$i++){
			$conse[$i]=$tabutile[rand(0,count($tabutile)-1)];
			$tabutile=array_delete_value($tabutile,$conse[$i]);
			rsort($tabutile);
			
	}
	
	
	$output='';
	$output.='En l\'an '.rand(2015,3999).', la terre fut victime ';
	$output.=$cause[$type];
	$output.=' donnant lieu à une multitude de conséquence à commencer par '.$conse[0].'. ';
	$output.=$intro[$type].', réduisit la population de '.$redupop.'%. Par la suite, d\'autres phénomènes ('.$conse[1].' et '.$conse[2].') apparurent sur la planète. Rapidement les états durent faire face à '.$consequence3[rand(0,count($consequence3)-1)].'.<br />';
	$output.='Aujourd\'hui il ne reste que '.$redupop2.'% de la population vivant '.$comment[rand(0,count($comment)-1)].' '.$localisation[rand(0,count($localisation)-1)];
	$output.=' '.$avantfin[rand(0,count($avantfin)-1)].$fin[rand(0,count($fin)-1)]; 

	$output.= '	<form method="post" onsubmit="return valid();" action="index.php?page=apocalypse">';
	$output.= '<input type="button" value="Générer une apocalypse"  OnClick="window.location.href='."'index.php?page=apocalypse'".'"></form>';
	
echo $output;

?>

