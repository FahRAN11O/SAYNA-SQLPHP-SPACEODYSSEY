<?php

require_once('../models/astronautes.php');

require_once('../models/missions.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer la valeur de la date depuis le formulaire
        $missionInstance = new Missions();


        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $dateNaissance=$_POST["dateNaissance"];
        $anneeService=$_POST["anneeService"];
        $nationalite = $_POST["nationalite"];
        $etatSante = $_POST["etatSante"];
        $taille = $_POST["taille"];
        $poids = $_POST["poids"];
        $missionId = $_POST["mission_id"];

        $astronaute = new Astronautes();
        $astronaute->ajouterAstronaute($nom, $prenom, $dateNaissance,
                                        $anneeService, $nationalite, $etatSante,
                                        $taille, $poids, $missionId);
        
    }    
?>