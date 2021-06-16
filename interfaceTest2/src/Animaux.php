<?php

namespace APP;
header("Access-Control-Allow-Origin: *");
class Animaux
{
    // public static $nom = "Tobi";
    public $nom ;
    public $age;
    public $poids;

    public function __construct($nom,$age,$poids){
        $this->nom =$nom;
        $this->age =$age;
        $this->setPoids($poids);
    }
    public function getPoids(){
        echo" <br>";
        echo "mon chien ".$this->nom ." a grossi il fait ".$this->poids."kilos";
         return $this->poids;
    }
    public function setPoids($poids){
        echo" <br>";
        echo "donne le poids du chien ".$this->poids;
        return $this->poids =$poids;
    }

    // public static function displayAnimaux(){
    //     echo "<BR>";
    //     echo "il y a un chien static dans la place"; 
    //     echo "<BR>";
    //     echo "son nom est"." ".self::$nom;
    //     return new self;
    }
  




?>