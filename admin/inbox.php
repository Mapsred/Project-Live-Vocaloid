<?php $title = "Messages Reçus | Staff Project Live Vocaloid"; ?>
<?php $css = "inbox"; ?>
<?php include('layout/header.inc.php'); ?>

<?php
include('config.php')
?>

<?php

echo("<h2>Messages Reçus</h2>");
		  
if(isset($_SESSION['username'])) {

include('../layout/connexion.php');
mysql_set_charset( 'utf8' );
	
	$sql = "SELECT * FROM `contact` ORDER BY date ASC, heure ASC ";
	
	$requete = mysql_query($sql, $bdd) or die( mysql_error() ) ;
		  
    while( $result = mysql_fetch_object( $requete ) )
    {
       echo(
          "
	  
		  <div id='global-messages' align='center'>
		   
           <span class='nom'>"
		   .$result->nom."</span>
		   <span class='prenom'>"
		   .$result->prenom."</span>
		   <span class='email'> "
		  // .$result->email.
		  . '<a href="mailto:' . $result->email . '">' . $result->email . '</a>'.
		   "</span>  	
		   <span class='message'><p> "
		   .$result->message. " </p></span>
		   <span class='date'>"
		   .$result->date. " </span>
		   <span class='heure'>"
		   .$result->heure. "</span>".
		   "</div>"
           
       ) ;
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

<?php include('layout/footer.inc.php'); ?>
