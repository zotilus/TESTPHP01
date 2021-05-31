<?php
require_once "ampli.php";  
require_once "guitare.php"; 
require_once "plectre.php"; 


echo ("<center>Salut pour jouer de la guitare ,il te faut : </center>" . "<br>");
echo ("<center>-une guitare forcement</center>");
echo ("<center>-un ampli ,si ta guitare est electrique</center>");
echo ("<center>-un plectre ou un mediator pour gratter les cordes</center>" . "" . "<br><br>");


//on créer nos ampli;
$ampli01 = new Ampli("<br>"." Fender,hmmm,bon choix! mais,il te faut un ampli electrique.<br>", true);
$ampli02 = new Ampli("<br>"."en accoustique, tu peux jouer sans ampli ou avec, si c'est une electro accoustique.<br>", true);
$ampli03 = new Ampli("<br>"."avec le banjo,pas besoin d'ampli.<br>", false);
$ampli04 = new Ampli("<br>"." avec un chat? tu peux toujours essayer de le brancher !<br>", false);


//$ampli01->setState(true);

//on créer nos guitares
$guitare01 = new Guitare("fender", $ampli01);
$guitare02 = new Guitare("accoustique", $ampli02);
$guitare03 = new Guitare("banjo", $ampli03);
$guitare04 = new Guitare("chat", $ampli04);
// $guitare03 =new Guitare("banjo",new Ampli("ampli03",false));//deconseillé

//on appel la fonction afficheTypeGuitare de CHAQUE guitare
$guitare01->afficheTypeGuitare();
$guitare02->afficheTypeGuitare();
$guitare03->afficheTypeGuitare();
$guitare04->afficheTypeGuitare();



//fender
echo $guitare01->getAmpli()->getNom();
$guitare01->setAmpli($ampli01);
$guitare01->getAmpli()->setState(true);
echo $guitare01->getAmpli()->getstate();
echo $guitare01->getAmpli()->brancherAmpli(true);
$mediatorEnMain = new Plectre();
$mediatorEnMain->PlectreON();

//accoustique
echo $guitare02->getAmpli()->getNom();
$guitare02->setAmpli($ampli02);
$guitare02->getAmpli()->setState(true);
echo $guitare02->getAmpli()->getstate();
echo " ou ";
$guitare02->getAmpli()->setState(false);
echo $guitare02->getAmpli()->getstate();
$mediatorEnMain = new Plectre();
$mediatorEnMain->PlectreON();
//echo $guitare01->getAmpli()->brancherAmpli(false);

//banjo
echo $guitare03->getAmpli()->getNom();
$guitare03->setAmpli($ampli03);
$guitare03->getAmpli()->setState(false);
echo $guitare03->getAmpli()->getstate();
$mediatorEnMain = new Plectre();
$mediatorEnMain->PlectreON();

//chat
echo $guitare04->getAmpli()->getNom();
$guitare04->setAmpli($ampli04);
$guitare04->getAmpli()->setState(false);
echo $guitare04->getAmpli()->getstate();
$mediatorEnMain = new Plectre();
$mediatorEnMain->PlectreOFF();
//echo $guitare04->getAmpli()->brancherAmpli(false);


echo "<br>";
//allumé
//echo $guitare01->getAmpli()->getNom();
$guitare01->getAmpli()->setState(true); //on appel l'ampli que l'on a definit avant
echo $guitare01->getAmpli()->getstate();
echo $guitare01->getAmpli()->brancherAmpli(true);

//eteinds
$guitare01->getAmpli()->setState(false); //on appel l'ampli que l'on a definit avant brancherAmpli
echo $guitare01->getAmpli()->getstate();
echo $guitare01->getAmpli()->brancherAmpli(false);

echo "<br>";

$mediatorEnMain = new Plectre();
$mediatorEnMain->PlectreON();
var_dump($mediatorEnMain) ;
$mediatorEnMain->PlectreOFF();
var_dump($mediatorEnMain) ;


//echo $etatPlectre;
