<?php
class Realisateur extends Personne {

    public function __construct(string $prenom, string $nom, string $sexe, string $dateNaissance) {
        parent::__construct($prenom, $nom, $sexe, $dateNaissance);
    }

    public function realisateurInformations() {
        echo "Prenom: " . $this->getPrenom() . "<br>";
        echo "Nom: " . $this->getNom() . "<br>";
        echo "Sexe: " . $this->getSexe() . "<br>";
        echo "Date de naissance: " . $this->getDateNaissance() . "<br>";
    }
}


?>