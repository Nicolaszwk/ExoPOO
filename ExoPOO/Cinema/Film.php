<?php
class Film{

    public array $castings;

    public function __construct(){
        $this->castings = [];
    } 

    //Pas sur
    public function ajoutCasting(Film $castings) {
        $this->castings[] = $castings;
    }
}




?>