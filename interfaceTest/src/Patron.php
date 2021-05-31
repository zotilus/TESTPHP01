<?php

namespace APP;
header("Access-Control-Allow-Origin: *");
class Patron extends Employe implements Travailleur{

public $voiture;

public function __construct($nom,$age,$poste,$genre,$voiture)
{
    parent::__construct($nom,$age,$poste,$genre);

    $this->voiture = $voiture;

}

public function displayEmploye(){  //redefini dans la class enfant patron
    echo "<br>";
    echo "Bonjour,je m' appelle $this->nom , j'ai $this->age ans ($this->genre) , je suis $this->poste ;";
    // echo "<br>";
}

public function rouler(){
    echo "et j'ai la voiture du Boss"."<br>";
}
public function Travailler(){
    return "Je suis le patron et je travaille aussi"."<br>";
 }
}
?>