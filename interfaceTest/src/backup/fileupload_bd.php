<html>
<body>
<?php

    // connexion à la BD
    // --> Cf. Tutoriel BD

    // définition de l'espace destiné à recevoir les fichiers
    $repository = $_SERVER["DOCUMENT_ROOT"];
    $extensionsAutorisees = array("jpeg", "jpg", "gif");

    // si un fichier maphoto a bien été transféré
    if (is_uploaded_file($_FILES["maphoto"]["tmp_name"])) {
        // recupération de l'extension du fichier
        // autrement dit tout ce qu'il y a après le dernier point (inclus)
        $nomPhoto = $_FILES["maphoto"]["name"];
        $extension = substr($nomPhoto, strrpos($nomPhoto, "."));
        // Contrôle de l'extension du fichier
        if (!(in_array($extension, $extensionsAutorisees))) {
            die("Le fichier n'a pas l'extension attendue");
        }
        $cheminPhoto = $login . "_photo" . $extension;
        rename($_FILES["maphoto"]["tmp_name"], $repository.$cheminPhoto);
    }
    if (is_uploaded_file($_FILES["monicone"]["tmp_name"])) {
        // recupération de l'extension du fichier
        // autrement dit tout ce qu'il y a après le dernier point (inclus)
        $monIcone = $_FILES["monicone"]["name"];
        $extension = substr($monIcone, strrpos($monIcone,"."));
        // Contrôle de l'extension du fichier
        if (!(in_array($extension, $extensionsAutorisees))) {
            die("Le fichier n'a pas l'extension attendue");
        }
        $cheminIcone = $login . "_icone" . $extension;
        rename($_FILES["monicone"]["tmp_name"], $repository.$cheminIcone);
    }
    
// Exemple de requete de stockage en BD avec MySQL
// et une table qui aurait pu être créée par
// CREATE TABLE matable (login varchar(64), image varchar(64), icone varchar(64));
mysql_query("INSERT INTO matable (login,image,icone) VALUES (".
            "'" . addslashes($login). "','" . addslashes($cheminPhoto) . "',".
            "'" . addslashes($cheminIcone) . "')");
?>
</body>
</html>