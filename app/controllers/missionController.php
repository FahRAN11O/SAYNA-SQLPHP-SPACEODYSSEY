<?php
require_once('../models/missions.php');

    // Incluez le fichier en utilisant le chemin absolu
$pathAllmin = /*realpath(__DIR__ . */'../../www/plugins/fontawesome-free/css/all.min.css'/*)*/;
$pathAdminlte = /*realpath(__DIR__ . */'../../www/dist/css/adminlte.min.css'/*)*/;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupérer les valeurs depuis le formulaire
        $missionInstance = new Missions();
        $nom = $_POST["nomMission"];
        $objectif = $_POST["objectifMission"];
        $nombreAstro=$_POST["nombreAstro"];
        $vaisseau=$_POST["vaisseauMission"];
        $dateDebut = $_POST["dateDebut"];
        $dateFin = $_POST["dateFin"];
        $status = $_POST["status"];


        $idMissionKey=$missionInstance->getId($nom, $objectif);
        foreach ($idMissionKey as $missionKey) {
            $id = $missionKey["id"];
          }
        $mission = new Missions();
        $mission->creerMission($nom, $objectif, $vaisseau, $dateDebut, $dateFin, $status);



    include '../views/header.php';


     echo ' <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Mission '.$nom.':Ajouter Astronautes <!--<small>jQuery Validation</small>--></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" novalidate="novalidate" method="POST" action="astronauteController.php">
                ';
                for ($i=1; $i <$nombreAstro+1 ; $i++) { 
                echo' 
                <h1 class="m-0">Astronaute numero :'.$i.'</h1>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nom:</label>
                    <input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="Entre le nom">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Prenom(s):</label>
                    <input type="text" name="prenom" class="form-control" id="exampleInputEmail1" placeholder="Prénom de l\'astro">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Date de naissance</label>
                    <input class="form-control" type="date" id="data" name="dateNaissance" placeholder="Date de naissance" required>
                  </div>

                  <div class="form-group">
                  <label for="exampleInputPassword1">Année de service:</label>
                  <input type="number" name="anneeService" class="form-control" id="exampleInputEmail1" placeholder="Annee de service">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Nationalité:</label>
                    <input type="text" name="nationalite" class="form-control" id="exampleInputEmail1" placeholder="Nationalité">
                  </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Etat de santé:</label> 
                    <select name="etatSante" id="">
                      <option value="Bien">bien</option>
                      <option value="Mal">mal</option>
                      <option value="Decédé">decédé</option>
                    </select>
                  </div>


                  <div class="form-group">
                    <label for="exampleInputPassword1">taille (cm):</label>
                    <input type="number" name="taille" class="form-control" id="exampleInputEmail1" placeholder="taille en cm">
                  </div>

                  
                
                  <div class="form-group">
                    <label for="exampleInputPassword1">Poids (Kg):</label>
                    <input type="number" name="poids" class="form-control" id="exampleInputEmail1" placeholder="Poids en Kg">
                  </div>
                  

                  <div class="form-group">
                    <label for="exampleInputPassword1">Mission:'.$nom.'</label>
                    <input type="text" name="mission_id" class="form-control" id="exampleInputEmail1" placeholder="mission_id" value="'.$id.'" >

                  </div>

                </div>
                <!-- /.card-body -->';
            }
            //Fin boucle

                echo'<div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    <!-- terminer ici-->

</body>
</html>
';




    }


?>