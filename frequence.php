<?php
declare(strict_types=1);

class Frequence extends Guitare{

    public $frequence ;
    public $tabListGuitares;
    public $kiki;
    public $frequencebase= array();


    public function __construct(){

        $this->frequence = array();
        //$this->accordageA  = $accordA;
        //$this->tabListGuitares = $P_tabListGuitares;
    }

    public function afficheTypeGuitareTab()
    {
        $this->tabListGuitare  = array(
            "FENDER"=> ("bleu"),
            "ACCOUSTIQUE"=>("jaune"),
            "BANJO"=>("argent"), 
            "CHAT"=>("poilu"),
        
        
        );
        foreach ($variable as $key => $value) {
            # code...
        }

        //   foreach ($this->tabListGuitare as $key => $frequence) {
        //       echo "$this->nomGuitare <br>";
        //   } 
          echo $this->frequence[01];
          //echo "fjjjj";   
    }




}

// $kiki =new Frequence([440]);
// $kiki->afficheTypeGuitareTab([440]);


?>