<?php

function detailport($i){

	$detailportefaible=array(
		"sont souvent laissées sans protection.",
		"ne tiennent plus que part un gond",
		"tomberaient si un enfant venait à s'appuyer dessus",
		"ne tiennent que par habitude",
		"ne sont jamais gardées",
		"laissent passer le vent tout autant que les malfrats",
		"devaient être belles"
	);
	$detailportemoyen=array(
		"ne sont jamais laissées sans protection.",
		"ne sont jamais laissée sans protection et la milice tourne jour et nuit.",
		"sont fait de bois solide et de renfort métalique.",
		"sont renforcées et offrent une bonne protection"
	);
	$detailportehaut=array(
		"peuvent être fermées rapidement avec une herse et une porte de bois massive renforcée de métal",
		"sont en bois solide et possédent des meurtrieres",
		"se ferme magiquement sous un simple mot de commande",
		"on déjà résisté à bon nombre d'essai d'intrusion et encore personne ne les a franchit de force."
	);

if ($i==1) $sortie=$detailportefaible[rand(0,count($detailportefaible)-1)];
else if ($i==2) $sortie=$detailportemoyen[rand(0,count($detailportemoyen)-1)];
else $sortie=$detailportehaut[rand(0,count($detailportehaut)-1)];

return $sortie;

}
?>