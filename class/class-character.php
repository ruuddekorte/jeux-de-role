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

class Character

{
	private $name="";
	private $type="";        // type : Elfe, Gobelin, Guerrier, MageNoir, Magicien, 
						     //        Nain, OmbreNoir, Orque, Sauron.
	protected $side="";      // côté :hero ou monstre
	protected $forceMin=;    // attaque-Minimum
	protected $forceMax=;    // attaque-maximum
	protected $level=1;	     // basic level (niveau) raise 1 after each kill
	protected $health=;      // points de vie
	protected $specialty=""  // Spécialité : Elfe, Gobelin, Guerrier, MageNoir, 
	                         //              Magicien, Nain, OmbreNoir, Orque


	public function attaque($target){

		$attack=rand ($forceMin, $forceMax);    // choose force of attack, 
												// random  between min and max force
		if ($this->level!=1); {
			$attack+=50*(this->level-1)
		}			// 

		if ($this->specialty==$target->type){
				$attack*=1,5;
		}						// if target equals specialty; attack * 1,5

		if ($this->=="gobelin" && other Gobelins.in_array(monstres)>1){		
				$attack*=2; 
		}						// if 2 or more goblins; attack pawer times 2

		if ($this->type=="magicien" && $this->health<=100){		
				$this->forceMax=300; 
		}						// if mage and healt less then 100 , than max attxk 300

			$target->health-=$attack;
			echo $target->sante()."<br />";
		}

	public function __construct($name){
			$this->name=$name;
		}

	public function sante(){
		if ($this->health>=0){
			echo $this->name." attaque ".$target."<br />";
			echo "Coup porté "$attack."<br />";
			echo "stats for : ".$this->name.", attack : ".$this->attack."pts, health : ".$this->health." pts.<br />
				list Nom Type Niveau Vie for heros and monsters<br />";
		} else {
			echo $this->name." has perished.<br />";
		}
	}
}
