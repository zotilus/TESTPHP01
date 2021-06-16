<?php

namespace APP;
header("Access-Control-Allow-Origin: *");
class Employe implements Travailleur{

    public $nom ;
    protected $age ;
    public $genre ;
    public $poste ;

    public function __construct(string $nom, int $age,string $poste, string $genre)
    {
        $this->nom =$nom;
        //$this->age= $age;
        $this->setAge($age);//renforce la verif en utilisant la fonction definie dans le setter
        $this->poste =$poste;
        $this->genre =$genre;
        // echo "je m' appelle $this->nom et j'ai $this->age ans ($this->genre) ;";
    }
    // parcque $age est passé en private faire getter & setter pour proteger l'accès
    public function setAge($age){
        
        if (is_int($age) && $age >= 1 && $age <=120){
            $this->age= $age;
        }else{
            throw new \Exception("l'âge dois être un chiffre entre 1 et 120 !");
        }

    }

    public function Travailler(){
    return "Je suis un employé et je travaille";
    }
    public function PasTravailler(){
        return " je travaille pas";
    }

    public function getAge(){
        //$this->age= $age;
        return $this->age;

    }
    public function displayEmploye(){
        echo "<br>";
        echo  "je m' appelle $this->nom , j'ai $this->age ans ($this->genre) et je suis $this->poste ";
        echo "<br>";
    }

}
?>