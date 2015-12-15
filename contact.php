<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact - Project Live Vocaloid</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">  

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<?php include('layout/stylesheet.php') ?>    

    <!--[if lt IE 8]>
        <link href="scripts/icons/general/stylesheets/general_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
        <link href="scripts/icons/social/stylesheets/social_foundicons_ie7.css" media="screen" rel="stylesheet" type="text/css" />
    <![endif]-->
    <!--[if IE 7]>
        <link rel="stylesheet" href="scripts/fontawesome/css/font-awesome-ie7.min.css">
    <![endif]-->

</head>
<body id="pageBody">

<div id="decorative2">
    <div class="container">
	<?php include('layout/header.php') ?>    
    </div>
</div>

<div id="contentOuterSeparator"></div>

<div class="container">

    <div class="divPanel page-content">

        <div class="breadcrumbs">
                <a href="./">Accueil</a> &nbsp;/&nbsp; <span>Contact</span>
            </div> 

        <div class="row-fluid">
                <div class="span8" id="divMain">

                    <h1>Nous contacter</h1>
					<hr>
			<!--Start Contact form -->		  
	<?php include ('contactVerif.php'); ?>                                              
<form name="enq" method="post" action="contact.php" onsubmit="return validation(this);">
  <fieldset>
    
	<input type="text" name="nom" id="nom" value="<?php if(isset($_POST['nom'])) echo $_POST['nom'];?>"  class="input-block-level" placeholder="Nom" />
	<input type="text" name="prenom" id="prenom" value="<?php if(isset($_POST['prenom'])) echo $_POST['prenom'];?>"  class="input-block-level" placeholder="Prenom" />
    <input type="text" name="email" id="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'];?>" class="input-block-level" placeholder="Email" />
    <textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Commentaire"></textarea>
    <div class="actions">
      <div class="champ">
      <input type="text" name="captcha" id="captcha" size="10" maxlength="6" placeholder="Captcha" />
            &nbsp;<img src="captcha.php" alt="captcha" align="absmiddle" />&nbsp;
      <?php if($captchaError != $_SESSION["captcha"]) { echo $captchaError; } ?>
      </div>
                <input type="hidden" name="submitted" id="submitted" value="true" />
	<input type="submit" value="Envoyez votre message" name="submit" id="submitButton" class="btn btn-info pull-right" title="Site fermé, envoi de messages désactivé" disabled/>
	</div>
    
	</fieldset>
	<script type="text/javascript">
    function validation(f) {
        var ok = 0;
        var ko = 0;
      if (f.password.value == '' || f.password2.value == '') {
        alert('Tous les champs ne sont pas remplis');
        f.password.focus();
        return false;
        }
      else if (f.password.value != f.password2.value) {
        alert('Veuillez entrer le même mot de passe!');
        f.password.focus();
        return false;
        }
      else if (f.password.value == f.password2.value) {
        return true;
        }				
      }
    </script>
</form>  				 
			<!--End Contact form -->											 
                </div>
				
			<!--Edit Sidebar Content here-->
                <div class="span4 sidebar">

                    <div class="sidebox">
					 <!-- Start Side Categories -->
        <h4 class="sidebox-title">Project Live Vocaloid</h4>
        <ul>
          <li><a href="./">Accueil</a></li>
          <li><a href="vocaloid-qu-est-ce-donc.php">Vocaloid ? Qu'est-ce donc ?</a></li>
          <li><a href="membres.php">Devenir Membre</a></li>
          <li><a href="#">Evènements</a></li>
        </ul>
					<!-- End Side Categories -->

                    </div>



                </div>
			<!--/End Sidebar Content-->
				
				
            </div>			

        <div id="footerInnerSeparator"></div>
    </div>

</div>

<div id="footerOuterSeparator"></div>

			<?php include('layout/footer.php') ?>					

			<?php include('layout/javascript.php') ?>					


</body>
</html>