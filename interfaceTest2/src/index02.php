<?php



require '../vendor/autoload.php';


use APP\Employe;
use APP\Patron;
use APP\Etudiant;
use APP\Travailleur;
use APP\Animaux;

include "manage2.html";
// include "manage2.1.html";
//require_once("interfaceTest/src/autoload.php");





// $employe00 = new Employe("Albert",42,"Employé 00","Homme");
// echo "<br>"; 

$employe01 = new Employe("Mirmiton",50,"Employé 01","Homme");
// echo "<br>";
$patron = new Patron("Le Boss",12,"patron","homme","grosse voiture");

$etudiant = new Etudiant("Toto",17,"Etudiant","Homme");

$chien = new Animaux("Tobi",7, 20);

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
$chien->setPoids(60);
$chien->getPoids();

// faireTravailler($chien);



function faireTravailler(Travailleur $object){
    echo "mon travail est en cours : {$object->Travailler()}";
}

function pasFaireTravailler(Travailleur $object){
    echo "mon travail est en cours : {$object->pasTravailler()}";
}


// echo Form::input();
// faireTravailler($employe00);
// function faireTravailler(Travailleur $employe00){
//     echo "<br>mon travail est en cours : {$employe00->Travailler()}";
// }
//$employe01 ->age = "keke"; //marche plus en private

echo "<br>". "<br>";
header("Access-Control-Allow-Origin: *");
header('Content-Type' , 'application/json');
echo "DATE : " . (new DateTime)->format("H:i:s");
echo "<br>". "<br>";
print_r(json_encode(['David', 'Claire' , 'Brahim', 'Valerie', 'Eric']));


?>