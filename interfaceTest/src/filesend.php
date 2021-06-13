<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
$message = 'send_mail';
// $sujet = "subject";
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
    $mail -> Subject = $sujet; //sujet du mail
    $mail -> Body = $message; // Message caché

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
        $mail->Body    = '<div style="border:2px solid red;">This is the HTML message body <b>in bold!</b></div>';
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