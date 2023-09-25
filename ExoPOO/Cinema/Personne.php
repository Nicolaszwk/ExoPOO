<?php
class Personne{

    public string $prenom;
    public string $nom;
    public string $sexe;
    public Datetime $dateNaissance;

    public function __construct(string $prenom, string $nom, string $sexe, string $dateNaissance) {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->sexe = $sexe;
        $dateNaissance = new DateTime($dateNaissance);
        $this->dateNaissance = $dateNaissance;
    }

public function getPrenom() {
    return $this->prenom;
}
public function setPrenom($prenom){
    $this->prenom = $prenom;
}
public function getnom() {
    return $this->nom;
}
public function setnom($nom){
    $this->nom = $nom;
}
public function getsexe() {
    return $this->sexe;
}
public function setsexe($sexe){
    $this->sexe = $sexe;
}
public function getDateNaissance(){
    return $this->dateNaissance->format('d/m/Y');
}
public function setdateNaissance($dateNaissance){
    $this->dateNaissance = $dateNaissance;
}



}
?>