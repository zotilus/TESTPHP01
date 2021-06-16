<?php
require '../vendor/autoload.php';

use APP\Etudiant;

$etudiant = new Etudiant("bob", 25, "sleeper","homme");

$e = json_encode($etudiant);
print_r($e);


?>