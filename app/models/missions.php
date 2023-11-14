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

    //Getter et setter pour chaque variables (attributs)

    public function getId($nomMission, $objectif){
        require('../../config/connexion.php');
        try{  
            $requete = "SELECT id FROM missions WHERE nom = '$nomMission' && objectif='$objectif';";
            $statement = $pdo->prepare($requete);
    
            //Executez la requête
            $statement->execute();
    
            $id = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $id;
            $statement->close();
    
        }catch(PDOException $e){
            //En cas d'erreur de connexion, affichage du message d'erreur
            echo 'Erreur de connexion : '. $e->getMessage();
        }
    }



    public function getNomMission($id){
        require('../../config/connexion.php');
        try{  
            $requete = "SELECT nom FROM missions WHERE id = '$id';";
            $statement = $pdo->prepare($requete);
    
            //Executez la requête
            $statement->execute();
    
            $nom = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $nom;
            $statement->close();
    
        }catch(PDOException $e){
            //En cas d'erreur de connexion, affichage du message d'erreur
            echo 'Erreur de connexion : '. $e->getMessage();
        }
    }

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

    public function creerMission($nomMission, $objectif, $vaisseau, $dateDebut, $dateFin, $status, $planete){
    try{
        require('../../config/connexion.php');
       
       $query = "INSERT INTO missions (nom, objectif, vaisseau_id, date_debut, date_fin,status_mission, planete_id ) 
        VALUES ('$nomMission','$objectif','$vaisseau','$dateDebut','$dateFin','$status', '$planete');";

        $pdo->query($query);
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
            $statement->close();
    
        }catch(PDOException $e){
            //En cas d'erreur de connexion, affichage du message d'erreur
            echo 'Erreur de connexion : '. $e->getMessage();
        }
    }
}

?>






