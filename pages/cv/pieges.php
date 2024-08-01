<?php
include ('lib/compteur.php');

$declencheurs = array(
    "Action mécanique (serrure, poignée, levier, etc.)", "Déclenchement automatique cyclique", "Défaut de mot de passe ou de mouvements somatiques précis", 
    "Détection d’alignement", "Détection d’équipement spécifique (ou exclusif)", "Détection de chaleur", "Détection de comportement interdit", "Détection de couleur", 
    "Détection de magie active", "Détection de mouvement", "Détection de nombre", "Détection de pensée malveillante ou adverse", "Détection de personne spécifique (ou exclusive)", 
    "Détection de peuple spécifique (ou exclusif)", "Détection de présence", "Détection de proximité", "Détection de vie", "Goupille et fil", "Plaques de pression, ressorts", 
    "Rayons lumineux"
);

$rapidite_tour = array(
    "1 tour", "2 tours", "3 tours", "4 tours"
);

$rapidite = array(
    "Le piège se déclenche immédiatement", "Le piège se déclenche immédiatement", "Le piège se déclenche immédiatement", "Le piège se déclenche immédiatement", 
    "Le piège se déclenche immédiatement", "Le piège se déclenche au bout de ".$rapidite_tour[rand(0,count($rapidite_tour)-1)], 
    "Le piège prévient de son déclenchement imminent (par un bruit, grâce à une bouche magique, par un signal lumineux)", 
    "Le premier piège (facile à trouver) est factice et en dissimule un autre plus dangereux et imprévisible, qui utilise le déclenchement suivant : ".$declencheurs[rand(0,count($declencheurs)-1)]."."
);

$desarmorcage = array(
    "Action physique (acrobaties, passage en force, en vitesse)", "Blocage physique", "Annulation magique, utilisation d’un sort spécifique", "Illusion, dissimulation, mascarade", 
    "Danse sacrée", "Déclenchement à distance", "Destruction massive des mécanismes", "Énigme à résoudre", 
    "Clef physique à insérer (peut-être traîne-t-elle dans le coin ou sur les créatures locales)", "Politesse et étiquette (pièges intelligents)", 
    "Opération mécanique fine, désamorçage classique", "Opération spécifique, rituel", "Patience (fin de cycle)", "Mot de passe", 
    "Puzzle physique à résoudre (éventuellement à plusieurs)", "Sacrifice (sang, blessure, objet, richesses...)", "Utilisation d’un liquide (eau, huile…)", 
    "Utilisation de feu, de froid, d’acide, d’électricité", "Utilisation de matériaux élémentaires", "Utilisation de morceaux de créatures (main, sang ...)"
);

$poison = array(
    "Le personnage est aveugle", "Le personnage est immobilisé", "Le personnage est atteint de faiblesse et est limité à 1d4 dégâts, quelle que soit l’arme", 
    "Le personnage est paralysé", "Le personnage est sourd", "Le personnage éternue sans cesse et fait beaucoup de bruits involontaires", "Le personnage ne peut plus parler", 
    "Le personnage ne peut plus récupérer de santé jusqu’au prochain repos", "Le personnage ne supporte plus ses vêtements et son armure (urticaire)", 
    "Le personnage tiens difficilement debout et passe son temps à tomber (dès qu’il rate un jet)", "Le personnage perd définitivement 1d4 points de vie (drain de vie)", 
    "Le personnage perd 1d8, 2d8 ou 3d8 points de vie", "Le personnage perd une matrice de sort (la plus élevée)", "Le personnage sécrète des odeurs insupportables", 
    "Le personnage subit un désavantage à tous ses jets d’attaque", "Le personnage subit un désavantage à toutes ses actions", 
    "Le personnage subit un désavantage à tous les jets de caractéristique", "Le personnage subit un malus de -4 en classe d’armure en combat", "Le personnage tombe inconscient", 
    "Le personnage risque la mort"
);

$maladie_effet = array(
    "Activité limitée ou impossible", "Aveuglé ou assourdi (désavantage à toutes les actions appropriées)", "Désavantage à toutes les actions", "Pas de magie possible", 
    "Pas de récupération de santé par des moyens normaux et/ou magiques", "Perte de 1d8 à son maximum de points de vie chaque jour"
);
$maladie_duree = array(
    "Repos", "1d6 jours", "2d6 jours", "3d6 jours", "Plusieurs mois", "Permanent (jusqu’à soins magiques)"
);
$maladie_symptomes = array(
    "Coma ou sommeil profond", "Dérangements organiques", "Éruptions cutanées ou nécroses", "Fièvres", "Hallucinations et délires", "Tremblements et troubles de la mobilité."
);
$maladie = "Effets : ".$maladie_effet[rand(0,count($maladie_effet)-1)]." - Durée : ".$maladie_duree[rand(0,count($maladie_duree)-1)]." - Symptômes : ".$maladie_symptomes[rand(0,count($maladie_symptomes)-1)];

$effets = array(
    "Acide (brûlure, destruction d’équipement, de ressources)", "Animation d’objets ou de statues", "Asphyxie (gaz neutre, vide, noyade, etc.)", "Chute", 
    "Désenchantement, dissipation de la magie", "Destruction de ressources, d'objet, empoisonnement (".$poison[rand(0,count($poison)-1)]."), maladie (".$maladie.")", "Drain de magie", 
    "Malédiction", "Effet mental (terreur, sommeil, charme, changement d’alignement, etc.)", "Effet physique majeur (métamorphose, désintégration, pétrification, etc.)", 
    "Effet physique mineur (immobilisation, mise à terre, paralysie, etc.)", "Électricité", "Feu", "Glace", "Invocation de monstres", "Lames, piques, fléchettes", 
    "Écrasement (rocs, sable, dalle, etc.)", "Poison soit forme de gaz, liquide, dard, etc. (".$poison[rand(0,count($poison)-1)]."), maladie magique (".$maladie.")", 
    "Porte, grille, barreaux, mur, prison, blocage", "Téléportation"
);

//création du texte du piège.
compteur('pieges');
$output =' ';

$output.="<h4>Comment le piège se déclenche-t-il ?</h4>";
$output.= $declencheurs[rand(0,count($declencheurs)-1)];

$output.="<h4>Quand ?</h4>";
$output.= $rapidite[rand(0,count($rapidite)-1)];

$output.="<h4>Comment le désamorcer ?</h4>";
$output.= $desarmorcage[rand(0,count($desarmorcage)-1)];

$output.="<h4>Quels sont ses effets ?</h4>";
$output.= $effets[rand(0,count($effets)-1)];


$output.= '<form method="get" onsubmit="return valid();" action="index.php?page=cv/pieges">';		
$output.= '<input type="submit" formmethod="POST" name="bouton" value="Générer un autre piège"></form></br></br>';	
$output.= "Générateur utilisant les tables de <a href='http://legrumph.org/Terrier/?Chibi/Coeurs-Vaillants'>Coeurs Vaillants</a>, par <a href='http://www.legrog.org/biographies/le-grumph'>John Grümph</a>";
echo $output;

?>