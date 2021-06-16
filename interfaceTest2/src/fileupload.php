
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



<?php 



require '../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if (isset($_POST['send_mail'])){
    
    $mail = new PHPMailer;
    $mail -> Host = 'smtp.mailtrap.io';
    $mail -> Port = 2525;
    $mail -> SMTPSecure = 'tls';
    $mail -> SMTPAuth = true;
    $mail -> Username = 'd7f04e094bb83d'; //expediteur
    $mail -> Password = '73de2811ca2a9c'; //mot de passe
    $mail -> setFrom('kikou@toto.com','luc');
    $mail -> addAddress('kikou@toto.com'); //destinataire
    $mail -> IsSMTP(true);
    $mail -> SMTPDebug = 1;
    $mail -> Subject = $_POST['subject']; //sujet du mail
    $mail -> Body = $_POST['message']; // Message caché

    if(!$mail -> send()){
        echo $mail->ErrorInfo;
    }else{
        echo "Message bien envoyé";
    }
}

        $mail->addReplyTo($mail -> Username);
         print_r($_FILES['monfichier']); exit;
        for ($i=0; $i < count($_FILES['monfichier']['tmp_name']) ; $i++) { 
            $mail->addAttachment($_FILES['monfichier']['tmp_name'][$i], $_FILES['monfichier']['name'][$i]);    // Optional name
        }
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $_POST['subject'];
        $mail->Body    = '<div style="border:2px solid red;">This is the HTML message body <b>in bold!</b></div>'.$_POST['message'];
        $mail->AltBody = $_POST[$_FILES];
        $mail->AddAttachment($_FILES['monfichier']['tmp_name'][$i], $_FILES['monfichier']['name'][$i]);  
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    
// foreach ($_FILES["myFiles"]["tmp_name"] as $key => $Value){

//     $targetPatch = "uploads/" . basename($_FILES["myFiles"]["name"][$key]);
//     move_uploaded_file($value, $targetPatch);

// }


 ?>


</body>
</html>