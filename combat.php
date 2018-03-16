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

	<main class="row">
	    <div class="col-lg-12 col-sm-12 banner img-combat"></div>
	    <section id="body-content">

			<h1>Le Déroulement du combat!</h1>
		       	<p><button type="button" class="btn btn"> Action 1</button><strong>
		       	Gandalf attaque Sarouman</strong></p>
		       	<h5>Coup porté : 25</h5>
       
		            <div class="row"> 
		           		
		  <dir class="row"><div class="col-lg-6 col-sm-12">
		           		<div class="col-sm-12 col-lg-12">Héros :</div>
		            
		           		<div class="col-sm-12 col-lg-6">Nom :<br /></div>
		           		<div class="col-sm-4 col-lg-2">Type :<br /></div>
		                <div class="col-sm-4 col-lg-2">Niveau :<br /></div>
		           		<div class="col-sm-4 col-lg-2">Vie :<br /></div>

		           		<div class="col-sm-12 col-lg-6">Gandalf :<br /></div>
		           		<div class="col-sm-4 col-lg-2">Magicien :<br /></div>
		                <div class="col-sm-4 col-lg-2">2 :<br /></div>
		           		<div class="col-sm-4 col-lg-2">100% :<br /></div>

		           		<div class="col-sm-12 col-lg-6">Gimil :<br /></div>
		           		<div class="col-sm-4 col-lg-2">Nain :<br /></div>
		                <div class="col-sm-4 col-lg-2">1 :<br /></div>
		           		<div class="col-sm-4 col-lg-2">100% :<br /></div>

		                <div class="col-sm-12 col-lg-6">Lagolas :<br /></div>
		           		<div class="col-sm-4 col-lg-2">Elfe :<br /></div>
		                <div class="col-sm-4 col-lg-2">1 :<br /></div>
		           		<div class="col-sm-4 col-lg-2">100% :<br /></div>
		           		<div class="col-lg-12"> &nbsp; </div>
		           		<div class="col-lg-12"> &nbsp; </div>

		  </dir>
		  <div class="col-lg-6 col-sm-12">
				    
				    
				       	<div class="col-sm-12 col-lg-12">Monstres :</div>
		            	
		           		<div class="col-sm-12 col-lg-6">Nom :<br /></div>
		           		<div class="col-sm-4 col-lg-2">Type :<br /></div>
		                <div class="col-sm-4 col-lg-2">Niveau :<br /></div>
		           		<div class="col-sm-4 col-lg-2">Vie :<br /></div>

		           		<div class="col-sm-12 col-lg-6">Sarouman <br /></div>
		           		<div class="col-sm-4 col-lg-2">Magicien <br /></div>
		                <div class="col-sm-4 col-lg-2">1 :<br /></div>
		           		<div class="col-sm-4 col-lg-2">100% :<br /></div>

		           		<div class="col-sm-12 col-lg-6">Sauran <br /></div>
		           		<div class="col-sm-4 col-lg-2">Bigboss <br /></div>
		                <div class="col-sm-4 col-lg-2">1 :<br /></div>
		           		<div class="col-sm-4 col-lg-2">100% <br /></div>

		           		<div class="col-sm-12 col-lg-6">Rougerrabbit <br /></div>
		           		<div class="col-sm-4 col-lg-2">Lapin <br /></div>
		                <div class="col-sm-4 col-lg-2">1 <br /></div>
		           		<div class="col-sm-4 col-lg-2">100% <br /></div>
		           	</div>
		        </div>
		  		  <div class="col-lg-6 col-sm-12">

		           		<p><button type="button" class="btn btn"> Action 2</button><strong>
				        Sarouman attaque Gandalf</strong></p>
				       	<h5>Coup porté : 25</h5>
				       </div>
				       		  <div class="col-lg-6 col-sm-12">

		           		<p><button type="button" class="btn btn"> Action 2</button><strong>
				        Sarouman attaque Gandalf</strong></p>
				       	<h5>Coup porté : 25</h5>
				       	<p><button type="button" class="btn btn"> Action 2</button><strong>
				         Gandalf attaque Sarouman</strong><button type="button" class="btn btn">Sarouman Meurt</button></p>
				       	<h5>Coup porté : 25</h5>
				    </div>
											    


				       	<p><button type="button" class="btn btn"> Action 2</button><strong>
				         Gandalf attaque Sarouman</strong><button type="button" class="btn btn">Sarouman Meurt</button></p>
				       	<h5>Coup porté : 25</h5>
				    
				    



		    <h1>Fin de combat</h1>
		    <div></div>
		    <h1> Victoir !<br/> L'ennemi est vaincu .</h1>
		 </section>


<!-- 
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
L’ennemi est vaincu. -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In blandit
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
neque.</p>

		  

	    
	</main>

    <!-- Le pied de page -->
    
	<?php include("includes/page-footer.php"); ?>


	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>

