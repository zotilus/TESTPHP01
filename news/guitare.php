<?php


class Guitare
{
    public $nomGuitare; 
    private $ampliGuitare;
 
    public function __construct(string $nouvelleGuitare, Ampli $nomDeLampli)
    {
        $this->nomGuitare = $nouvelleGuitare;
        $this->ampliGuitare = $nomDeLampli;
    }
    public function afficheTypeGuitare():void
    {
        switch ($this->nomGuitare) {
            case "fender":
                echo "tu as choisi une guitare electrique :" . $this->nomGuitare . "<br>"; //ampli OFF
                //$this->utilisePlectre();
                break;
            case "accoustique":
                echo "tu as choisi une guitare: " . $this->nomGuitare . "<br>"; //ampli ON
                //$this->utilisePlectre();
                break;
            case "banjo":
                echo "tu as choisi un:" . $this->nomGuitare . " <br>"; //marche avec et sans ampli
                //$this->utilisePlectre()
                break;
            case "chat":
                echo "tu as choisi le " . $this->nomGuitare . " <br>";
                //$this->utilisePlectre();
                break;
            default:
                echo "tu n'as pas choisi de guitare <br>";
        }
    }
    public  function getAmpli():object
    {
        return $this->ampliGuitare;
    }
    public function setAmpli(Ampli $nouvelAmpli):void
    {
        $this->ampliGuitare = $nouvelAmpli;
    }

        // public function montreChoixGuitare(){               
    //         echo("tu as choisi une guitare: {$this->nomGuitare}"."<br>");                           
    //}  
}


?>

<!-- /allumer l'ampli
/brancher la guitare
/mettre la guitare autour du cou
/prendre le plectre
/gratter les cordes avec le plectre
result
/faire un son -->