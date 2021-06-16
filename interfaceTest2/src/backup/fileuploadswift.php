
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
       <p>dhshhhhhhhhhhhhhhhhhhhhhhhhhhhhh</p>
    </div>
<!-- https://codededev.com/blog/article/envoyer-un-mail-avec-swift-mailer -->
<!-- http://127.0.0.1/TESTPHP/interfaceTest/src/fileupload.php -->

<?php

require '../vendor/autoload.php';

$nomOrigine = $_FILES['monfichier']['name'];
$elementsChemin = pathinfo($nomOrigine);
$extensionFichier = $elementsChemin['extension'];
// Le nom du répertoire à créer
$nomDuRepStock = "stockage/";
// $extensionsAutorisees = array("jpeg", "jpg", "gif");
// if (!(in_array($extensionFichier, $extensionsAutorisees))) {
//     echo "Le fichier n'a pas l'extension attendue";
// } else {    
    // Copie dans le repertoire du script avec un nom
    // incluant l'heure a la seconde pres 
    $repertoireDestination = dirname(__FILE__)."/";
    $nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;

    if (move_uploaded_file($_FILES["monfichier"]["tmp_name"], 
    $nomDuRepStock.$nomDestination)) {
        echo "Le fichier temporaire ".$_FILES["monfichier"]["tmp_name"].
                " a été déplacé vers ".$nomDuRepStock.$nomDestination;
    } else {
        echo "Le fichier n'a pas été uploadé (trop gros ?) ou ".
                "Le déplacement du fichier temporaire a échoué".
                " vérifiez l'existence du répertoire ".$repertoireDestination;
    }

     

    // Vérifie si le répertoire existe :
    if (is_dir($nomDuRepStock)) {
                      echo 'Le répertoire existe déjà!';  
                      }
    // Création du nouveau répertoire
    else { 
          mkdir($nomDuRepStock);
          echo 'Le répertoire '.$nomDuRepStock.' vient d\'être créé!';      
          }

// }
?>






</body>
</html>