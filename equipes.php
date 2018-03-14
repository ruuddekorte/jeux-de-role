<?php
		// index.php -- > creation equipes.php -- > déroulement combat.php 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>héros et monstres - déroulement du combat</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> <!-- v 4  -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> <!-- v 4.7  -->
	<link href="https://fonts.googleapis.com/css?family=Mina" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	
	<?php include("page-header.php"); ?>
	<?php include("page-menu.php"); ?>     <!-- temporary for testing links and interaction -->
    
    <!-- Le corps de page -->

	<main>
	    <section id="body-content">

			<h1>Le choc des Simploniens !</h1>
		        
		    <pre>
                    	Créez vos équipes

    Les héros                                          Les monstres

    Personnage 1 :                                     Personnage 1 :
    Nom * :              Type * :                      Nom * :              Type * :

    Personnage 2 :                                     Personnage 2 :
    Nom * :              Type * :                      Nom * :              Type * :

    Personnage 3 :                                     Personnage 3 :
    Nom * :              Type * :                      Nom * :              Type * :

    Tous les champs munis d’une * sont obligatoires

                                                                         [Commencer]	

    	     </pre>

	    </section>
	</main>

    <!-- Le pied de page -->
    
	<?php include("page-footer.php"); ?>


	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>

