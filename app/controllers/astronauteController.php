<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer la valeur de la date depuis le formulaire
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $dateNaissance=$_POST["dateNaissance"];
        $anneeService=$_POST["anneeService"];
        $nationalite = $_POST["nationalite"];
        $etatSante = $_POST["etatSante"];
        $taille = $_POST["taille"];
        $poids = $_POST["poids"];
        $idMission = $_POST["idMission"];

        $mission = new Missions();
        $mission->creerMission($nom, $objectif, $vaisseau, $dateDebut, $dateFin, $status);
}    
?>