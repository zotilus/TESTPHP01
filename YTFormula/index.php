<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="style.php" rel="stylesheet" type="text/css" media="all" />
</head>

<body>
    <div class="main">
        <header>
            <h1>
                <?php
                // declare(strict_types=1);
                //include "style.php";



                echo ("<center>YTFormula </center>" . "<br>");

                ?>



                <?php

                class ColorHeader
                {
                    public $couleur_texte = "";
                    //$couleur_texte= array();
                    public $input;
                    public $rand_keys;

                    //echo $input[$rand_keys[1]] . "\n";
                    //return array();
                    //var_dump($couleur_texte);

                    public function ChangeColor($couleur_texte,$input,$rand_keys)
                    {
                        $this->couleur_texte =$couleur_texte;
                        $this->input =$input;
                        $this->rand_keys=$rand_keys;
                        $this->input = array("white", "red", "yellow", "black", "blue");
                        $this->rand_keys = array_rand($this->input, 2);
                        //echo $input[$rand_keys[0]] . "\n";
                        echo $this->input[$this->rand_keys[1]] . "\n";
                        return $this->rand_keys[1]->couleur_texte;
                    }
                }

                $couleur_texte = new ColorHeader();
                $couleur_texte->ChangeColor($couleur_texte,$input,$rand_keys);
                var_dump($couleur_texte);

                ?>
                <style>
                    header {
                        display: flex;
                        color: <?php echo "red"; ?>;
                        background-color: #999990;
                        border-radius: 25px;
                        justify-content: center;
                        margin: auto;
                        align-items: flex-start;
                        box-sizing: border-box;
                        width: 50vw;
                        height: 15vh;

                    }
                </style>
            </h1>

        </header>
        <?php


        $str = 'abcdef';
        echo strlen($str); // 6

        $str = ' ab cd ';
        echo strlen($str); // 7

        ?>

</body>

</html>