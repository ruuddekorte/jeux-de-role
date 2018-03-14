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

class Magicien 

{
	private $name="";
	private $type="magicien"; 
	private $side="hero";         // côté :hero ou monstre
	private $forceMin==100;       // attaque-Min=imum
	private $forceMax=200;        // attaque-maximum
	private $health=400;          // points de vie
	private $specialty="magenoir" // Spécialité : Elfe, Gobelin, Guerrier, MageNoir, Magicien, Nain, OmbreNoir, Orque


	public function attaque($cible){
		if $cible->
			$cible->health-=$this->attack;
			echo $cible->sante()."<br />";
		}
	public function __construct($name){
			$this->name=$name;
		}

	public function sante(){
		if ($this->health>=0){
			echo "stats for : ".$this->name.", attack : ".$this->attack."pts, health : ".$this->health." pts.<br />";
		} else {
			echo $this->name." has perished.<br />";
		}
	}
}
