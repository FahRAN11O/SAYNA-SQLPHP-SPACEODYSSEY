<?php

require_once('../models/astronautes.php');

require_once('../models/missions.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer la valeur de la date depuis le formulaire
        $nombreAstro = $_POST["nombreAstro"];

        for ($i=1; $i <$nombreAstro+1 ; $i++) { 
        $missionInstance = new Missions();


        $nom = $_POST["nom".$i];
        $prenom = $_POST["prenom".$i];
        $dateNaissance=$_POST["dateNaissance".$i];
        $anneeService=$_POST["anneeService".$i];
        $nationalite = $_POST["nationalite".$i];
        $etatSante = $_POST["etatSante".$i];
        $taille = $_POST["taille".$i];
        $poids = $_POST["poids".$i];
        $missionId = $_POST["mission_id".$i];

        $astronaute = new Astronautes();
        $astronaute->ajouterAstronaute($nom, $prenom, $dateNaissance,
                                        $anneeService, $nationalite, $etatSante,
                                        $taille, $poids, $missionId);

        } 

                echo '<h1 >Astronaute ajouté. Voir sur  <a href="/StellarTech/app/views/missionView.php">liste planetes</a>  <h1>  ';
   
    }    
?>