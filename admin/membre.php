<?php $title = "Liste des membres | Staff Project Live Vocaloid"; ?>
<?php $css = "membre"; ?>
<?php include('layout/header.inc.php'); ?>

<?php
include('config.php')
?>

<div class="contenu">
<link rel="stylesheet" href="css/tableau.css" type="text/css"/>

<h4> Membres du Staff<span style="color: red;">*</span></h4>

<?php
if(isset($_SESSION['username'])) {
  header( 'content-type: text/html; charset=utf-8' );
  
  include('../layout/connexion.php');
  mysql_set_charset( 'utf8' );
  
  $sql = "Select * From membres Order by ID";
  
  $requete = mysql_query($sql, $bdd) or die( mysql_error() ) ;
  
  $i = 0;
  while($ligne = mysql_fetch_array($requete))
  {	extract($ligne);
  
  if ($i%2 == 1){
	 $styleTab = "titre";
	  $styleTab2 = "titre2";
  }else{
    $styleTab = "titre10";
	  $styleTab2 = "titre11";
  }
	  echo("
  <table class='ligne1'>	
		  <tr class='$styleTab'>
			  <td class='title-prenom'>Prénom</td>
			  <td class='title-nom'>Nom</td>
			  <td class='title-cp'>Code Postal</td>
			  <td class='title-ville'>Ville</td>
		  </tr>
		  <tr class='details'>
			  <td class='prenom'>$prenom</td>			
			  <td class='nom'>$nom</td>
			  <td class='cp'>$CodePostal</td>
			  <td class='ville'>$Ville</td>
		  </tr>
  </table>	
  <table class='ligne2'>	
		  <tr class='$styleTab2'>
		  	  <td class='title-adresse'>Adresse</td>
			  <td class='title-telephone'>Téléphone</td>
			  <td class='title-statut'>Statut</td>
			  <td class='title-email'>Email</td>
			  <td class='title-website'>Site Web</td>
		  </tr>
  
		  <tr class='details2'>
		 	  <td class='adresse'>$adresse</td>
			  <td class='telephone'>$telephone</td>
			  <td class='statut'>$statut</td>
			  <td class='email'>" . '<a href="mailto:' . $email. '">' . $email. '</a>'. "</td>	
			  <td class='website'>" . '<a href="  http://'. $website .'  ">' . $website. '</a>'. "</td>			
		  </tr>		
  </table>	
  
  <br/><hr style='width: 920px; height: 2px; background-color: #EA3556; color: #EA3556; border: none;'><br/>	
  ");
	$i++;	  
  }
}else {
	echo("<p class='message'>Vous devez être connecté pour pouvoir voir le contenu de cette page</p>
	
	<style type='text/css'>

	.message {
		text-align: center;
		color: red;
		width: 500px;
		margin: 20px auto;
	}

	</style>
	
	");	
}

?>

<p class="legende" style="font-style:italic; margin-left: 35px; margin-bottom: 25px;padding-right: 30px;"><span style="color: red;">*</span>&nbsp;Les membres peuvent être considérés comme le "staff permanent" de l'association: ce sont les membres fondateurs faisant partie du "bureau", et qui s'occupent de toutes les démarches aussi bien administratives que web.</p>

</div>

<?php include('layout/footer.inc.php'); ?>








