<!DOCTYPE html> 
<html lang="fr">

<head>
<meta charset="utf-8">
<title><?php echo $title?></title>
<meta name="description" content="Project Live Vocaloid - Une association pour organiser des concerts Vocaloid en France">
<meta name="robots" content="all, noodp, noydir" />
<link href="../admin/css/<?php echo $css?>.css" rel="stylesheet">
<link href="../admin/css/nav_bar_menu.css" rel="stylesheet">
<link href="../admin/css/fonts.css" rel="stylesheet">
<link href="../admin/css/general_container_footer.css" rel="stylesheet">
<link rel="icon" href="../admin/images/favicon.png">

</head>
<!--<script type="text/javascript" src="js/test-custom-search.js"></script>-->
<body>

<?php
include('config.php')
?>

<div id="top-bar">
	<div class="all-nav-content">
 
        <!--Avertissement-->
        <div id="cont_avert">
            <p class="title_avert">Toutes les informations présentes dans cette partie du site sont confidentielles et ne doivent en aucun cas être divulguées.</p>
        </div>
	
    </div>
</div>

<!--- Logo -->

<div id="cont-logo-follow">

<a href="http://project-live-vocaloid.fr/admin/index.php"><div id="logo"></div></a>

    <div class="name-content">
        <p><a href="http://www.project-live-vocaloid.fr/" class="revenir">Revenir à la version normale du site</a></p>
        </div>
 </div>           

<!-- ici commence mon container-->

<div id="container">

<div id="menu">
    <ul id="menu1">
        <li><a href="../admin/index.php">Accueil</a></li>
        <li><a href="../admin/inbox.php">Messages reçus</a></li>
        <li><a href="../admin/newsletter.php">Newsletter</a></li>
        <li class="membre"><a href="membre.php">Liste des membres</a></li>
		<li class="adherents"><a href="adherents.php">Liste des adhérents</a></li>
        <li><a href="../admin/connexion.php">
		  <?php 
            if(isset($_SESSION['username'])) {
              echo("Se déconnecter");	
          }else {
              echo("se connecter");	
          }
          
          ?>
        </a></li>
        
    </ul>
</div> 
