<?php
class Planetes{
    private $nom;
    private $distanceTerre;
    private $circonference;


    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getDistanceTerre(){
        return $this->distanceTerre; 
    }

    public function setDistanceTerre($distanceTerre){
        $this->distanceTerre = $distanceTerre;
    }
}

?>