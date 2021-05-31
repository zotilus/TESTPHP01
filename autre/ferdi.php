<?php
  class Personnage {//1ere classe
       public $classe;
       public $race;
       public $force;
       public $vie;
       public $weapon;
       
    public function __construct (string $classe, string $race,int $force, int $vie){
      $this->classe = $classe;
      $this->race = $race;
      $this->force = $force;
      $this->vie = $vie;
    }
 
    public function addForce($P_force, $P_arme){
 
      echo "la force était à : $this->force <br>";
      echo "En utilisant : $P_arme je gagne: $P_force <br>";
      $this->force= $this->force + $P_force;
      echo "Elle est maintenant à: $this->force <br>";
    }
 
    public function addArme(string $arme){ //cette fonction est lié avec la classe Arme.
 
      $this->weapon= $arme;
 
        switch ($arme) {
 
          case "arc":
            echo "L'$arme est bien tendu. <br>";
            $this->addForce(5,$arme);
            break;
 
          case "épée":
            echo "L'$arme est brille de mille feu! <br>";
            $this->addForce(8,$arme);
            break;
 
          case "dague":
            echo "Une goute de poison coule à la pointe de la $arme <br>";
            $this->addForce(4,$arme);
            break;
 
          case "baton":
            echo "La pierre du $arme brille d'une couleur éclatante. <br>";
            $this->addForce(6,$arme);
            break;
          default:
          echo "PAs d'arme!!!!! <br>";
        }
 
     //parametre $arme est placé dans une variable weapon
      echo "Le $this->classe à choisit l'arme: $this->weapon .<br>"; //comme ça il peut etre utilisé      
    }
    
    public function attaque(){
    
      $attaque = rand(1, $this->force);
     
      if($this->force >= 10){ //si la force est plus grand que 10 
        echo "Le $this->classe attaque de : $attaque points.<br>";
        $this->force = $this->force - $attaque;
 
        echo "La force du $this->race descend à $this->force.<br>";
        if ($this->force < 10){//si la force est plus petit que 10
          echo "Le $this->classe est trop fatigué appelez la function energie! <br>";
        }
      }
    }
  }
 
  class Arme { //deuxieme classe
    public $arme; //= array(); //déclaration d'un tableau vide
    //mettre méthode puissance/arme
  }
  
 
  $hero = new Personnage("chasseur", "elfe", 45, 100);
  $hero->addArme('arc');
  $hero->attaque();
 
?>