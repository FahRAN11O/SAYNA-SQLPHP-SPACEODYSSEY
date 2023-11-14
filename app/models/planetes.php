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


    public function getNomPlanete($id){
        require('../../config/connexion.php');
        try{  
            $requete = "SELECT nom FROM planetes WHERE id = '$id';";
            $statement = $pdo->prepare($requete);
    
            //Executez la requête
            $statement->execute();
    
            $nomPlanete = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $nomPlanete;
            $statement->close();
    
        }catch(PDOException $e){
            //En cas d'erreur de connexion, affichage du message d'erreur
            echo 'Erreur de connexion : '. $e->getMessage();
        }
    }

    public function ajouterPlanete($nom, $circonference, $distance){
        try{
            require('../../config/connexion.php');
           
           $query = "INSERT INTO planetes (nom, circonference, distance_terre, etat) 
            VALUES ('$nom','$circonference','$distance', 'libre');";
    
            $pdo->query($query);
        }catch(PDOException $e){
            //En cas d'erreur de connexion, affichage du message d'erreur
            echo 'Erreur de connexion : '. $e->getMessage();
        }
    
        }


        public function allPlanetesLibre(){
            require('../../../config/connexion.php');
            try{  
                $requete = "SELECT * FROM planetes WHERE etat='libre';";
                $statement = $pdo->prepare($requete);
        
                //Executez la requête
                $statement->execute();
        
                $allPlanetesLibres = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $allPlanetesLibres;
        
            }catch(PDOException $e){
                //En cas d'erreur de connexion, affichage du message d'erreur
                echo 'Erreur de connexion : '. $e->getMessage();
            }
        
            }

            public function allPlanetes(){
                require('../../config/connexion.php');
                try{  
                    $requete = "SELECT * FROM planetes;";
                    $statement = $pdo->prepare($requete);
            
                    //Executez la requête
                    $statement->execute();
            
                    $allPlanetes = $statement->fetchAll(PDO::FETCH_ASSOC);
                    return $allPlanetes;
            
                }catch(PDOException $e){
                    //En cas d'erreur de connexion, affichage du message d'erreur
                    echo 'Erreur de connexion : '. $e->getMessage();
                }
            
                }


    public function changerEtatPlanete($id){
        try{
            require('../../config/connexion.php');
           
           $query = "UPDATE planetes SET etat = 'engage' WHERE id = '$id';";
    
            $pdo->query($query);
        }catch(PDOException $e){
            //En cas d'erreur de connexion, affichage du message d'erreur
            echo 'Erreur de connexion : '. $e->getMessage();
        }
    }
}

?>