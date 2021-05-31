<?php
class Plectre
{
    
    public $mediatorEnMain; 

    public function PlectreON(): bool
    {
        $this->mediatorEnMain  = true;
        echo ("tu as un mediator en main droite" . "<br>");
        return true;
    }
    public function PlectreOFF(): bool
    {
        $this->mediatorEnMain  = false;
        echo ("tu n'as pas de mediator !!" . "<br>");
        return false;
    }

}





?>