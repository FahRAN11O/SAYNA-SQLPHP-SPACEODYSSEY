<?php
require_once('../models/missions.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer la valeur de la date depuis le formulaire
        $nom = $_POST["nomMission"];
        $objectif = $_POST["objectifMission"];
        $nombreAstro=$_POST["nombreAstro"];
        $vaisseau=$_POST["vaisseauMission"];
        $dateDebut = $_POST["dateDebut"];
        $dateFin = $_POST["dateFin"];
        $status = $_POST["status"];

        $mission = new Missions();
        $mission->creerMission($nom, $objectif, $vaisseau, $dateDebut, $dateFin, $status);
        include ('../views/missionView.php');         
    }


?>