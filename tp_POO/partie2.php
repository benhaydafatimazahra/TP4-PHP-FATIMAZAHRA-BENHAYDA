<?php
class Voiture {
    public function __construct(public string $couleur) {
        echo "Voiture {$this->couleur} créée.<br>" . PHP_EOL;
    }

    public function __destruct() {
        echo "Voiture {$this->couleur} détruite.<br>" . PHP_EOL;
    }
    
}

$maVoiture = new Voiture("Blanche");
unset($maVoiture);          // appelle __destruct()
echo "Fin du script.<br>" . PHP_EOL;

$a = new Voiture("Bleu");

$b=new Voiture("vert");



?>