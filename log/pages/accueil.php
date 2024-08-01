<?php

include ('lib/compteur.php');
$output=''; 
$output.='<h2>Bienvenue sur Generation-jdr.fr</h2>';
$output.='Vous aussi vous avez trop souvent lancé des brouettes de dés pour connaître le trésor aléatoire que vous désirez placer. ';
$output.='Il existe bien quelques sites permettant de générer des bribes de trésor mais ceux-ci sont rarement complet.<br />';
$output.='Generation-jdr a pour vocation de concevoir tout ce qui peut se générer et ce dans différents jeux. '; 
$output.='Pour l\'instant, seuls DD3.5 et les univers médiévaux fantastiques sont en place mais bientôt d\'autres générations arriveront peut-être si celles-ci plaisent à la communauté. ';
$output.='N\'hésitez pas à laisser un message dans la partie contact pour nous faire connaître votre avis. <br />';
$output.='<h2>Mise à jour Aout 2020</h2>';
$output.='Bien le bonjour, je viens me présenter à vous en tant que nouveau webmaster de Génération-Jdr, je m\'appelle Mathieu alias Lordjerrel, je vis actuellement à Grenoble. Je fais du jeu de rôle depuis bientôt 20 ans et j\'ai toujours eu un faible pour les générateurs aléatoires depuis mes débuts sur D&D3. <br /> 
Je débute dans le développement web, donc il va me falloir un peu de temps pour démarrer. Mais j’ai une foule de générateurs génériques divers et variés qui n\'attendent que d\'être codés.';
$output.='<h2>Mise à jour Aout 2017</h2>';
$output.='Nous avons décidé de passer le site en open source, je découvre un peu donc il risque d\'y avoir des perturbations. Dans tout les cas, le github de generation-jdr est <a href="https://github.com/killmort/generation-jdr">ici</a>';
$output.='<h2>Mise à jour (Juin 2015)</h2>';
$output.='Enfin de retour!!! Et bien oui après presque 2 ans sans activité visible, je reprends du service et cette fois je ne suis pas seul, David Perchais vient me prêter main forte pour la suite. <br />
Mais que nous réserve-t-elle? <br />
Déjà la séparation d’univers, dans les Mondes Modernes vous pourrez trouver une génération de noms actuels en fonction de l\'ethnie. En med-fan, on a corrigé quelques bugs sur la génération de ville, ajouté un capital financier à celle-ci. Un petit ajout concerne également les places fortes (toujours en developpement).

<br >Le prochain projet sera des aides de générations pour les mondes Modernes ainsi que l’arrivée des Mondes Post-Apo tout en continuant a faire evoluer le med fan.
En parallèle à ça on travaille sur un nouveau design et toujours cette fameuse grosse mise à jour Med-Fan.<br />
Voilà, promis il ne faudra plus 2 ans avant une nouvelle Génération!!!';

echo $output;
?>
