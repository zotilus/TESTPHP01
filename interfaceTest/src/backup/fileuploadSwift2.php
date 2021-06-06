<?php 

// <!-- https://codededev.com/blog/article/envoyer-un-mail-avec-swift-mailer -->
require '../vendor/autoload.php';
require '..src/dev.php'; //Don't forget to add your configuration file
$subject = 'Mon premier email avec Swift Mailer';
$body = '<!DOCTYPE html>
<html lang="fr">
<head>
   <title>Mon premier mail</title>
</head>
<body>
    <h1>Hello SwiftMailer</h1>
</body>
</html>';
// Create the Transport
$transport = (new Swift_SmtpTransport(EMAIL_HOST, EMAIL_PORT))
    ->setUsername(EMAIL_USERNAME)
    ->setPassword(EMAIL_PASSWORD)
    ->setEncryption(EMAIL_ENCRYPTION) //For Gmail
;
// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);
// Create a message
$message = (new Swift_Message($subject))
    ->setFrom([EMAIL_USERNAME])
    ->setTo([EMAIL_USERNAME])
    ->setBody($body,'subject')
;
// Send the message
$result = $mailer->send($message);

?>