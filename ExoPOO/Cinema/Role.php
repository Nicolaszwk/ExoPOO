<?php
class Role{

    public array $castings;

    public function __construct(){
        $this->castings = [];
    } 

    //Pas sur   
    public function ajoutCasting(Role $castings) {
        $this->castings[] = $castings;
    }
}




?>
