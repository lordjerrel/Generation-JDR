<script type="text/javascript" src="javascript/validermail.js"></script>
<?php
	$refresh_code = TRUE;
	$value = '';
	$type = 'password';
	if ( isset ($_POST['code_entre']) AND isset ($_POST['code']))
	{
		$code_entre = $_POST['code_entre'];
		?> <script> console.log(<?php echo $code_entre; ?>);</script> <?php
		$code = $_POST['code']/ 368.5;
		?> <script> console.log(<?php echo $code; ?>);</script> <?php
		if ($code_entre == NULL)
		{
			?> <script> alert('Vous n\'avez pas entré de code.');</script> <?php
		}
		elseif ($code_entre != $code)
		{?> <script> alert('Vous n\'avez pas entré le bon code.');</script> <?php
		}
		elseif ($code_entre == $code)
		{
			$refresh_code = FALSE;
			$value = 'value="' .$code. '"';
			$type = 'text';
				// set du mail pour l'admin
				$to='mathieu.bouchier@gmail.com';
				$header='From: '.$_POST['mailexp'];
				$message='Ce mail provient du site generation-jdr '. "\n" ;
				$message.=$_POST['commentaires']."\n".$_POST['mailexp'];
				$subject=$_POST['sujet'];
				
				mail($to,$subject,$message,$header);
				
				?> <script> alert('Votre message a bien été envoyé');</script> 		
				<script language="javascript" type="text/javascript">
							
							window.location.replace("index.php?page=accueil");
							
							</script><?php
		// }
		}
	}
	
	if ( $refresh_code === TRUE )
	{
		$code = rand('100000', '999999');
		header ('Content-type: image/png');
		$image = imagecreate('56', '20');
		$noir = imagecolorallocate($image, '0', '0', '0');
		$blanc = imagecolorallocate($image, '255', '255', '255');
		imagestring($image, '4', '4', '2', $code, $blanc);
		imagepng($image, 'code.png');
		header ('Content-type: text/html');
		$code = $code * 368.5;
	}
	

$output='';

$output.='<div style="border-radius : 6px; padding : 20px; background-image: repeating-linear-gradient(135deg, #83b3db 0px, #83b3db 30px, transparent 30px, transparent 50px, #83b3db 50px, #84ADCB 80px, transparent 80px, transparent 100px);"><div style="border-radius : 6px; background : white; padding : 5px;"><h2>Nous contacter</h2>';
$output.='Une remarque? Un conseil? Un avis? Un bug? N\'hésitez pas, envoyez nous un petit mail';
$output.='<table><form method="post" onsubmit="return validInscription();" action="index.php?page=contact">';
$output.='<tr><td>Sujet:</td><br /><td><input type="text" size="40" name="sujet" value="" required/></td></tr>';
$output.='<tr><td>Votre mail :</td><br /><td><input type="email" size="40" id="mailexp" name="mailexp" value="" required/></td></tr>';
$output.='<tr><td colspan="2">Commentaires:<br /><textarea cols="66" rows="6" name="commentaires" required></textarea></td></tr>';
$output.='<tr style="text-align: center;"><form method="post" action=""><td style="margin: 0 auto;"><img src="code.png" title="Code" alt="Code"/> 
		<input type="'.$type.'" name="code_entre" id="code_entre" size="12" maxlength="6" placeholder="Entrez le code" '.$value.' /></td>
		<td><input type="submit" name="submit" value="Envoyer"/><input type="reset" value="Annuler"/></td></tr><input name="code" id="code" type="hidden" value="'.$code.'"/>
	</form></table></form></div></div>';

echo $output;
?>