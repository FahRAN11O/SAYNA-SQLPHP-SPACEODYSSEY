<?php
// Incluez le fichier en utilisant le chemin absolu
$pathAllmin = /*realpath(__DIR__ . */'../../../www/plugins/fontawesome-free/css/all.min.css'/*)*/;
$pathAdminlte = /*realpath(__DIR__ . */'../../../www/dist/css/adminlte.min.css'/*)*/;

include '../header.php';

require_once('../../models/vaisseaux.php');

require_once('../../models/planetes.php');
?>
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ajouter mission <!--<small>jQuery Validation</small>--></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" novalidate="novalidate" method="POST" action="../../controllers/missionController.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mission</label>
                    <input type="text" name="nomMission" class="form-control" id="exampleInputEmail1" placeholder="Entre le nom">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Objectif</label>
                    <input type="text" name="objectifMission" class="form-control" id="exampleInputEmail1" placeholder="L'objectif du mission">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Planete:</label>
                    <select name="planeteId" id="">
                      <?php
                        $planetes = new Planetes();
                        
                        $planeteList = $planetes->allPlanetesLibre();
                        //var_dump($planeteList);
                        foreach ($planeteList as $planete) {
                          echo '<option value="'.$planete['id'].'">'.$planete['nom'].'</option>';
                        }
                      ?>
                      <!--<option value="1">XPART3454</option>
                      <option value="2">GF6785</option>-->
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Nombre Astronautes:</label>
                    <input type="number" name="nombreAstro" class="form-control" id="exampleInputEmail1" placeholder="Nombre des Astronautes">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Vaisseaux:</label>
                    <select name="vaisseauMission" id="">
                      <?php
                        $vaisseaux = new Vaisseaux();
                        $vaisseauxList = $vaisseaux->allVaisseauxLibre();
                        foreach ($vaisseauxList as $vaisseau) {
                          echo '<option value="'.$vaisseau['id'].'">'.$vaisseau['nom'].'(capacité:'.$vaisseau["capacite"].')</option>';
                        }
                      ?>
                      <!--<option value="1">XPART3454</option>
                      <option value="2">GF6785</option>-->
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Debut</label>
                    <input class="form-control" type="date" id="data" name="dateDebut" placeholder="Date de Debut" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Fin</label>
                    <input class="form-control" type="date" id="data" name="dateFin" placeholder="Date de fin" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Status:</label> 
                    <select name="status" id="">
                      <option value="Début">Debut</option>
                      <option value="En cours">En cours</option>
                      <option value="Fini">Fini</option>
                      <option value="Abandonné">Abandonné</option>
                    </select>
                  </div>

                  


                  <!--<div class="form-group mb-0">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="terms" class="custom-control-input" id="exampleCheck1">
                      <label class="custom-control-label" for="exampleCheck1">I agree to the <a href="#">terms of service</a>.</label>
                    </div>
                  </div>-->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
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

