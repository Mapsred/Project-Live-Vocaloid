<?php $title = "Inscrits à la Newsletter | Staff Project Live Vocaloid"; ?>
<?php $css = "newsletterAdmin"; ?>
<?php include('layout/header.inc.php'); ?>

<?php
include('config.php')
?>


<?php

echo("<h2>Inscrits à la newsletter</h2>");

if(isset($_SESSION['username'])) {
mysql_set_charset( 'utf8' );
	
include('../layout/connexion.php');
	$sql = "SELECT * FROM `newsletter` ORDER BY DateInscription DESC";
	
	$requete = mysql_query($sql, $bdd) or die( mysql_error() ) ;
	
		  
		  
    while( $result = mysql_fetch_object( $requete ) )
    {
       echo(
          "
	  
		  <div id='global-messages' align='center'>
		   
		   <span class='email'> "
		  . '<a href="mailto:' . $result->email . '">' . $result->email . '</a>'.
		   "</span>".
		   "<span class='date'> " . $result->DateInscription .
		   "</span>"
		   ."</div>"
           
       ) ;
    }
} else {
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

<?php include('layout/footer.inc.php'); ?>
