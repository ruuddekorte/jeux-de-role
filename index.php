<?php
		// index.php -- > creation equipes.php -- > déroulement combat.php 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<title>héros et monstres - page d'accueil</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> <!-- v 4  -->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css"> <!-- v 4.7  -->
	<link href="https://fonts.googleapis.com/css?family=Mina" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>
<body>

	<?php include("includes/page-header.php"); ?>
    
    <!-- Le corps de page -->

	<main class="row welcome-image">
		<div class="col-lg-1">&nbsp;</div>
		<div class="col-lg-10">
				<div class="col-lg-12 high-80">&nbsp;</div>
				<div class="col-lg-12">
					<section class="welcome-screen">

						<h1>Le choc des Simploniens !</h1>
					        <h1>&nbsp;</h1>
					    <h2><a href="equipes.php"><button type="button" class="btn btn-secondary btn-lg start"> [ Commencer le combat ] </button></a></h2>

				    </section>
				</div>
				<div class="col-lg-12 high-80">&nbsp;</div>
	    </div>
	    <div class="col-lg-1">&nbsp;</div>
		
	</main>

    <!-- Le pied de page -->
    
	<?php include("includes/page-footer.php"); ?>

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>

