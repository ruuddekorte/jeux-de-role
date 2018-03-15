<?php
		// index.php -- > creation equipes.php -- > déroulement combat.php 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>héros et monstres - creation d'équipes</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> <!-- v 4  -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> <!-- v 4.7  -->
	<link href="https://fonts.googleapis.com/css?family=Mina" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
	
	<?php include("includes/page-header.php"); ?>
	<?php include("includes/page-menu.php"); ?>     <!-- temporary for testing links and interaction -->
    
    <!-- Le corps de page -->

	<main>
	    <section id="body-content">

			<h1>Le choc des Simploniens !</h1>
		        
		    <pre>
Déroulé du combat
A CTION 1
Gandalf attaque Sarouman
Coup porté : 25
Héros :
Monstres :
Nom Type Niveau Vie Nom Type Niveau Vie
Gandalf Magicien 2 100% Sarouman Magicien 1 50%
Gimli Nain 1 100% Sauron Big boss 1 100%
Legolas Elfe 1 100% Roger rabbit Lapin 1 100%
A CTION 2 Sarouman attaque Gandalf
A CTION 2 Gandalf attaque Sarouman
S AROUMAN MEURT
Fin du combat
Victoire !
L’ennemi est vaincu.
Lorem ipsum dolor sit amet, consectetur adipiscing elit. In blandit
molestie dolor at euismod. Donec quis nisi ut ipsum ultricies
molestie. Integer vitae leo lobortis, ullamcorper odio id, tristique elit.
Suspendisse pharetra metus in est venenatis, eu mattis magna
tempor. Vestibulum urna purus, pharetra quis vestibulum non,
molestie et odio. Maecenas risus libero, aliquam vel dolor sit amet,
tristique lacinia quam. Donec eleifend justo nulla, vitae tempor ante
convallis id. Pellentesque scelerisque vel leo sit amet convallis. Fusce
vehicula bibendum mollis. Sed rhoncus lectus nec eros iaculis, sed
viverra mi condimentum. Vestibulum dui dui, lobortis non est
tristique, dignissim iaculis eros. Etiam vitae porttitor metus. Donec ac
nunc odio. Suspendisse potenti. Maecenas elementum, orci at
lobortis ornare, enim dui pulvinar lectus, a blandit mauris enim
efficitur sapien. Donec ex turpis, egestas et sodales vel, faucibus ac
neque.

		     </pre>

	    </section>
	</main>

    <!-- Le pied de page -->
    
	<?php include("includes/page-footer.php"); ?>


	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>

