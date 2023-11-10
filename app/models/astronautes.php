<?php

class Astronautes{
    private $nom;
    private $prenom;
    private $anneeService;
    private $etatSante;
    private $taille;
    private $poids;
    private $nationalite;
    private $mission;

    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom=$nom;
    }


    public function getPrenom(){
        return $this->prenom;
    }

    public function setPrenom($prenom){
        $this->prenom=$prenom;
    }

    public function getAnneeService(){
        return $this->anneeService;
    }

    public function setEtatSante($etatSante){
        $this->etatSante=$etatSante;
    }

    public function getTaille(){
        return $this->taille;
    }

    public function setTaille($taille){
        $this->taille=$taille;
    }

    public function getPoids(){
        return $this->poids;
    }

    public function setPoids($poids){
        $this->poids=$poids;
    }

    public function getNationalite(){
        return $this->nationalite;
    }

    public function setNationalite($nationalite){
        $this->nationalite=$nationalite;
    }


    public function getMission(){
        return $this->mission;
    }

    public function setMission($mission){
        $this->mission=$mission;
    }
}
?>