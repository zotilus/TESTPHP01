<?php
require '../vendor/autoload.php';

use APP\Etudiant;

$etudiant = new Etudiant("bob", 25, "sleeper","homme");

echo $etudiant->travailler()." je m'appelle : ".$etudiant->nom;

?>