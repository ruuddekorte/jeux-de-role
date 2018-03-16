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
    
    <!-- Le corps de page -->

	<main class="row main-fond-vert">
	    <div class="col-lg-12 col-sm-12 banner img-combat"></div>
	    


		<div class="col-lg-1 col-sm-0"> &nbsp; </div>
		<div class="col-lg-10 col-sm-12">
	    
		    <section id="body-content">

				<h1>Le Déroulement du combat!</h1>

					<div id="accordion">
					  <div class="card">
					    <div class="card-header" id="headingOne">

					         <p><button type="button" class="btn btn btn-contour"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Action 1</button><strong>
			       	Gandalf</strong> attaque <strong>Sarouman</strong></p>


					    </div>

					    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
					      <div class="card-body">


			       	<h5>Coup porté : <strong>25</strong></h5>
	                <div class="row"> 
				  	  	<div class="col-lg-6 col-sm-12">       		
			  				<div class="row">
				           		<div class="col-sm-12 col-lg-12">Héros :</div>
				            
				           		<div class="col-sm-12 col-lg-6"><strong>Nom</strong></div>
				           		<div class="col-sm-4 col-lg-2"><strong>Type</strong></div>
				                <div class="col-sm-4 col-lg-2"><strong>Niveau</strong></div>
				           		<div class="col-sm-4 col-lg-2"><strong>Vie</strong></div>

				           		<div class="col-sm-12 col-lg-6">Gandalf</div>
				           		<div class="col-sm-4 col-lg-2">Magicien</div>
				                <div class="col-sm-4 col-lg-2">2</div>
				           		<div class="col-sm-4 col-lg-2">100%</div>

				           		<div class="col-sm-12 col-lg-6">Gimil</div>
				           		<div class="col-sm-4 col-lg-2">Nain</div>
				                <div class="col-sm-4 col-lg-2">1</div>
				           		<div class="col-sm-4 col-lg-2">100%</div>

				                <div class="col-sm-12 col-lg-6">Lagolas</div>
				           		<div class="col-sm-4 col-lg-2">Elfe</div>
				                <div class="col-sm-4 col-lg-2">1</div>
				           		<div class="col-sm-4 col-lg-2">100%</div>
				           		<div class="col-lg-12"> &nbsp; </div>
				           		<div class="col-lg-12"> &nbsp; </div>
				           	</div>
				        </div>
					<div class="col-lg-6 col-sm-12">
					    <div class="row">
		
					       	<div class="col-sm-12 col-lg-12">Monstres :</div>
			            	
			           		<div class="col-sm-12 col-lg-6"><strong>Nom</strong></div>
			           		<div class="col-sm-4 col-lg-2"><strong>Type</strong></div>
			                <div class="col-sm-4 col-lg-2"><strong>Niveau</strong></div>
			           		<div class="col-sm-4 col-lg-2"><strong>Vie</strong></div>

			           		<div class="col-sm-12 col-lg-6">Sarouman </div>
			           		<div class="col-sm-4 col-lg-2">Magicien </div>
			                <div class="col-sm-4 col-lg-2">1</div>
			           		<div class="col-sm-4 col-lg-2">100%</div>

			           		<div class="col-sm-12 col-lg-6">Sauran </div>
			           		<div class="col-sm-4 col-lg-2">Bigboss </div>
			                <div class="col-sm-4 col-lg-2">1</div>
			           		<div class="col-sm-4 col-lg-2">100% </div>

			           		<div class="col-sm-12 col-lg-6">Rougerrabbit </div>
			           		<div class="col-sm-4 col-lg-2">Lapin </div>
			                <div class="col-sm-4 col-lg-2">1 </div>
			           		<div class="col-sm-4 col-lg-2">100% </div>
			           	</div>
			        </div>
		    	</div>
					    </div>
					  </div>
					  <div class="card">
					    <div class="card-header" id="headingTwo">
					      <p><button type="button" class="btn btn btn-contour collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo""> Action 2 </button> <strong>Sarouman</strong> attaque <strong>Gandalf</strong></p>
					    </div>
					    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
					      <div class="card-body">

			       	<h5>Coup porté : <strong>25</strong></h5>
	                <div class="row"> 
				  	  	<div class="col-lg-6 col-sm-12">       		
			  				<div class="row">
				           		<div class="col-sm-12 col-lg-12">Héros :</div>
				            
				           		<div class="col-sm-12 col-lg-6"><strong>Nom</strong></div>
				           		<div class="col-sm-4 col-lg-2"><strong>Type</strong></div>
				                <div class="col-sm-4 col-lg-2"><strong>Niveau</strong></div>
				           		<div class="col-sm-4 col-lg-2"><strong>Vie</strong></div>

				           		<div class="col-sm-12 col-lg-6">Gandalf</div>
				           		<div class="col-sm-4 col-lg-2">Magicien</div>
				                <div class="col-sm-4 col-lg-2">2</div>
				           		<div class="col-sm-4 col-lg-2">100%</div>

				           		<div class="col-sm-12 col-lg-6">Gimil</div>
				           		<div class="col-sm-4 col-lg-2">Nain</div>
				                <div class="col-sm-4 col-lg-2">1</div>
				           		<div class="col-sm-4 col-lg-2">100%</div>

				                <div class="col-sm-12 col-lg-6">Lagolas</div>
				           		<div class="col-sm-4 col-lg-2">Elfe</div>
				                <div class="col-sm-4 col-lg-2">1</div>
				           		<div class="col-sm-4 col-lg-2">100%</div>
				           		<div class="col-lg-12"> &nbsp; </div>
				           		<div class="col-lg-12"> &nbsp; </div>
				           	</div>
				        </div>
					<div class="col-lg-6 col-sm-12">
					    <div class="row">
		
					       	<div class="col-sm-12 col-lg-12">Monstres :</div>
			            	
			           		<div class="col-sm-12 col-lg-6"><strong>Nom</strong></div>
			           		<div class="col-sm-4 col-lg-2"><strong>Type</strong></div>
			                <div class="col-sm-4 col-lg-2"><strong>Niveau</strong></div>
			           		<div class="col-sm-4 col-lg-2"><strong>Vie</strong></div>

			           		<div class="col-sm-12 col-lg-6">Sarouman </div>
			           		<div class="col-sm-4 col-lg-2">Magicien </div>
			                <div class="col-sm-4 col-lg-2">1</div>
			           		<div class="col-sm-4 col-lg-2">100%</div>

			           		<div class="col-sm-12 col-lg-6">Sauran </div>
			           		<div class="col-sm-4 col-lg-2">Bigboss </div>
			                <div class="col-sm-4 col-lg-2">1</div>
			           		<div class="col-sm-4 col-lg-2">100% </div>

			           		<div class="col-sm-12 col-lg-6">Rougerrabbit </div>
			           		<div class="col-sm-4 col-lg-2">Lapin </div>
			                <div class="col-sm-4 col-lg-2">1 </div>
			           		<div class="col-sm-4 col-lg-2">100% </div>
			           	</div>
			        </div>
		    	</div>



	
					      </div>

					    </div>
					  </div>
					  <div class="card">
					    <div class="card-header" id="headingThree">
						       	<p><button type="button" class="btn btn btn-contour collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Action 3 </button> <strong>Gandalf</strong> attaque <strong>Sarouman</strong></p>
					    </div>
					    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
					      <div class="card-body">
	



			       	<h5>Coup porté : <strong>25</strong></h5>
	                <div class="row"> 
				  	  	<div class="col-lg-6 col-sm-12">       		
			  				<div class="row">
				           		<div class="col-sm-12 col-lg-12">Héros :</div>
				            
				           		<div class="col-sm-12 col-lg-6"><strong>Nom</strong></div>
				           		<div class="col-sm-4 col-lg-2"><strong>Type</strong></div>
				                <div class="col-sm-4 col-lg-2"><strong>Niveau</strong></div>
				           		<div class="col-sm-4 col-lg-2"><strong>Vie</strong></div>

				           		<div class="col-sm-12 col-lg-6">Gandalf</div>
				           		<div class="col-sm-4 col-lg-2">Magicien</div>
				                <div class="col-sm-4 col-lg-2">2</div>
				           		<div class="col-sm-4 col-lg-2">100%</div>

				           		<div class="col-sm-12 col-lg-6">Gimil</div>
				           		<div class="col-sm-4 col-lg-2">Nain</div>
				                <div class="col-sm-4 col-lg-2">1</div>
				           		<div class="col-sm-4 col-lg-2">100%</div>

				                <div class="col-sm-12 col-lg-6">Lagolas</div>
				           		<div class="col-sm-4 col-lg-2">Elfe</div>
				                <div class="col-sm-4 col-lg-2">1</div>
				           		<div class="col-sm-4 col-lg-2">100%</div>
				           		<div class="col-lg-12"> &nbsp; </div>
				           		<div class="col-lg-12"> &nbsp; </div>
				           	</div>
				        </div>
					<div class="col-lg-6 col-sm-12">
					    <div class="row">
		
					       	<div class="col-sm-12 col-lg-12">Monstres :</div>
			            	
			           		<div class="col-sm-12 col-lg-6"><strong>Nom</strong></div>
			           		<div class="col-sm-4 col-lg-2"><strong>Type</strong></div>
			                <div class="col-sm-4 col-lg-2"><strong>Niveau</strong></div>
			           		<div class="col-sm-4 col-lg-2"><strong>Vie</strong></div>

			           		<div class="col-sm-12 col-lg-6">Sarouman </div>
			           		<div class="col-sm-4 col-lg-2">Magicien </div>
			                <div class="col-sm-4 col-lg-2">1</div>
			           		<div class="col-sm-4 col-lg-2">100%</div>

			           		<div class="col-sm-12 col-lg-6">Sauran </div>
			           		<div class="col-sm-4 col-lg-2">Bigboss </div>
			                <div class="col-sm-4 col-lg-2">1</div>
			           		<div class="col-sm-4 col-lg-2">100% </div>

			           		<div class="col-sm-12 col-lg-6">Rougerrabbit </div>
			           		<div class="col-sm-4 col-lg-2">Lapin </div>
			                <div class="col-sm-4 col-lg-2">1 </div>
			           		<div class="col-sm-4 col-lg-2">100% </div>
			           	</div>
			        </div>
		    	</div>




					      </div>
					    </div>
					  </div>
					</div>




					    
	       		  <div class="col-lg-12 col-sm-12 epilogue">
			    <h1>Fin de combat</h1>
			    <hr />
			    <h1> Victoir !</h1>
			    <h2>L'ennemi est vaincu .</h2>

				   </div>
	       		  <div class="col-lg-6 col-sm-12">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In blandit
						molestie dolor at euismod. Donec quis nisi ut ipsum ultricies
						molestie. Integer vitae leo lobortis, ullamcorper odio id, tristique elit.
						Suspendisse pharetra metus in est venenatis, eu mattis magna
						tempor. Vestibulum urna purus, pharetra quis vestibulum non,
						molestie et odio. Maecenas risus libero, aliquam vel dolor sit amet,
						tristique lacinia quam. Donec eleifend justo nulla, vitae tempor ante
						convallis id. Pellentesque scelerisque vel leo sit amet convallis. Fusce
						</p>
		
				   </div>
	       		  <div class="col-lg-6 col-sm-12">
						<p>vehicula bibendum mollis. Sed rhoncus lectus nec eros iaculis, sed
						viverra mi condimentum. Vestibulum dui dui, lobortis non est
						tristique, dignissim iaculis eros. Etiam vitae porttitor metus. Donec ac
						nunc odio. Suspendisse potenti. Maecenas elementum, orci at
						lobortis ornare, enim dui pulvinar lectus, a blandit mauris enim
						efficitur sapien. Donec ex turpis, egestas et sodales vel, faucibus ac
						neque.</p>
				   </div>
	    
			 </section>
			
		</div>
		<div class="col-lg-1 col-sm-0"> &nbsp; </div>

	    
	</main>

    <!-- Le pied de page -->
    
	<?php include("includes/page-footer.php"); ?>


	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>

