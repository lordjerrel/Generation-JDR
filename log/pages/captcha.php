<?php

session_start();

$_SESSION['captcha'] = rand('100000', '999999'));
$img = imagecreatetruecolor(70,30);
$fill_color = imagecolorallocate($img,230,230,230);
imagefilledrectangle($img,0,0,70,30,$fill_color);
$text_color = imagecolorallocate($img, 10,10,10);
imagettftext($img,23,0,5,30,$text_color,$font,$_SESSION['captcha']);

header("Content-type:image/jpeg");
imagejpeg($img);
imagedestroy($img);


?>
