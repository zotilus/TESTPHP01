<?php
declare(strict_types=1);


class Guitare
{
   
    public $nomGuitare; 
    private $ampliGuitare;
    public  $frequence ;
    //public $frequence = $this->afficheTypeGuitareTab();
    
 
    public function __construct(string $nouvelleGuitare, Ampli $nomDeLampli)
    {
        $this->nomGuitare = $nouvelleGuitare;
        $this->ampliGuitare = $nomDeLampli;
        $this->frequence = "440 hrz";
       

   
    }
    public function afficheTypeGuitare()
   
    {
        switch ($this->nomGuitare) {
            
            case "fender":
                // $this->accordageA ===  440 ; 
                //  $this->freq === $this->accordageA ;
                echo "tu as choisi une guitare electrique :" . $this->nomGuitare . "<br>"; //ampli OFF
                echo "accordé à $this->frequence.<br>";
                break;
            case "accoustique":
                echo "tu as choisi une guitare: " . $this->nomGuitare . "<br>"; //ampli ON
                echo "accordé à $this->frequence.<br>";
                break;
            case "banjo":
                echo "tu as choisi un:" . $this->nomGuitare . " <br>"; //marche avec et sans ampli
                echo "accordé à $this->frequence.<br>";
                break;
            case "chat":
                echo "tu as choisi le " . $this->nomGuitare . " <br>";
                $this->frequence == "OpenTuning";
                 //throw new Exception("tu peux toujours essayer de gratter le chat ");
                 echo "accordé à $this->frequence.<br>";

                break;
            default:
                echo "tu n'as pas choisi de guitare <br>";
        }
       



        // try {
        //     $this->nomGuitare == "chat";
        // } catch (Exception $nomGuitare) {
        //     echo "Exception reçue:", $nomGuitare->getMessage(), "\n";
        // } finally {
        //     echo "c est pas grave!";
        // }
                 
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

    
    // public function accordage(){
    //     foreach ($this->tabListGuitares as &$value { 
    //          $value === {$key}$this->accordageA;
    //         echo "L'instrument est accordé en $this->accordageA.Hrz";
    //     }

            
    // }
}





?>

<!-- /allumer l'ampli
/brancher la guitare
/mettre la guitare autour du cou
/prendre le plectre
/gratter les cordes avec le plectre
result
/faire un son -->