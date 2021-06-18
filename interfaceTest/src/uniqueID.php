<?php

require '../vendor/autoload.php';

	if(isset($_FILES['monfichier'])){
		$tmpName=$_FILES['monfichier']['tmp_name'];
		$name=$_FILES['monfichier']['name'];
		$size=$_FILES['monfichier']['size'];
		$error=$_FILES['monfichier']['error'];
		$type=$_FILES['monfichier']['type'];

        $tabExtension=explode('.', $name);
        $extensionFichier=strtolower(end($tabExtension));

        $extensionsAutorisees = ['jpg', 'jpeg', 'gif', 'png', 'pdf', 'mpeg4', 'mpg4', 'mkv', 'wave', 'mp3', 'flac', 'wav', 'ogg'];
        $tailleMax=500000;

        if(in_array($extensionFichier, $extensionsAutorisees) && $size <= $tailleMax && $error == 0){
            
            $uniqueName=uniqid('', true);
            $nomDestination=$uniqueName.'.'.$extension;

            move_uploaded_file($tmpName, './stockage/'.$nomDestination);
        }
        else{
            echo 'Tranfert de fichier non autorisé ou erreur transfert';

        
        }
		


	}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
        <form action="index.php" method="POST" enctype="multipart/form-data">
            <label for="file">fichier</label>
            <input type="file" name="file">
            <button type="submit">Enregistrer</button>
        </form>
    </body>

</html>

