<?php 
include ('lib/creerguerrier.php');
include ('lib/creervoleur.php');
include ('lib/creerpretre.php');
include ('lib/creermage.php');

$pnjphysiquetab=array("fin", "grassouillet", "maigrichon", "musclé", "rond");
$pnjagetab=array("enfant", "adolescent", "jeune adulte", "adulte", "age mur", "vieux", "très vieux", "vénérable");
$pnjdetailtab=array("accent", "bijou", "bave", "cicatrice", "conjonctivite", "dentition pourrie", "douleurs buccales", "grande taille", "grands pieds", "lèvres gercées" "mutilé", "malade", "petite taille", "propre", "perruque", "sale", "se fait craquer les doigts", "symbole religieux", "tatouage", "teint pâle", "toux préoccupante", "voix grave", "voix fluette");
$pnjvisagetab=array("agréable", "autoritaire", "beau", "carré", "délicat", "détendu", "fatigué", "frais", "gros nez", "jeune", "maigre", "maquillé", "ridé", "rond");
$pnjneztab=array("cassé", "fin");
$pnjcheveuxtab=array("noir", "brun", "châtain clair", "châtain foncé", "blond", "roux");
$pnjcheveuxadjtab=array("beaux", "courts", "longs");
$pnjyeuxtab=array("bleu", "brun", "gris", "noir", "vert", "verron");
$pnjyeuxadjtab=array("beaux", "longs");


$pnjvertutab=array("bon", "chaste", "clément", "courageux", "dévoué", "généreux", "honnête", "humble", "juste", "loyal", "pieux", "prude", "sage");
$pnjcaracteretab=array("calme", "colérique", "jovial", "mélancolique");
$pnjvicetab=array("ambitieux", "arrogant", "avare", "cruel", "égoïste", "fouineur", "hédoniste", "hypocrite", "idiot", "intriguant", "injuste", "lâche", "masochiste", "paresseux", "séducteur");
$pnjqualitetab=array("analyste", "créatif", "passionné", "pragmatique");
$pnjdefauttab=array("cynique", "cinglé", "distrait", "fanatique", "froid", "hyperactif", "paranoïaque")
$pnjmetiertab=array("agriculteur", "aubergiste", "apothicaire", "artisan", "boulanger", "boucher", "charpentier", "courtisan", "commerçant", "forgeron", "garde", "ingénieur", "maçon", "marin", "médecin", "mendiant", "meunier", "mineur", "pêcheur", "prostitué", "sage", "soldat", "serviteur", "tailleur", "tanneur", "tavernier");
$pnjmetiercomptab=array("novice", "qualifié", "expert", "maître");
$pnjaventuriertab=array("mage", "sorcier");
$pnjtenuehommetab=array();
$pnjtenuefemmetab=array();
$pnjcouleurtab=array();
$pnjaccessoiretenuetab=array();
$pnjcombattanttab=array("novice","maladroit","peureux","suicidaire","bon élève","autodidacte","brute","artiste","athlète","vieux briscard"); //rand qualité ?
/*
Allergique
Flatulence chronique
Superstitieux
Haleine de chacal
Nerveux
Incontinent
Sadique
Vorace
Prolixe
Boite
Pervers
Corpulent
Tic nerveux
Hideux
Salace
Origine arabe
Voix aiguë
Ridé
Bigleux
Séduisant
Édenté
Peau très foncée
Boite
Bégaye
Se cure les ongles
à l'aide d'un poignard
Voix grave et forte
Frêle
Barbichette
Acné
Tatouages cool
Longs cheveux
chatoyants
Origine cathayenne
Rire singulier
Râblé
Regard insolite
Dégingandé
Nez qui coule
en permanence
Grand
Reluque les gens
Marques de brûlures
Superbe dentition
Belle cicatrice
Sourit tout le temps
Borgne
Chauve
Silhouette étrange
Obèse
Ricane d'un air
diabolique
Tatouages curieux
Squelettique
Traits marqués
Incisives saillantes
Yeux injectés de sang
Mince
Barbe broussailleuse
Iroquoise
Visage grêlé
Dents manquantes
Piercings
Tapageurs
Cou recouvert
de boutons
Discret
Nez cassé
Teint blafard
Grandes oreilles
Peau grasse
Trop théâtral
Marque de naissance
Propre
Teint aviné
Crade
Grossier
Pèle
Vêtements tape-à-1'oeil
Doigt(s) en moins
Peau très basanée
Étonnement
quelconque
Cicatrice effrayante
Mains palmées
Vulgaire
Rejouez 2 fois les dés
Rejouez 3 fois les dés*/
?>