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
	
	<?php include("includes/page-header.php"); ?>
	  
    <!-- Le corps de page -->

<main class="row">
	  <div class="col-lg-12 col-sm-12 page-header">
  		  <h1>Créez vos équipes</h1>
    </div> 
    
    <div class="col-lg-1 col-sm-0"> &nbsp; </div>
    	<div class="col-lg-5 col-sm-12">	
        <form class="form-inline">
          <div class="input-group">
            <div class="row"> 
           		<div class="col-lg-12"><h2>Les Héros</h2></div> 
           		<div class="col-sm-12 col-lg-12">Personnage 1 :</div>
           		<div class="col-sm-12 col-lg-5">Nom* :<br /><input id="hero1" type="text" class="form-control" /></div>
           		<div class="col-sm-12 col-lg-5">Type* :<br /><select class="custom-select" id="sel1" />
                                    <option value="magicien">Magicien</option>
                                    <option value="elfe">Elfe</option>
                                    <option value="nain">Nain</option>
                                    <option value="guerrier">Guerrier</option>
                                  </select></div>


           		<div class="col-sm-12 col-lg-12">Personnage 2 :</div>
           		<div class="col-sm-12 col-lg-5">Nom* :<br /><input id="hero2" type="text"  class="form-control" /></div>
           		<div class="col-sm-12 col-lg-5">Type* :<br /><select class="custom-select" id="sel2">
                                    <option value="magicien">Magicien</option>
                                    <option value="elfe">Elfe</option>
                                    <option value="nain">Nain</option>
                                    <option value="guerrier">Guerrier</option>
                                  </select></div>
           		<div class="col-sm-12 col-lg-12">Personnage 3 :</div>
           		<div class="col-sm-12 col-lg-5">Nom* :<br /><input id="hero3" type="text"  class="form-control" /></div>
           		<div class="col-sm-12 col-lg-5">Type* :<br /><select class="custom-select" id="sel3">
                                   <option value="magicien">Magicien</option>
                                    <option value="elfe">Elfe</option>
                                    <option value="nain">Nain</option>
                                    <option value="guerrier">Guerrier</option>
                                  </select></div>
           		<div class="col-lg-12"> &nbsp; </div> 
           		<div class="col-lg-12"><h6>les champs munis d'une(*) sont obligatoires</h6></div> 
           		<div class="col-lg-12"> &nbsp; </div> 
            </div>
        </div>
      </form>
    </div>
    <div class="col-lg-5 col-sm-12">	
    	<div class="row"> 
       		<div class="col-lg-12"><h2>Les Monstres</h2></div> 
       		<div class="col-sm-12 col-lg-12">Personnage 1 :</div>
       		<div class="col-sm-12 col-lg-5">Nom* :<br /><input id="monstre1" type="text"  class="form-control" /></div>
       		<div class="col-sm-12 col-lg-5">Type* :<br /><select class="custom-select" id="sel4">
                                <option value="magenoir">Mage Noir</option>
                                <option value="orque">Orque</option>
                                <option value="gobelin">Gobelin</option>
                                <option value="ombrenoir">Ombre Noir</option>
                                <option value="sauron">Sauron</option>
                              </select></div>
       		<div class="col-sm-12 col-lg-12">Personnage 2 :</div>
       		<div class="col-sm-12 col-lg-5">Nom* :<br /><input id="monstre1" type="text" class="form-control"  /></div>
       		<div class="col-sm-12 col-lg-5">Type* :<br /><select class="custom-select" id="sel5">
                                <option value="magenoir">Mage Noir</option>
                                <option value="orque">Orque</option>
                                <option value="gobelin">Gobelin</option>
                                <option value="ombrenoir">Ombre Noir</option>
                                <option value="sauron">Sauron</option>
                              </select></div>
       		<div class="col-sm-12 col-lg-12">Personnage 3 :</div>
       		<div class="col-sm-12 col-lg-5">Nom* :<br /><input id="monstre1" type="text" class="form-control"  /></div>
       		<div class="col-sm-12 col-lg-5">Type* :<br /><select class="custom-select" id="sel6">
                                <option value="magenoir">Mage Noir</option>
                                <option value="orque">Orque</option>
                                <option value="gobelin">Gobelin</option>
                                <option value="ombrenoir">Ombre Noir</option>
                                <option value="sauron">Sauron</option>
                              </select></div>
       		<div class="col-lg-12">  &nbsp; </div> 
       		<div class="col-lg-12 right"> <a href="combat.php"><button type="button" class="btn btn-secondary btn-lg start">[ Commencer ]</button></a>
       		</div> 
       		<div class="col-lg-12"> &nbsp; </div> 
      	</div>
    </div>
    <div class="col-lg-1 col-sm-0"> &nbsp; </div>
</main>

    <!-- Le pied de page -->
    
	<?php include("includes/page-footer.php"); ?>


	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/app.js"></script>
</body>
</html>

