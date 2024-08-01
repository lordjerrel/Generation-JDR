<?php 

include ('lib/compteur.php');
include ('lib/repas.php');

$output ='';
$output.='<h2>Menu du Jour</h2>';
$output.=''.creerrepas().'<br />'.'<br />';
compteur('repas');
$output.='<input type="button" value="Générer"  OnClick="window.location.href=\'index.php?page=repas\'" >'.'<br />'.'<p style="font-size:smaller"><i>Généralement les plats sont servis dans des écuelles s\'ils sont liquides sinon sur une épaisse tranche de pain que l\'on nomme tranchoir. Si vous voulez approfondir un peu le sujet du repas médiéval, en douceur, je vous suggère cet excellent article : <a href="https://portes-imaginaire.org/rubriques/enrichir-histoire/la-table-medievale/" target="_blank">La table médiévale par Laurent Gärtner</a></i></p>';
echo $output;
?>