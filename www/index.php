<?php
//$pathToApp = realpath(__DIR__ . '../../config/app.php');
// Incluez le fichier en utilisant le chemin absolu
//include $pathToApp;

// Incluez le fichier en utilisant le chemin absolu

$pathAllmin = 'plugins/fontawesome-free/css/all.min.css';
$pathAdminlte = 'dist/css/adminlte.min.css';

include '../app/views/header.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NASA APOD Dashboard</title>
    <style>
        /* Ajout du CSS */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        #apod-container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        #apod-image {
            width: 100%;
            height: auto;
        }

        #apod-title {
            font-size: 1.5em;
            margin: 10px 0;
        }
    </style>
</head>
<body>
    <div id="apod-container">
        <h1>NASA APOD Dashboard</h1>
        <img id="apod-image" src="" alt="Astronomy Picture of the Day">
        <h2 id="apod-title"></h2>
    </div>

    <script >

    document.addEventListener("DOMContentLoaded", function() {
    const apiKey = 'fDCjZLXPfzfaMtewCnaPWZKibK1MSf6klHSJ06xB';
    const apiUrl = `https://api.nasa.gov/planetary/apod?api_key=${apiKey}`;

    // Obtenez les éléments du DOM pour les mettre à jour
    const apodImage = document.getElementById('apod-image');
    const apodTitle = document.getElementById('apod-title');

    // Effectuez une requête à l'API de la NASA
    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            // Mettez à jour l'image et le titre avec les données de l'API
            apodImage.src = data.url;
            apodTitle.textContent = data.title;
        })
        .catch(error => console.error('Error fetching APOD data:', error));
    });


    </script>
</body>
</html>
