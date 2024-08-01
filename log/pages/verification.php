<?php 

session_start();

$nom = utf8_decode($_POST['nom']);
$mail = ($_POST['email']);
$subject = utf8_decode($_POST['sujet']);
$message = utf8_decode($_POST['message']);
$headers = 'From: '.$nom.'<'.$mail.'>'."\r\n";
$headers .= 'Reply-to: <'.$mail.'>'."\r\n";

$to = 'mathieu.bouchier@hotmail.fr';

if($_POST['captcha']==$_SESSION['captcha']){
mail($to, $subject, $message, $headers);
echo 'Votre message à été envoyé';	
	
}else{
echo 'Le captcha entré est invalide. <a href="index.php?page=contact1.php">Recommencez</a>';	
	
}



?>