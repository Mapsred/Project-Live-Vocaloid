<?php $title = "Administration | Staff Project Live Vocaloid"; ?>
<?php include('layout/header.inc.php'); ?>
<link href='css/home-admin.css' rel='stylesheet' type='text/css'>

<?php
include('config.php')
?>

<?php
if(isset($_SESSION['username'])) {
	echo("<link href='css/admin-connecte.css' rel='stylesheet' type='text/css'>	");
}else {
	echo("<link href='css/admin-deconnecte.css' rel='stylesheet' type='text/css'>");
}
?>

<h2 class='titre'>Administration</h2>

<?php
if(isset($_SESSION['username'])) {
	echo("<p class='bienvenue'>Bonjour <span style='color: #4463B1; font-weight: bolder;'> ".$_SESSION['username'].'</span>, bienvenue sur la partie administration du site ! </p>');
	
	echo("<p class='message'>Tu es ici dans la partie réservée aux membres du staff. <br>
Tu pourras y voir différentes informations comme les membres incrits, les messages reçus, les personnes ayant souscrit à la newsletter ou encore la liste des membres et des adhérents.</p>");

}else {
}
?>




<?php
//Si lutilisateur est connecte, on lui donne un lien pour modifier ses informations, pour voir ses messages et un pour se deconnecter
if(isset($_SESSION['username']))
{
?>
<div id="btndeco"><a href="connexion.php" class='deco'>Se d&eacute;connecter</a></div>
<?php
}
else
{
//Sinon, on lui donne un lien pour sinscrire et un autre pour se connecter
?>
<div id="btnconnect"><p class="message"><a href="connexion.php" class='connect'>Connectez vous</a> pour avoir accès aux informations de l'association.</p></div>
<?php
}
?>

<?php include('layout/footer.inc.php'); ?>