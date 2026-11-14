<?php
class Personne {
    private string $nom = "";
    private string $prenom = "";
    private string $dateNaissance = "";

    public function __set(string $name, mixed $value): void {
        // TODO : n'autoriser que les propriétés existantes
      
        // Indice : property_exists($this, $name)
        if (property_exists($this,$name)){
            $this->nom=$value;
        }
        // Sinon : afficher un message "Propriété $name inexistante"
        else {
            echo "Propriété $name inexistante" ;
        }
    }


    public function __get(string $name): mixed {
        // TODO : retourner la valeur si la propriété existe, sinon null
        if (property_exists($this, $name)) {
           return $this->$name;
        }
        return null;
    }

    public function __isset(string $name): bool {
        // TODO
        return property_exists($this, $name) && isset($this->$name);
    }

    public function __unset(string $name): void {
        // TODO : remettre la propriété à "" (chaîne vide)
        if (property_exists($this, $name)) {
        $this->$name = ""; 
    }
    }
}

$p = new Personne();
echo " <br>" ;
$p->nom = "Hachimi";             // → __set
echo " <br>" ;
echo $p->nom . PHP_EOL;         // → __get
echo " <br>" ;
var_dump(isset($p->nom));       // → __isset
echo " <br>" ;
unset($p->nom);                 // → __unset
echo " <br>" ;
var_dump(isset($p->nom));
echo " <br>" ;
$p->telephone = "0600000000";   // propriété inexistante : que se passe-t-il ?
echo " <br>" ;
$p->nom = "X" ;
echo $p->nom . PHP_EOL;