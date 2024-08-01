<?php
function creernomevo($race,$sexe) {
/* sexe
 * 1 = Homme
 * 2 = femme
 * 
 * race
 * 1 = Demi-elfe
 * 2 = Demi-orque
 * 3 = Elfe
 * 4 = Gnome
 * 5 = Gobelin
 * 6 = Halfelins
 * 7 = Humain
 * 8 = Nain 
 * 9 = Drow
 */
	$racetab =array("","Demi-elfe","Demi-orque","Elfe","Gnome","Gobelin","Halfelins","Humain","Nain","Drow");
	$sexetab =array("","masculin","feminin");
	$nom='';
	if ($sexe==0) $sexe=rand(1,2);
	if ($race==0) $race=rand(1,9);
		
	switch ($race) {
		case 1:
		if (rand(0,1)==1) { //nom de famille humain prénom elfe
			include_once ('lib/nomhum.php');
			if ($sexe==2){
				include_once ('lib/prenomfemelfe.php');
				include_once ('lib/prenomfem.php');
				$nom=getprenomhumfem()." \"".getprenomelfefem()."\" ".getnomhum();		
				     			
			}
			else {
				include_once ('lib/prenommaselfe.php');
				include_once  ('lib/prenommas.php');
				$nom=getprenomhumhom()." \"".getprenomelfehom()."\" ".getnomhum();
			}
		}
		else { //nom de famille else prenom humain
			include_once ('lib/nomelfe.php');
			if ($sexe==2){
				include_once ('lib/prenomfem.php');
				include_once ('lib/prenomfemelfe.php');
				$nom=getprenomelfefem()." \"".getprenomhumfem()."\" ".getnomelfe();					
			}
			else {
				include_once ('lib/prenommas.php');
				include_once ('lib/prenommaselfe.php');
				$nom=getprenomelfehom()." \"".getprenomhumhom()."\" ".getnomelfe();	
			}
		}
		break;
		case 2: 
		include_once ('lib/prenommasorque.php');
		$nom=getprenomorquehom();					
		
		break;	
		case 3: 
		include_once ('lib/nomelfe.php'); 
		if ($sexe==2)	{
			include_once ('lib/prenomfemelfe.php');
			$nom=getprenomelfefem()." ".getnomelfe();					
		}
		else	{
			include_once  ('lib/prenommaselfe.php');
			$nom=getprenomelfehom()." ".getnomelfe();
		}
		break;	
		case 4:
			include_once ('lib/nomgnome.php');
			$nom=getnomgnome();
		break;
		case 5:
			include_once ('lib/prenomgob.php');
			$nom=getprenomngob();
		break;
		case 6:
		include_once ('lib/nomhalf.php'); 
		if ($sexe==2)	{
			include_once ('lib/prenomfemhalf.php');
			$nom=getprenomhalffem()." ".getnomhalf();					
		}
		else {
			include_once  ('lib/prenommashalf.php');
			$nom=getprenomhalfhom()." ".getnomhalf();
		}
		break;	
			
			
		case 7:
		include_once ('lib/nomhum.php'); 
		if ($sexe==2)	{
			include_once ('lib/prenomfem.php');
			$nom=getprenomhumfem()." ".getnomhum();					
		}
		else {
			include_once  ('lib/prenommas.php');
			$nom=getprenomhumhom()." ".getnomhum();
		}
		break;
		case 8:
		include_once ('lib/nomnain.php');
		if ($sexe==2) {
			include_once ('lib/prenomfemnain.php');
			$nom=getprenomnainfem()." ".getnomnain();	 
		}
		else {
			include_once  ('lib/prenommasnain.php');
			$nom=getprenomnainhom()." ".getnomnain();
		}
		break;
		case 9:
		include_once ('lib/nomdrow.php');
		if ($sexe==2) {
			include_once ('lib/prenomfemelfe.php');
			$nom=getprenomelfefem()." ".getnomdrow();
		}
		else	{
			include_once  ('lib/prenommaselfe.php');
			$nom=getprenomelfehom()." ".getnomdrow();
		}
		break;	
		
	}
	
return $nom." (".$racetab[$race].", ".$sexetab[$sexe].")";

}

function creernomsim($race,$sexe){
/* sexe
 * 1 = Homme
 * 2 = femme
 * 
 * race
 * 1 = Demi-elfe
 * 2 = Demi-orque
 * 3 = Elfe
 * 4 = Gnome
 * 5 = Halfelins
 * 6 = Humain
 * 7 = Nain 
 */
	
	$racetab =array("","Demi-elfe","Demi-orque","Elfe","Gnome","Gobelin","Halfelins","Humain","Nain","Drow");
	$sexetab =array("","masculin","feminin");
	$nom='';
	switch ($race) {
		case 1:
		if (rand(0,1)==1) { //nom de famille humain prénom elfe
			if ($sexe==2){
				include_once ('lib/prenomfemelfe.php');
				include_once ('lib/prenomfem.php');
				$nom=getprenomhumfem()." \"".getprenomelfefem();		
				     			
			}
			else {
				include_once ('lib/prenommaselfe.php');
				include_once  ('lib/prenommas.php');
				$nom=getprenomhumhom()." \"".getprenomelfehom();
			}
		}
		else { //nom de famille else prenom humain
			if ($sexe==2){
				include_once ('lib/prenomfem.php');
				include_once ('lib/prenomfemelfe.php');
				$nom=getprenomelfefem()." \"".getprenomhumfem();					
			}
			else {
				include_once ('lib/prenommas.php');
				include_once ('lib/prenommaselfe.php');
				$nom=getprenomelfehom()." \"".getprenomhumhom();	
			}
		}
		break;
		case 2: 
		include_once ('lib/prenommasorque.php');
		$nom=getprenomorquehom();					
		
		break;	
		case 3: 
		
		if ($sexe==2)	{
			include_once ('lib/prenomfemelfe.php');
			$nom=getprenomelfefem();					
		}
		else	{
			include_once  ('lib/prenommaselfe.php');
			$nom=getprenomelfehom();
		}
		break;	
		case 4:
			include_once ('lib/nomgnome.php');
			$nom=getnomgnome();
		break;
		case 5:
		if ($sexe==2)	{
			include_once ('lib/prenomfemhalf.php');
			$nom=getprenomhalffem();					
		}
		else {
			include_once  ('lib/prenommashalf.php');
			$nom=getprenomhalfhom();
		}
		break;	
			
			
		case 6:
		if ($sexe==2)	{
			include_once ('lib/prenomfem.php');
			$nom=getprenomhumfem();					
		}
		else {
			include_once  ('lib/prenommas.php');
			$nom=getprenomhumhom();
		}
		break;
		case 7:
		if ($sexe==2) {
			include_once ('lib/prenomfemnain.php');
			$nom=getprenomnainfem();	 
		}
		else {
			include_once  ('lib/prenommasnain.php');
			$nom=getprenomnainhom();
		}
		default:
			;
		break;
	}
	
return $nom." (".$racetab[$race].", ".$sexetab[$sexe].")";
	/*

  Trait
Fouineur
Toux préoccupante
Petit
Grands pieds
Bave
Grassouillet
Hyperactif
Se fait craquer les doigts
Paranoïaque
Dentition pourrie
Masochiste
Lèvres gercées
Douleurs buccales
Malade !
Pue
Conjonctivite
Cinglé
Maigrichon
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
}
?>