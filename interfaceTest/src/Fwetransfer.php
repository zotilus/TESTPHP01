<?php
//  var_dump($_FILES);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if (isset($_POST['send_mail'])){
    
    $mail = new PHPMailer;
    $mail -> Host = 'smtp.gmail.com';
    $mail -> Port = 587;
    $mail -> SMTPSecure = 'tls';
    $mail -> SMTPAuth = true;
    $mail -> Username = 'tsboe.2015@gmail.com'; //expediteur
    $mail -> Password = 'porsche68'; //mot de passe
    $mail -> setFrom('Ferdi_Codeur@protonmail.com','ferdi');
    $mail -> addAddress('Ferdi_Codeur@protonmail.com'); //destinataire
    $mail -> IsSMTP(true);
    $mail -> SMTPDebug = 1;
    $mail -> Subject = 'hello ferdi'; //sujet du mail
    $mail -> Body = 'Message envoyé'; // Message caché

    if(!$mail -> send()){
        echo $mail->ErrorInfo;
    }else{
        echo "Message bien envoyé";
    }
}

// foreach ($_FILES["myFiles"]["tmp_name"] as $key => $Value){

//     $targetPatch = "uploads/" . basename($_FILES["myFiles"]["name"][$key]);
//     move_uploaded_file($value, $targetPatch);

// }
?>