<?php
class Ampli
{
    private $ampliState = true;
    private $nomAmpli = "inconnu";

    public function __construct(string $nomDeLampli, bool $etat)
    {
        $this->nomAmpli = $nomDeLampli;
        $this->ampliState = $etat;
    }
    public function brancherAmpli():void{ 
        if ($this->ampliState == true) {
            echo ("OK l'ampli est allumé !"."<br>");       
                }   
                else if($this->ampliState== false){   
                echo ("Ca ne marchera pas si l'ampli est eteint !"."<br>");
                }
                else if($this->ampliState== null){
                    echo ("brancher l'ampli en premier !"."<br>");
                }  
        }
    public function setState(bool $etat):void
    {
        $this->ampliState = $etat;
    }
    public function getNom():string
    {
        return $this->nomAmpli;
    }
    public function getState(): string
    {
        if ($this->ampliState == true) {
            return "Ampli alllumé<br>";
        }
        else if ($this->ampliState == false){
            return "Ampli eteind !<br>";

        }
        return "Ampli on ou off au choix !<br>";
       
    }

    
}
?>