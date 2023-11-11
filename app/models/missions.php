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

    public function creerMission($nomMission, $objectif, $vaisseau, $dateDebut, $dateFin, $status){
    try{
        require('../../config/connexion.php');
       
       $query = "INSERT INTO missions (nom, objectif, vaisseau_id, date_debut, date_fin,status_mission ) 
        VALUES ('$nomMission','$objectif','$vaisseau','$dateDebut','$dateFin','$status');";

        $pdo->query($query);
        $pdo->close();
    }catch(PDOException $e){
        //En cas d'erreur de connexion, affichage du message d'erreur
        echo 'Erreur de connexion : '. $e->getMessage();
    }

    }

    public function allMissions(){
        require('../../config/connexion.php');
        try{  
            $requete = "SELECT * FROM missions;";
            $statement = $pdo->prepare($requete);
    
            //Executez la requête
            $statement->execute();
    
            $allMission = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $allMission;
            $pdo->close();
    
        }catch(PDOException $e){
            //En cas d'erreur de connexion, affichage du message d'erreur
            echo 'Erreur de connexion : '. $e->getMessage();
        }
    }
}

?>






