<script type="text/javascript" src="javascript/valider.js"></script>
<script type="text/javascript" src="javascript/verifint.js"></script>
<?php
include ('lib/compteur.php');
include ('lib/chateau.php');
include ('lib/lieudit.php');
	
	$output='';
	$j=0;
	$k=100;
	while(rand(1,100)<$k) {
			if ($j==0) {
				$output.=creerlieudit(0).' est  ';
				$output.=creerchateau(rand(1,8));
				$output.='<br>Et on y retrouve : <br>';
			}
				$output.='-'.creeraddonmili().'.<br>';
				$j++;
				$k=$k-20;
	}
echo $output;

?>

