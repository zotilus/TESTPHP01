
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
// require_once __DIR__."../config.php";

$nomOrigine = $_FILES['monfichier']['name'];
$elementsChemin = pathinfo($nomOrigine);
$extensionFichier = $elementsChemin['extension'];
// Le nom du répertoire à créer
$nomDuRepStock = "stockage/";
$source = $_FILES["monfichier"]["tmp_name"];
$filename = $_FILES["monfichier"]["tmp_name"];
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

// define ('SITE_ROOT', realpath(dirname(__FILE__)));

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
    $mail -> isHTML(true);
    $mail -> SMTPDebug = 1;
    $mail -> Subject = $_POST['subject']; //sujet du mail
    $url =  'http://127.0.0.1/TESTPHP/interfaceTest/src/stockage/?fichier='.$nomDestination;
    $mail -> Body = $_POST['message']."<br><a href=\"".$url."\">telecharger fichier</a>"; // Message caché
    // $_GET = $_FILES['monfichier']['tmp_name'];
    // $url =  'http://127.0.0.1/TESTPHP/interfaceTest/src/stockage/?fichier'.$_FILES['monfichier']['tmp_name'];
    
  
    // if ($nomDestination != '') {
    //     foreach ($_FILES["monfichier"]["tmp_name"] as $nomDestinations) {
    //         $mail->AddAttachment($nomDestinations, $nomDestination);
    //     }
    // }

    // $mail->AddAttachment(
    //     $path = $url,
    //     $name = $nomDestination,
    //     // $encoding = self::ENCODING_BASE64,
    //     $type = file($nomDestination,64,$_FILES["monfichier"]["tmp_name"]),
    //     $disposition = 'attachment');

    
    // $mail->addStringAttachment(file_get_contents("url"), "filename");
    //  $mail->addStringAttachment(file_get_contents($repertoireDestination),$nomDestination);
    // $mail->addStringAttachment(file_get_contents($url), $nomDestination);
    // $mail->addStringAttachment(file_put_contents($nomDestination, implode($_FILES['monfichier']['tmp_name'], $array));
    //$mail->addStringAttachment(file_get_contents($url), $nomDestination);

    if (isset($_GET['monfichier'])) {
        $file = $_GET['monfichier'];
        if (file_exists($file) && is_readable($file) && preg_match('/\.pdf$/',$file)) {
         header('Content-Type: application/pdf');
         header("Content-Disposition: attachment; filename=\"$file\"");
         readfile($file);
         }
        }
    

    

    // $content = file_get_contents('http://anothersite/images/goods.jpg');
    // file_put_contents(DIRECTORY . '/image.jpg', $content);

    if(!$mail -> send()){
        echo $mail->ErrorInfo;
        // var_dump($source);
    }else{
        echo "Message bien envoyé";
    }
}

        $mail->addReplyTo($mail -> Username);
         print_r($_FILES['monfichier']['tmp_name']); exit;
        for ($i=0; $i < count($_FILES['monfichier']['tmp_name']) ; $i++) { 
            $mail->addAttachment($_FILES['monfichier']['tmp_name'][$i], $_FILES['monfichier']['name'][$i]);    // Optional name
        }
        $mail->isHTML(true);                                  // Set email format to HTML

        $mail->Subject = $_POST['subject'];
        $mail->Body    = '<div style="border:2px solid red;">This is the HTML message body <b>in bold!</b></div>'.$_POST['message'];
        $mail->AltBody = 'votre client mail n\'accepte pas le format html';
        // $mail->AddAttachment($_FILES['monfichier']['tmp_name'][$i], $_FILES['monfichier']['name'][$i]);  
        $mail->AddAttachment($source, $filename);

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
            
        }
    
// foreach ($_FILES["monfichier"]["tmp_name"] as $key => $Value){

//     $targetPatch = "stockage/" . basename($_FILES["monfichier"]["tmp_name"][$key]);
//     move_uploaded_file($value, $targetPatch);

// }
foreach(array_keys($_FILES["monfichier"]["tmp_name"]) as $key) {
    $source = $_FILES["monfichier"]["tmp_name"][$key];
    $filename = $_FILES["monfichier"]["tmp_name"][$key];
 
    //  $mail->AddAttachment($source, $filename);
 }


$name = $_GET['ref'];
$directory = '../stockage/'.$name;


$files = scandir($directory);

$nb_fichier = 0;

echo '<ul>';

if($dossier = opendir($directory ))
{
    while(false !== ($fichier = readdir($dossier)))
    {
        if($fichier != '.' && $fichier != '..' && $fichier != 'fileupload.php')
        {
            $nb_fichier++;
            $chemin = $directory.'/'. $fichier;
            echo'href="http://localhost:8080/Src/TelechargementFichier.php?ref=%27.$chemin.%27%22a%3E%27.$fichier.';
            echo '<br>'.$chemin;
        } 

    }
    echo '</ul><br />';
    echo 'Il y a <strong>' . $nb_fichier .'</strong> fichier(s) dans le dossier';

    closedir($dossier);

}
else
{
    echo 'Le dossier n\' a pas pu être ouvert';
}


?>

</body>
</html>