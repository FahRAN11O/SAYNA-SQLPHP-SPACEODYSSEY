<?php
// Incluez le fichier en utilisant le chemin absolu

$pathAllmin = /*realpath(__DIR__ . */'../../www/plugins/fontawesome-free/css/all.min.css'/*)*/;
$pathAdminlte = /*realpath(__DIR__ . */'../../www/dist/css/adminlte.min.css'/*)*/;

include 'header.php';
require_once('../models/missions.php');
require_once('../models/vaisseaux.php');
require_once('../models/astronautes.php');
?>
<!--a href="./forms/planeteForm.php"><h2>Ajouter une planete</h2></a-->

<div class="card-header">
                <h3 class="card-title">Astronautes engagés dans la mission :</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                  <thead>
                  <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Mission</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nom</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Prenom</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">état de santé</th>
                  <!--th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Planete</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Astronautes</th></tr-->
                  </thead>
                  <tbody>
                  <?php

                  //Crée une tableau en php
                    $odd = true;
                        $missions = new Missions();
                        $astronautes = new astronautes();
                        $vaisseau = new Vaisseaux();

                        if ($_SERVER["REQUEST_METHOD"] == "GET") {
                            $id=$_GET['id'];
                            $missionList = $missions->getNomMission($id);


                            foreach ($missionList as $mission) {
                                $missionNom = $mission['nom'];
                            }

                            $astronauteList = $astronautes->allAstronautesParMission($id);
                            foreach ($astronauteList as $astro) {
                          
                                $class = $odd ? "odd" : "even";
                                //$listVaisseaux =  $vaisseau->getNomVaisseau($mission['vaisseau_id']);
                                /*foreach ($listVaisseaux as $value) {
                                  $nomVaisseau = $value['nom'];
                                }*/
      
      
                                //$listPlanetes =  $planetes->getNomPlanete($mission['planete_id']);
                                //$nomPlanete = null;
                                /*foreach ($listPlanetes as $planete) {
                                  $nomPlanete = $planete['nom'];
                                }*/
      
                              echo '<tr class="'.$odd.'" >
                              <td class="dtr-control sorting_1" tabindex="0"><a href="">'.$missionNom.'</a></td>
                              <td>'.$astro['nom'].'</td>
                              <td>'.$astro['prenom'].'</td>
                              <td>'.$astro['etat_sante'].'</td>
                               </tr>';
                              
                              }
                        }


                        

                      ?>

                 </tbody>
                  <tfoot>
                  <!--<tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
                  --></tfoot>
                </table></div></div>
                  <div class="row">
                    <div class="col-sm-12 col-md-5">
                    </div>
                  </div>
              <!-- /.card-body -->
            