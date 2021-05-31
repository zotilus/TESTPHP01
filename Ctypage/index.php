<?php
declare(strict_types=1);
require_once('jeu.php');
require_once('console.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mouhahaha</title>
</head>
<body>
<?php
$desc1 = "Oubliez tout ce que vous savez sur les jeux The Legend of Zelda. Plongez dans un monde de découverte, d'exploration et d'aventure dans The Legend of Zelda: Breath of the Wild, un nouveau jeu qui vient bouleverser la série à succès.";
//format date w3c --> 2005-08-15T15:52:01+00:00
$date1 = new DateTime('2017-03-03T09:00:00+00:00');

$jeu1 = new Jeu("Zelda", $date1, array('Action', 'Aventure'), $desc1, 1, "Nintendo", "Nintendo");

$desc2 = "<p>Hades est un rogue-like et dungeon crawler qui associe le meilleur des titres de Supergiant salués par la critique. Il combine l'action effrénée de Bastion, la profondeur et l'atmosphère très riche de Transistor, ainsi que la narration centrée sur les personnages qui caractérise Pyre.</p><h4>LUTTEZ POUR ÉCHAPPER AUX ENFERS</h4><p>Dans la peau de l'immortel prince des Enfers, vous manierez les pouvoirs et les armes mythiques de l'Olympe pour vous libérer des griffes du dieu des morts en personne, développant vos forces et dévoilant de nouveaux secrets à chaque nouvelle tentative d'évasion.</p>";
$date1 = new DateTime('2020-09-19T18:00:00+00:00');
$jeu2 = new Jeu("Hades", $date1, array('Aventure', 'RPG', 'Action'), $desc2, 1, "Supergiant Games, Nintendo", "Supergiant Games");

$switch = new ConsoleDeJeux("Nintendo", "Switch");
$switch->jouer();
$switch->insererJeu($jeu1);
$switch->jouer();
$switch->sortirJeu();
$switch->insererJeu($jeu2);
$switch->jouer();
$switch->getNiveauBatterie();


?>
</body>
</html>