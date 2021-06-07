
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
// use PHPMailer\PHPMailer\PHPMailer;
// use APP\SMTP;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

 require '../vendor/autoload.php';
        // require 'PHPMailerAutoload.php';
        require 'credential.php';
        require 'PHPMailer.php';
        require 'SMTP.php';
        require 'Exception.php';
    

header("Access-Control-Allow-Origin: *");

    if(isset($_POST['sendmail'])) {
        

        // $mail = new PHPMailer();
        // $mail->isSMTP();
        // $mail->Host = 'smtp.mailtrap.io';
        // $mail->SMTPAuth = true;
        // $mail->Port = 2525;
        // $mail->Username = 'd7f04e094bb83d';
        // $mail->Password = '73de2811ca2a9c';

        function sendmail($objet, $contenu, $destinataire) { 
            
        $mail = new PHPMailer;

        $mail->SMTPDebug = 4;                               // Enable verbose debug output

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';                         // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = EMAIL;                            // SMTP username
        // $mail->Password = PASS;                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 587;                                    // TCP port to connect to
        $mail->CharSet = 'UTF-8'; 
        $mail->setFrom(EMAIL, 'de ZoTiLuS');
        $mail->addAddress($_POST['email']);     // Add a recipient

        $mail->addReplyTo(EMAIL);
         print_r($_FILES['monfichier']); exit;
        for ($i=0; $i < count($_FILES['monfichier']['tmp_name']) ; $i++) { 
            $mail->addAttachment($_FILES['monfichier']['tmp_name'][$i], $_FILES['monfichier']['name'][$i]);    // Optional name
        }
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $_POST['subject'];
        $mail->Body    = '<div style="border:2px solid red;">This is the HTML message body <b>in bold!</b></div>';
        $mail->AltBody = $_POST['Mon message en texte brut'];
        // $mail->AddAttachment('./doc/content/rapport.pdf','Rapport_2018.pdf');  
        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }
    }
}


 ?>


</body>
</html>