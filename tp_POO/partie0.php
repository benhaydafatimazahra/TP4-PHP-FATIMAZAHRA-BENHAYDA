<?php
class Voiture {
    public $marque;
    public $couleur;

    public function setMarque($m) {
        $this->marque = $m;      // $this = l'objet qui appelle la méthode
    }

    public function setCouleur($c){
        $this->couleur=$c;
    }

    public function afficher() {
        echo "Marque : " . $this->marque ." --> " ."couleur : " .$this->couleur;
    }
}

$v1 = new Voiture();
$v1->setMarque("Toyota");
$v1->afficher();
echo"<br>";
$v2= new Voiture();
$v2->setMarque("Renault");
$v2->afficher();
echo"<br>";
$v2->setCouleur("Rouge");
$v2->afficher();
echo"<br>";



