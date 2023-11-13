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


    public function ajouterPlanete($nom, $circonference, $distance){
        try{
            require('../../config/connexion.php');
           
           $query = "INSERT INTO planetes (nom, circonference, distance_terre) 
            VALUES ('$nom','$circonference','$distance');";
    
            $pdo->query($query);
        }catch(PDOException $e){
            //En cas d'erreur de connexion, affichage du message d'erreur
            echo 'Erreur de connexion : '. $e->getMessage();
        }
    
        }
}

?>