<?php
declare(strict_types=1);

class ConsoleDeJeux {
    public string $constructeur;
    public string $modele;
    public DateTime $dateAchat;
    public ?Jeu $jeu = null;
    public int $batterie;

    public function __construct(string $constructeur, string $modele){
        $this->constructeur = $constructeur;
        $this->modele = $modele;
        $this->dateAchat = new DateTime();//normalement prend la date du jour
        $this->batterie = 100;
    }

    //fonction qui recharge de 10 la batterie
    public function chargerConsole():void{
        if($this->batterie < 91){
            $this->batterie = $this->batterie + 10;
        }
        echo "Batterie chargée à : ". $this->batterie."<br>";
    }

    //fonction qui permet d'insérer un jeu dans la console
    public function insererJeu(Jeu $jeu):void{
        if($this->jeu != null){
            $this->jeu = $jeu;
            echo "Vous avez inséré le jeu : ".$this->jeu->getTitre()."<br>";
        }else{
            echo "Veuillez sortir le jeu précédent de la console avant d'en mettre un nouveau.";
        }
    }
    
    //fonction qui permet de sortir un jeu de la console
    public function sortirJeu():void{
        $this->jeu = null;
        echo "Vous avez sorti le jeu de votre console. <br>";
    }

    //fonction qui permet de jouer, du coup la batterie diminue de 5
    public function jouer():void{
        if(!empty($this->jeu) && $this->batterie > 0){
            echo "<h3>Vous jouez à : </h3>".$this->jeu->afficheDetail();
            $this->batterie = $this->batterie - 5;
        }elseif(empty($this->jeu)){
            echo "Inserez un jeu.<br>";
        }else{
            echo "Vous n'avez plus de batterie, charger votre console.<br>";
        }
    }
    
    //fonction qui retourne le niveau de la batterie
    public function getNiveauBatterie():void{
        echo "Le niveau de votre batterie est de : ".$this->batterie."%<br>";
    }
}
