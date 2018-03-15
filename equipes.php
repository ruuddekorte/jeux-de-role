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

<main class="row">
	<div class="col-lg-12 col-sm-12">
		       <h1>Créez vos équipes</h1>
			    <h2></h2>
    </div> 
    
    <div class="col-lg-1 col-sm-0"> &nbsp; </div>
    	<div class="col-lg-5 col-sm-12">	
        <div class="row"> 
       		<div class="col-lg-12"><h2>Les Héros</h2></div> 
       		<div class="col-sm-12 col-lg-12">Personnage 1 :</div>
       		<div class="col-sm-12 col-lg-5">Nom :</div>
       		<div class="col-sm-12 col-lg-5">Type :</div>
       		<div class="col-sm-12 col-lg-12">Personnage 2 :</div>
       		<div class="col-sm-12 col-lg-5">Nom :</div>
       		<div class="col-sm-12 col-lg-5">TYpe :</div>
       		<div class="col-sm-12 col-lg-12">Personnage 3 :</div>
       		<div class="col-sm-12 col-lg-5">Nom :</div>
       		<div class="col-sm-12 col-lg-5">Type :</div>
       		<div class="col-lg-12"> &nbsp; </div> 
       		<div class="col-lg-12">Tout les champs munis d'une(*) sont obligatoires</div> 
       		<div class="col-lg-12"> &nbsp; </div> 
    	</div>
	</div>
    <div class="col-lg-5 col-sm-12">	
    	<div class="row"> 
       		<div class="col-lg-12"><h2>Les Monstres</h2></div> 
       		<div class="col-sm-12 col-lg-12">Personnage 1 :</div>
       		<div class="col-sm-12 col-lg-5">Nom :</div>
       		<div class="col-sm-12 col-lg-5">Type :</div>
       		<div class="col-sm-12 col-lg-12">Personnage 2 :</div>
       		<div class="col-sm-12 col-lg-5">Nom :</div>
       		<div class="col-sm-12 col-lg-5">TYpe :</div>
       		<div class="col-sm-12 col-lg-12">Personnage 3 :</div>
       		<div class="col-sm-12 col-lg-5">Nom :</div>
       		<div class="col-sm-12 col-lg-5">Type :</div>
       		<div class="col-lg-12">  &nbsp; </div> 
       		<div class="col-lg-12 right"> <a href="combat.php"><button type="button" class="btn btn-secondary btn-lg start">[ Commencer ]</button></a>
       		</div> 
       		<div class="col-lg-12"> &nbsp; </div> 
      	</div>
    </div>
    <div class="col-lg-1 col-sm-0"> &nbsp; </div>
</main>

    <!-- Le pied de page -->
    
	<?php include("page-footer.php"); ?>


	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>

