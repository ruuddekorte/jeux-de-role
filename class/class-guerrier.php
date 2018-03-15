<?php 

/* ### Déroulement du combat ###
* 
* 1. Le combat se déroulent au coup par coup, en commencant par le premier 
*    personnage des héros. * (le héros 1 attaque le monstre 1) 	**niveau 1**
* 2. Une fois le premier personnage vaincu, le jeu passe automatiquement au 
*    personnage suivant   (cf exemple de combat) 	**niveau 1**
* 3. Le coup porté par l'attaquant est un nOmbre aléatoire compris entre les 
*    deux extrémités de sa force 	**niveau 1**
* 4. Si un personnage attaque sa spécialité (cf rôles), ses coups sont
*    multipliés par 1.5 	**niveau 2**
* 5. Si un personnage tue un autre personnage, son niveau augmente. 
*    Chaque niveau augmente la force de 50 	**niveau 2**
* 6. Le jeu est gagné lorsqu'il ne reste plus que des héros 	**niveau 1**
* 7. Le jeu est perdu lorsqu'il ne reste plus que des monstres 	**niveau 1**
*/ 

/* ### Compétences spéciales ###
*
* 1. Si il y a deux gobelins dans l'équipe des monstres, leur force est 
*    multiplié par 2 	**niveau 3**
* 2. Si il reste moins de 100 points de vie au magicien, sa force s'éttend
*    à 300 	**niveau 3**
* 3. Si Sauron se trouve face à 3 héros, ses coups sont 
*    multipliés par 1.5 	**niveau 2**
*/

Class Guerrier 

{

	private $name="";
	private $type="guerrier";  
	private $side="hero" ;         // côté :heros ou monstres
	private $forceMin=150 ;        // attaque-Min=imum
	private $forceMax=200 ;        // attaque-maximum
	private $health=350;           // points de vie
	private $specialty="ombrenoir" // Spécialité : Elfe, Gobelin, Guerrier, MageNoir, Magicien, Nain, OmbreNoir, Orque
}

