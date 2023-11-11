<?php
class Vaisseaux{


    private $nom;
    private $reference;
    private $capacite;
    private $vitesse;
    private $autonomie;

    public function getNomVaisseau($id){
        require('../../config/connexion.php');
        try{  
            $requete = "SELECT nom FROM vaisseaux WHERE id = '$id';";
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

        return $this->vaisseau;
    }

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function getReference(){
        return $this->reference;
    }

    public function setReference($reference){
        $this->reference=$reference;
    }

    public function getCapacite(){
        return $this->capacite;
    }

    public function setCapacite(){
        $this->capacite=$capacite;
    }

    public function getVitesse(){
        return $this->vitesse;
    }

    public function setVitesse($vitesse){
        $this->vitesse=$vitesse;
    }

    public function getAutonomie(){
        return $this->autonomie;
    }

    public function setAutonomie($autonomie){
        $this->autonomie = $autonomie;
    }

    public function allVaisseaux(){
    require('../../../config/connexion.php');
    try{  
        $requete = "SELECT * FROM vaisseaux;";
        $statement = $pdo->prepare($requete);

        //Executez la requête
        $statement->execute();

        $allVaisseau = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $allVaisseau;

    }catch(PDOException $e){
        //En cas d'erreur de connexion, affichage du message d'erreur
        echo 'Erreur de connexion : '. $e->getMessage();
    }

    }

    public function listeVaisseauxLibres(){
        return $VaisseauxLibres;
    }



}


?>