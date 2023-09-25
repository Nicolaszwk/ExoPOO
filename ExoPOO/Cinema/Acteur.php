<?php
class Acteur extends Personne {

    public array $castings; 

    public function __construct(string $prenom, string $nom, string $sexe, string $dateNaissance) {
        parent::__construct($prenom, $nom, $sexe, $dateNaissance);

        $this->castings = [];
    }

    public function acteurInformations() {
        echo "Prenom: " . $this->getPrenom() . "<br>";
        echo "Nom: " . $this->getNom() . "<br>";
        echo "Sexe: " . $this->getSexe() . "<br>";
        echo "Date de naissance: " . $this->getDateNaissance() . "<br>";
    }

    //Personne ou Acteur, je sais pas
    public function ajoutCasting(Casting $castings) {
        $this->castings[] = $castings;
    }
}


?>