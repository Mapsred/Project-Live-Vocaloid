<?php
session_start();

function nombre($n)
{
    return str_pad(mt_rand(0,pow(10,$n)-1),$n,'0',STR_PAD_LEFT);
}

function image($mot)
{
	$largeur = 60;
	$hauteur = 20;
	$img = @imagecreatefromjpeg("images/captcha.jpg"); 
	$blanc = imagecolorallocate($img, 255, 255, 255); 
	$noir = imagecolorallocate($img, 0, 0, 0);
	$milieuHauteur = ($hauteur / 2) - 8;
	imagestring($img, 6, strlen($mot) /2 , $milieuHauteur, $mot, $noir);
	imagerectangle($img, 1, 1, $largeur - 1, $hauteur - 1, $noir); // La bordure

	imagepng($img);
	imagedestroy($img);
	
}

function captcha()
{
	$mot = nombre(5);
	$_SESSION['captcha'] = $mot;
	image($mot);
}

header("Content-type: image/png");
captcha();
?>

