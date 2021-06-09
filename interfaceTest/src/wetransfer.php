<?php
//  var_dump($_FILES);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';

if (isset($_POST['send_mail'])){
    
    $mail = new PHPMailer;
    $mail -> Host = 'smtp.gmail.com';
    $mail -> Port = 587;
    $mail -> SMTPSecure = 'tls';
    $mail -> SMTPAuth = true;
    $mail -> Username = 'zotilusstock@gmail.com'; //expediteur
    $mail -> Password = 'CocoStock22'; //mot de passe
    $mail -> setFrom('zotilus@gmail.com','luc');
    $mail -> addAddress('zotilus@gmail.com'); //destinataire
    $mail -> IsSMTP(true);
    $mail -> SMTPDebug = 1;
    $mail -> Subject = 'hello Zote'; //sujet du mail
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