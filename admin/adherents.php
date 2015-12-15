<?php $title = "Liste des adhérents | Project Live Vocaloid"; ?>
<?php $css = "tableau"; ?>
<?php include('layout/header.inc.php'); ?>

<?php
include('config.php')
?>


<div class="contenu">
<link rel="stylesheet" href="css/tableau.css" type="text/css"/>

<h4> Nos adhérents<span style="color: red;">*</span></h4>

<?php
if(isset($_SESSION['username'])) {
  header( 'content-type: text/html; charset=utf-8' );
  
  include('../layout/connexion.php');
  mysql_set_charset( 'utf8' );
  
  $sql = "Select * From adherents Order by ID DESC";
  
  $requete = mysql_query($sql, $bdd) or die( mysql_error() ) ;
  
  while($ligne = mysql_fetch_array($requete))
  {	extract($ligne);
  
    if ($i%2 == 1){
	 $styleTab = "titre";
	  $styleTab2 = "titre2";
	   $styleTab3 = "titre3";
  }else{
    $styleTab = "titre10";
	  $styleTab2 = "titre11";
	   $styleTab3 = "titre12";
  }
	  echo("
  <table class='ligne1'>	
		  <tr class='$styleTab'>
			  <td class='title-adhesion'>Date d'adhésion</td>
			  <td class='title-prenom'>Prénom</td>
			  <td class='title-nom'>Nom</td>
			  <td class='title-sexe'>Sexe</td>
			  <td class='title-birth'>Date de naissance</td>
			  <td class='title-dptreg'>Département/Région</td>
			  <td class='title-ville'>Ville</td>
		  </tr>
		  <tr class='details'>
			  <td class='adhesion'>$date_adhesion</td>
			  <td class='prenom'>$prenom</td>			
			  <td class='nom'>$nom</td>
			  <td class='sexe'>$sexe</td>
			  <td class='birth'>$birth</td>
			  <td class='dptreg'>$dptreg</td>
			  <td class='ville'>$ville</td>
		  </tr>
  </table>	
  <table class='ligne2'>	
		  <tr class='$styleTab2'>
			  <td class='title-pseudo'>Pseudo</td>
			  <td class='title-email'>Email</td>
			  <td class='title-website'>Site Web</td>
		  </tr>
  
		  <tr class='details2'>
			  <td class='pseudo'>$pseudo</td>	
			  <td class='email'>" . '<a href="mailto:' . $email. '">' . $email. '</a>'. "</td>	
			  <td class='website'>" . '<a href="  http://'. $website .'  ">' . $website. '</a>'. "</td>			
		  </tr>		
  </table>	
  <table class='ligne3'>	
		  <tr class='$styleTab3'>
			  <td class='title-internet'>Activité Web</td>
			  <td class='title-pourquoi'>Pourquoi PLV</td>
			  <td class='title-comment'>Comment</td>
			  <td class='title-commentplv'>Comment PLV</td>
		  </tr>		
	  
		  <tr class='details3'>
			  <td class='internet'>$internet</td>
			  <td class='pourquoi'>$pourquoi</td>
			  <td class='comment'>$comment</td>
			  <td class='commentplv'>$commentplv</td>	
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

<p class="legende" style="font-style:italic; margin-left: 35px; margin-bottom: 25px;"><span style="color: red;">*</span>&nbsp;Les adhérents sont les personnes cotisant pour l'association. Ils aideront en cas de gros projet et pourront assister aux événements, et bénéficieront d'avantages (news en avant première, par exemple).</p>

</div>

<?php include('layout/footer.inc.php'); ?>
