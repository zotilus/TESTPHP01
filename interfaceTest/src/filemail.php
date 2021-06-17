
<!-- http://127.0.0.1/TESTPHP/interfaceTest/src/filemail.php -->
<?php 
// use PHPMailer\PHPMailer\PHPMailer;
// use APP\SMTP;
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
 use swiftmailer\swiftmailer;

 require '../vendor/autoload.php';
        // require 'PHPMailerAutoload.php';
        // require 'credential.php';
        // require 'PHPMailer.php';
        // require 'SMTP.php';
        // require 'Exception.php';

        if($_SERVER['SERVER_NAME'] == 'localhost'){
            $transport = (new Swift_SmtpTransport('mailtrap.io', 2525))
                ->setUsername('d7f04e094bb83d')
                ->setPassword('73de2811ca2a9c')
                ;
        }else{
            $transport = new Swift_SmtpTransport() ;
        }
        
        $mailer = new Swift_Mailer($transport);

        $message = (new Swift_Message('Bienvenue'))
        ->setFrom(['zotilus@hotmail.com' => "ZoTiLuS"])
        ->setTo(["demo@demo.fr"])
        // ->setTo(["demo@demo.fr",'other@domain.org' => 'A name'])
        ->setBody("Hello");

        $result = $mailer ->send($message);
        var_dump($result);
        // $transport = new Swift_SendmailTransport('/usr/sbin/sendmail -bs');

        // $mail = mail('zotilus@gmail.com','Salut','je fais un test','From : tito@gmail.com');

        if ($mail){
            echo "Merci";
        }else {
            echo "Erreur marche po";
        }
    

 ?>