<?php
class Missions{
    private $nom;
    private $objectif;
    private $dateDebut;
    private $dateFin;
    private $status;
    private $cout;
    private $vaisseau;
    private $planete;


    public function getNom(){
        return $this->nom;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getObjectif(){
        return $this->objectif;
    }

    public function setObjectif($objectif){
        $this->objectif = $objectif;
    }

    public function getDateFin(){
        return $this->dateFin;
    }

    public function setDateFin($dateFin){
        $this->dateFin = $dateFin;
    }

    public function getStatus(){
        return $this->status; 
    }

    public function setStatus($status){
        $this->status = $status;
    }

    public function getCout(){
        return $this->cout;
    }

    public function setCout($cout){
        $this->cout = $cout;
    }

    public function getVaisseau(){
        return $this->vaisseau;
    }

    public function setVaisseau($vaisseau){
        $this->vaisseau = $vaisseau;
    }

    public function getPlanete(){
        return $this->planete;
    }

    public function setPlanete($planete){
        $this->planete=$planete;
    }


}

?>






