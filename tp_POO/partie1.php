<?php
class Personne {

    // ----- Attributs publics -----
    public string $nom;
    public string $prenom;

    // ----- Attributs privés -----
    private string $dateNaissance;   // format "AAAA-MM-JJ"
    private string $villeNaissance;
   protected string $cin;
   
    // ----- Constructeur -----
    public function __construct(
        string $nom = "",
        string $prenom = "",
        string $dateNaissance = "1970-01-01",
        string $villeNaissance = "",
        string $cin = ""
    ) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->dateNaissance = $dateNaissance;
        $this->villeNaissance = $villeNaissance;
        $this->cin = $cin;
        
        echo "Création " . __CLASS__ . " : " . ($nom ? "$prenom $nom" : "vide") . PHP_EOL;
    }

    // ----- Méthode publique -----
    public function getName(): string {
        // TODO : retourner "Prénom Nom"
        return $this->prenom . "  ".$this->nom ;
    }

    // ----- Méthode privée -----
    private function getAge(): int {
        // TODO : calculer l'âge avec DateTime
        // Indice : $naissance = new DateTime($this->dateNaissance);
        $naissance = new DateTime($this->dateNaissance);
        //          $aujourdhui = new DateTime();
        $aujourdhui = new DateTime();
        //          $naissance->diff($aujourdhui)->y
        return $naissance->diff($aujourdhui)->y ;

        }
        public function __destruct(){
            echo"déstruction de la classe : ". __CLASS__ ."<br>";

    }
}
$p = new Personne("Hachimi", "Sara", "2000-05-14", "Marrakech", "EE123456");

echo $p->getName() . PHP_EOL;   // à vous de prédire le résultat
echo "<br>" ;
echo $p->nom . PHP_EOL;
echo "<br>" ;

?>