<?php
declare(strict_types=1);

class Jeu {
    private string $titre;
    private DateTime $datePublication;
    private string $description;
    private array $categories;
    private int $nbJoueurs;
    private string $editeur;
    private string $developpeur;

    //constructeur
    public function __construct(string $titre, DateTime $datePublication, array $categories, string $description = '', int $nbJoueurs = 1, string $editeur = '', string $developpeur = ''){
        if(!$this->setTitre($titre)){
            echo "Le titre du jeu ne peut pas être vide.<br>";
        };
        $this->datePublication = $datePublication;
        $this->description = $description;
        if(!$this->setCategories($categories)){
            echo "La catégorie du jeu n'est pas renseignée.<br>";
        }
        $this->nbJoueurs = $nbJoueurs;
        $this->editeur = $editeur;
        $this->developpeur = $developpeur;
    }

    //fonction qui renvoie une chaine de caractère avec les infos sur le jeu
    public function afficheDetail():string{
        $mess = "<div class='jeu'><h2>".$this->getTitre()."</h2>";
        $mess.= "<ul><li>Date de sortie : ".$this->getDatePublication()->format('j/m/Y')."</li>";
        $mess.= "<li>Editeur : ".$this->getEditeur()." - Developpeur : ".$this->getDeveloppeur()."</li>";
        $mess.= "<li>Catégorie : ".$this->getCategoriesTexte()."</li>";
        $mess.= "<li>Nombre de Joueurs : ".$this->getNbJoueurs()."</li></ul>";
        $mess.= "<p><strong>Description : </strong><br>".$this->getDescription()."</p></div>";

        return $mess;
    }

    //accesseurs
    //titre
    public function setTitre(string $titre):bool{
        if(strlen("$titre") > 0){
            $this->titre = $titre;
            return true;
        }
        return false;
    }
    public function getTitre():string{
        return $this->titre;
    }
    //Date de publication
    public function setDatePublication(DateTime $date):void{
            $this->datePublication = $date;
    }
    public function getDatePublication():DateTime{
        return $this->datePublication;
    }
    //description
    public function setDescription(string $description):void{
        $this->description = $description;
    }
    public function getDescription():string{
    return $this->description;
    }

    //categorie
    public function setCategories(array $categories):bool{
        if(!empty($categories)){
            $this->categories = $categories;
            return true;
        }
        return false;
    }
    public function getCategories():array{
        return $this->categories;
    }
    public function getCategoriesTexte():string{
        $mess = '';
        foreach($this->categories as $ligne => $genre){
            $mess .= $genre.' ';
        }
        return $mess;
    }

    //nbJoueurs
    public function setNbJoueurs(int $nbJoueurs):void{
        $this->nbJoueurs = $nbJoueurs;
    }
    public function getNbJoueurs():int{
        return $this->nbJoueurs;
    }
    //Editeur
    public function setEditeur(string $editeur):void{
        $this->editeur = $editeur;
    }
    public function getEditeur():string{
        return $this->editeur;
    }
    //Developpeur
    public function setDeveloppeur(string $developpeur):void{
        $this->developpeur = $developpeur;
    }
    public function getDeveloppeur():string{
        return $this->developpeur;
    }
    
}
