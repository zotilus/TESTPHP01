
<?php

interface employé
{
    public function Travail();
}

class patron extends humain implements employé
{
    // public int $age = 42;
    // public string $LieuDTravail;

    public function Travail()
    {
        $this->age = 42;
        $this->LieuDeTravail = "de chez lui";
        echo $this->LieuDeTravail;
        echo $this->age = 42;
    }
    public $info = "hdhdfhd";
    public function afficheTypePersonnel($info)
    {
        $this->info = $info;
        var_dump($info);
    }
}


class humain
{
    public string $sexe = "";
    public int $age;

    public function __construct(string $sexe, $age)
    {
        $this->age = $age;
        $this->sexe = $sexe;
    }

    public function afficherTypeHumain()
    {
        echo $this->sexe ;
        echo $this->age;
    }
    // class Boite
    // {
    //     public string $NomDeBoite = "Biscuit";
    //     public function AfficheNomBoite()
    //     {
    //         echo "Entreprise : $this->NomDeBoite";
    //     }
}


$Patron01 = new Patron();
$Patron01->afficheTypePersonnel("yoyo");
$Patron01->afficherTypeHumain("42", "homme")

?>