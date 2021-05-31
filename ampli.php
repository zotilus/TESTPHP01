<?php
//declare(strict_types=1);

class Ampli
{
    private $ampliState;
    private $nomAmpli;

    public function __construct(string $nomDeLampli, bool $etat)
    {
        $this->nomAmpli = $nomDeLampli;
        $this->ampliState = $etat;
    }
    public function brancherAmpli(): bool
    {
        if ($this->ampliState) {
            echo ("OK l'ampli est allumé !" . "<br>");
            return true;
        } else if (!$this->ampliState) {
            echo ("Tu ne seras pas amplifier, si l'ampli est eteint !" . "<br>");
            return false;
        }
    }
    public function setState(bool $etat): bool
    {
        if ($etat === true) {
            $this->ampliState = $etat;
            return true;
        } else {
            $this->ampliState = $etat;
            return false;
            //throw new Exception('ampli OFF');
            //return false;

        }

        // try {
        //     echo $this->setState(false);
        // }
        //  catch (Exception $e) {
        //     echo 'Exception reçue : ',  $e->getMessage(), "\n";
        // }


    }


    public function getNom(): string
    {
        return $this->nomAmpli;
    }
    public function getState(): string
    {
        if ($this->ampliState == true) {
            return "Ampli alllumé<br>";
        } else if (!$this->ampliState) {
            return "Ampli eteind !<br>";
        } else {
            echo "Ampli on ou off au choix !<br>";
        }
    }
}
class AmpliAccoustique extends Ampli
{
    // private $ampliState ;

    public function  SetAcoustic()
    {

        parent::brancherAmpli(true);
        echo "avez vous vu le nouveau chapeau de ZOZO";
    }
}
