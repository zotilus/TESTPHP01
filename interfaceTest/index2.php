<?php

interface Travailleur {
    public function Travailler();
    public function PasTravailler();
}

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
            throw new Exception("l'âge dois être un chiffre entre 1 et 120 !");
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
        echo "et j'ai la voiture du Boss";
    }
    public function Travailler(){
        return "Je suis le patron et je travaille aussi"."<br>";
     }
}

class Etudiant extends Employe implements Travailleur{
    public function travailler()
    {
        return "Je suis un etudiant , je revise";
    }
    public function pastravailler()
    {
        return " je revise";
    }

}

abstract class Animaux extends Employe{ // plus etendue que interface ??

    public $nom;
    protected $age;

    public function __construct($nom,$age){
        $this->nom =$nom;
        $this->$age;
    }
    abstract public function recompenser();

}

// $employe00 = new Employe("Albert",42,"Employé 00","Homme");
// echo "<br>"; 

$employe01 = new Employe("Mirmiton",50,"Employé 01","Homme");
// echo "<br>";
$patron = new Patron("Le Boss",12,"patron","homme","grosse voiture");

$etudiant = new Etudiant("Toto",17,"Etudiant","Homme");

$chien = new Employe("Tobi",7,"animal","chien");

// $employe01 ->nom ="Mirmiton";
// $employe01->genre = "Homme";
// $employe01->affichageEmploye();
//$employe01->getAge(10);
$employe01->setAge(32); //gaffe au hosting, si tu met à la fin ça marche pas, faut que la variable  passe avant la function d'affichage
// $employe00->displayEmploye();

// $employe00->Travailler();
$employe01->displayEmploye();
faireTravailler($employe01);
$patron->setAge(60);
$patron->displayEmploye();
$patron->rouler();
faireTravailler($patron);
$etudiant->displayEmploye();
pasFaireTravailler($etudiant); //abstaction
echo "<br>";
$chien->displayEmploye();
faireTravailler($chien);



function faireTravailler(Travailleur $object){
    echo "mon travail est en cours : {$object->Travailler()}";
}

function pasFaireTravailler(Travailleur $object){
    echo "mon travail est en cours : {$object->pasTravailler()}";
}


// faireTravailler($employe00);
// function faireTravailler(Travailleur $employe00){
//     echo "<br>mon travail est en cours : {$employe00->Travailler()}";
// }



//$employe01 ->age = "keke"; //marche plus en private



?>