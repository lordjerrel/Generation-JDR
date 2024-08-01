<?php

function creerscenar(){
		$autre = array("une potion","un lieu hanté","une arme","une grotte","un bijou","l'antre d'un monstre","un château","une oeuvre d'art","un bateau","un artefact","un temple","un animal","un grimoire","un marécage","un poison","une mine","de la nourriture","un village","un outil artistique","un lieu magique");
		
		$demandeur = array (
			"un glorieux champion du Bien",
			"un membre de la famille ou un ami",
			"un marchand honnête",
			"le leader d'une bande d'aventuriers",
			"un maître de guilde amicale",
			"le mentor de l'un des PJs",
			"le conseiller du seigneur local",
			"un puissant magicien",
			"un héros renommé",
			"le capitaine de la garde",
			"un religieux respectable",
			"un noble de haute estime",
			"un mercenaire mystérieux",
			"un membre corrompu de l'entourage du seigneur local",
			"un chevalier à la retraire",
			"un simple paysan",
			"un ermite submergé par les problèmes",
			"un courtisan/ une courtisane",
			"un ami des PJs",
			"une fille de plaisir",
			"un prêtre bon",
			"un seigneur local");
			
		$soupcon = array (
			"d'un prêtre mauvais",
			"d'un puissant sorcier maléfique",
			"d'un illustre démon",
			"d'un monstre",
			"d'un dangereux nécromant/démoniste",
			"d'un guerrier tristement célèbre et malfaisant",
			"de l'ex-capitaine de la garde rancunier",
			"d'un prêtre maléfique",
			"d'un noble mal intentionné",
			"d'un marchand peu scrupuleux",
			"du gourou d'une secte",
			"d'un maître de guilde corrompu",
			"d'un criminel sans scrupule",
			"du némésis de l'un des PJs",		
			"d'un mercenaire mystérieux",
			"d'un dragon en maraude",
			"d'un escroc/roublard discret mais habile");
		
		$evenement = array(
			"les vestiges d'une cérémonie démoniaque ont été découverts",
			"de nombreuses personnes disparaissent",
			"un lieu sacré a été profané",
			"un incendie s'est déclaré",
			"des monstres locaux se font plus nombreux",
			"des pauvres sont assassinés/massacrés",
			"des convois disparaissent",
			"des faits inexpliqués se manifestent",
			"un innocent est accusé d'un crime qu'il n'a pas commis",
			"le climat devient très inhabituel pour la saison",
			"une carte aux trésors a été découverte",
			"une armée se rassemble",
			"un individu important a été enlevé",
			"une puissante créature a été libérée",
			"une puissante créature a été invoquée",
			"une épidémie se déclare",
			"une série de cambriolages a eu lieu",
			"les morts quittent leur repos éternel et attaquent les environs",
			"un incendie s'est déclaré, menaçant fermes et forêts",
			"les brigands se font de plus en plus menaçants",
			"des riches/nobles meurent mystérieusement",
			"des phénomènes magiques sont apparus à proximité",
			"une mission diplomatique s'est faite attaquer alors qu'elle était envoyée dans un pays voisin",
			"un portail vers une autre dimension a été ouvert",
			"un objet rare/précieux/unique doit être retrouvé",
			"une guerre civile s'est déclarée",
			"un criminel/ennemi s'est échappé",
			"un puissant monstre dévaste les environs",
			"une étrange porte a été découverte");
			
		$lieu = array (
			"de l'endroit où s'est déroulé la précédente aventure, ",
			"d'une grande ville, ",
			"des bourgs d'une grande ville, ",
			"d'un village,", 
			"d'une petite ville, ",
			"d'un hameau et des fermes alentours, ",
			"d'une route marchande, ",
			"d'un col montagneux, ",
			"d'une taverne, ",
			"du quartier malfamé de la ville, ",
			"du QG actuel des PJs, ",
			"du QG local d'une guilde, ",
			"du QG local d'une organisation, ",
			"d'un grand temple, ",
			"de la demeure du seigneur local, ",
			"d'une demeure abritant un magicien, ",
			"d'un temple abandonné, ",
			"d'un temple désacralisé, ",
			"des égouts d'une grande ville, ",
			"des sépultures d'une famille noble, ",
			"du cimetière local, ",
			"des étendues sauvages à la frontière du pays, ",
			"d'un bois sauvage et peu exploré, ",
			"des profondeurs d'une ancienne forêt, ",
			"des marais et marécages locaux, ",
			"d'une caverne ou une ancienne mine, ",
			"des ruines d'une abbaye, ",
			"des ruines d'un château, ",
			"des ruines d'une ville oubliée, ",
			"des vestiges d'une temple maléfique, "
			);
		$first = array (
			"Proche ",
			"A proximité ",
			"Aux alentours ",
			"Tout autour ",
			"Pas loin ",
			"Près "		
			);

		
		$scenar='';
		$scenar.=$first[rand(0,count($first)-1)].''.$lieu [rand(0,count($lieu )-1)].' '.$evenement[rand(0,count($evenement)-1)].'. Les joueurs sont appelès par '.$demandeur[rand(0,count($demandeur)-1)].' qui pense savoir que c\'est l\'oeuvre '.$soupcon[rand(0,count($soupcon)-1)].'.';
		//$scenar.=count($lieu). ' '.count($soupcon).' '.count($demandeur). ' '.count($evenement);
		return $scenar;
		
	}

?>