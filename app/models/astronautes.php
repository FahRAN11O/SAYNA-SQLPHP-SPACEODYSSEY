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

    public function ajouterAstronaute($nom, $prenom, $dateNaissance,
                                    $anneeService, $nationalite, $etatSante,
                                    $taille, $poids, $missionId){
        try{
            require('../../config/connexion.php');
           
           $query = "INSERT INTO astronautes (nom, prenom, date_naissance,
                                     annee_service, nationalite, etat_sante,
                                     taille,poids, mission_id) 
            VALUES ('$nom','$prenom','$dateNaissance',
                    '$anneeService','$nationalite','$etatSante',
                    '$taille','$poids','$missionId');";
    
            $pdo->query($query);
        }catch(PDOException $e){
            //En cas d'erreur de connexion, affichage du message d'erreur
            echo 'Erreur de connexion : '. $e->getMessage();
        }
    
        }

        public function allAstronautesParMission($idMission){
            require('../../config/connexion.php');
            try{  
                $requete = "SELECT * FROM astronautes WHERE mission_id='$idMission';";
                $statement = $pdo->prepare($requete);
        
                //Executez la requête
                $statement->execute();
        
                $allAstro = $statement->fetchAll(PDO::FETCH_ASSOC);
                return $allAstro;
        
            }catch(PDOException $e){
                //En cas d'erreur de connexion, affichage du message d'erreur
                echo 'Erreur de connexion : '. $e->getMessage();
            }
        
            }
}
?>