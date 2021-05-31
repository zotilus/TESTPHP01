
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <header>
        <p>ma page TEST PHP</p>
    </header>
    <nav>


    
    <a href="liensA.php">Link A</a>
    <a href="Liens B">Link B</a>
    <a href="Liens C">Link C</a>
        
    
    </nav>
<br>
    <main>
        <div id="mainDiv">
            <samp>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui quas accusamus eum ut odit fugiat distinctio esse, adipisci quae, explicabo dolorem quam labore fuga exercitationem voluptas cum. Sequi, a fuga?</samp>
        </div>
    </main>
<br>
    <article>
        <?php
        $phrase ='TEST DE COM PHP';
        echo $phrase;
        ?>
    </article>
<br>
    <article>
    <div class="divPHPAmiga">  
        <samp>
        <?php

                class Ordi
                {

                    public $vitesse;
                    public $fabricant;
                    public $_Amiga;
                    public $_520ST;
                    
                    //public $année;
                    //private $Mémoirevive;


                    public function __construct($vitesseHrz, $fabricant,$_Amiga,$_520ST)
                    {
                        $this->vitesse = $vitesseHrz;
                        $this->constructeur = $fabricant;
                        $this->amigaName = $_Amiga;
                        $this->atariName = $_520ST;

                        //$this->ordiName = $ordiName;
                    }
                    public function ComparoVitesse($vitesseHrz,$_Amiga,$_520ST){
                        

                    }

                    // public $ordiName;

                    // public function addName($ordiName){

                    //     $this->ordiName = "amiga";
                    //     echo "Le $this->ordiname à choisit l'arme: $this->weapon .<br>";

                    // }

            // function hasParent(Ordi $vitesse): bool
            // {
            //     if (!$this->hasParent()) {
            //         $this->parent = $vitesse;
            //         return true;
            //     }
            //     return false;
            // }
                }
            $_Amiga = new Ordi(7,"Commodore","Amiga 500","");
            $_520ST = new Ordi(8,"Atari","","Atari 520ST");
            

            echo "".$_Amiga ->amigaName.""."<br><br>"; 
            echo "Amiga tourne à ".$_Amiga ->vitesse." MHz"."<br><br>";  
            echo "<p>Fabricant: ".$_Amiga ->constructeur.""."<br><br>";
            

            

                class Proco
                {
                    public $fabricantProco;
                    public $nomProco;
                    public $nbreProco;



                    public function __construct($fabricantProco, $nomProco, $nbreProco)
                    {
                        $this->fabricantProco = $fabricantProco;
                        $this->nomProco = $nomProco;
                        $this->nbreProco = $nbreProco;
                    }
                }
            
                
            
            

            $_ProcAmiga = new Proco("Motorola","68000",1);
            $_Proc520ST = new Proco("Motorola","68000",1);

            echo "le fabricant du processeur est ".$_ProcAmiga ->fabricantProco.""."<br><br>"; 
            echo "le type de processeur:".$_ProcAmiga ->nomProco.""."<br><br>";
            echo "le nombre de processeur: ".$_ProcAmiga ->nbreProco.""."<br><br>";

            

            
        ?>
        </samp>

    </div>
    
    <div class="divPHPAtari">
        <samp>
        <?php
        echo "".$_520ST ->atariName.""."<br><br>"; 
        echo "520ST tourne à ".$_520ST ->vitesse." MHz"."<br><br>";
        echo "<p>Fabricant: ".$_520ST ->constructeur.""."<br><br>";

        echo "le fabricant du processeur est ".$_Proc520ST->fabricantProco.""."<br><br>"; 
        echo "le type de processeur:".$_Proc520ST->nomProco.""."<br><br>";
        echo "le nombre de processeur: ".$_Proc520ST->nbreProco.""."<br><br>";

         //echo "le fabricant du processeur est ".$_520STB ->fabricantProco."";
        // echo "le type de processeur:".$_520ST ->nomProco."";
        // echo "le nombre de processeur: ".$_520ST ->nbreProco."";
        ?>
        </samp>

    </div>

    <div class="result">
    <article>
    <legend>

                <?php
                
                 

                    
                //     $nomDuGagnant;
                //     $resultVitesse = max($_520ST->vitesse, $_Amiga->vitesse);

                //     public function test()
                //     {
                //         if ($this->resultVitesse == $_520ST->vitesse) {
                //             $nomDuGagnant == "Atari";
                //         } else {
                //             $nomDuGagnant == "Amiga";
                //         }
                        
                //     }
                   
                    
                    
                    //$nomDuGagnant = $_520ST->vitesse||$_Amiga->vitesse;
                    $nomDuGagnant = "kiki";
                    $_520ST =="Atari";
                    $_Amiga =="Amiga";
                    

                    
                    //$resultVitesse = max("avec ".$_520ST->vitesse." MHz ".$_520ST->atariName,"avec ".$_Amiga->vitesse." MHz ".$_Amiga->amigaName);
                    // echo $resultVitesse."  Gagne";

                     $resultVitesse = max($_520ST->vitesse,$_Amiga->vitesse);
                     if ($resultVitesse == $_Amiga->vitesse) {
                        echo "Avec". $resultVitesse." MHz l'Amiga Gagne";
                     }
                     if ($resultVitesse == $_520ST->vitesse) {
                        echo "Avec". $resultVitesse." MHz l'Atari Gagne";
                     }

                     
                     $a = 1;
                     $b = 1;
                     function test(int $a, int $b){
                     
                        if ($a==$b) {
                            echo "<br>"."Même nombres de Processeur principale";
                         }

                     }
                     test($a,$b);

                ?>
                </legend>


                <div class="proco">
                <?php
                
                ?>
                    
                     </div>
    </div>
    </article>

    <div class="space"></div>
    <br>
    <footer>
        <div id="footerDiv">
            <samp>BAS DE PAGE</samp>

        </div>
    </footer>


    
</body>
</html>