
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- https://codededev.com/blog/article/envoyer-un-mail-avec-swift-mailer -->

<?php
require '../vendor/autoload.php';

$nomOrigine = $_FILES['monfichier']['name'];
$elementsChemin = pathinfo($nomOrigine);
$extensionFichier = $elementsChemin['extension'];
$extensionsAutorisees = array("jpeg", "jpg", "gif");
if (!(in_array($extensionFichier, $extensionsAutorisees))) {
    echo "Le fichier n'a pas l'extension attendue";
} else {    
    // Copie dans le repertoire du script avec un nom
    // incluant l'heure a la seconde pres 
    $repertoireDestination = dirname(__FILE__)."/";
    $nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;

    if (move_uploaded_file($_FILES["monfichier"]["tmp_name"], 
                                     $repertoireDestination.$nomDestination)) {
        echo "Le fichier temporaire ".$_FILES["monfichier"]["tmp_name"].
                " a été déplacé vers ".$repertoireDestination.$nomDestination;
    } else {
        echo "Le fichier n'a pas été uploadé (trop gros ?) ou ".
                "Le déplacement du fichier temporaire a échoué".
                " vérifiez l'existence du répertoire ".$repertoireDestination;
    }

    $nom = "stockage"; // Le nom du répertoire à créer

    // Vérifie si le répertoire existe :
    if (is_dir($nom)) {
                      echo 'Le répertoire existe déjà!';  
                      }
    // Création du nouveau répertoire
    else { 
          mkdir($nom);
          echo 'Le répertoire '.$nom.' vient d\'être créé!';      
          }

}
?>

<?php 
if(isset($_POST['sendmail'])){
    require '../vendor/autoload.php';
    require 'credential.php';
}

// require_once '/path/to/vendor/autoload.php';
$transport = (new Swift_SmtpTransport('smtp.gmail.com',587,'tls'))
->setUsername('EMAIL')
->setPassword('PASS')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message($_POST['subject']))
->setFrom([EMAIL => 'John Doe'])
->setTo([$_POST['email']])
->setBody($_POST['message'])
;

// Send the message
if($mailer->send($message)){
    echo 'Mail Send...!!';
}
else{
    echo "Failed to send..!!";
}

?>


</body>
</html>



