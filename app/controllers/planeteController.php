<?php

require_once('../models/astronautes.php');
require_once('../models/planetes.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer la valeur de la date depuis le formulaire
        $nom = $_POST["nom"];
        $circonference= $_POST["circonference"];
        $distance=$_POST["distance"];
        
        $planete = new Planetes();
        $planete->ajouterPlanete($nom, $circonference, $distance);

    }    
?>