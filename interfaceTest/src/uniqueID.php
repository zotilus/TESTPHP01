<?php

require '../vendor/autoload.php';

	if(isset($_FILES['file'])){
		$tmpName=$_FILES['file']['tmp_name'];
		$name=$_FILES['file']['name'];
		$size=$_FILES['file']['size'];
		$error=$_FILES['file']['error'];
		$type=$_FILES['file']['type'];

        $tabExtension=explode('.', $name);
        $extension=strtolower(end($tabExtension));

        $extensionsAutorisees = ['jpg', 'jpeg', 'gif', 'png', 'pdf', 'mpeg4', 'mpg4', 'mkv', 'wave', 'mp3', 'flac', 'wav', 'ogg'];
        $tailleMax=500000;

        if(in_array($extension, $extensionsAutorisees) && $size <= $tailleMax && $error == 0){
            
            $uniqueName=uniqid('', true);
            $fileName=$uniqueName.'.'.$extension;

            move_uploaded_file($tmpName, './uploads/'.$fileName);
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

