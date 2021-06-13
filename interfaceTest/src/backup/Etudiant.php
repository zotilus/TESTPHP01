<?php

namespace APP;
header("Access-Control-Allow-Origin: *");
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
?>