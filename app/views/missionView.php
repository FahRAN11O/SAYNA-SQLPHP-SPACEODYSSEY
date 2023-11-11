<?php
// Incluez le fichier en utilisant le chemin absolu

$pathAllmin = /*realpath(__DIR__ . */'../../www/plugins/fontawesome-free/css/all.min.css'/*)*/;
$pathAdminlte = /*realpath(__DIR__ . */'../../www/dist/css/adminlte.min.css'/*)*/;

include 'header.php';
require_once('../models/missions.php');
require_once('../models/vaisseaux.php');
?>
<a href="./forms/missionForm.php"><h2>Creer Mission</h2></a>

<div class="card-header">
                <h3 class="card-title">Liste des missions</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                  <thead>
                  <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nom</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Objectifs</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Vaisseaux</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">status</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Planete</th>
                  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Astronautes</th></tr>
                  </thead>
                  <tbody>
                  <?php

                  //Crée une tableau en php
                    $odd = true;
                        $missions = new Missions();
                        $missionList = $missions->allMissions();
                        $vaisseau = new Vaisseaux();
                        foreach ($missionList as $mission) {
                          
                          $class = $odd ? "odd" : "even";
                          $listVaisseaux =  $vaisseau->getNomVaisseau($mission['vaisseau_id']);
                          foreach ($listVaisseaux as $value) {
                            $nomVaisseau = $value['nom'];
                          }

                        echo '<tr class="'.$odd.'" >
                        <td class="dtr-control sorting_1" tabindex="0"><a href="">'.$mission['nom'].'</a></td>
                        <td>'.$mission['objectif'].'</td>
                        <td><a href="">'.$nomVaisseau.'</a></td>
                        <td>'.$mission['status_mission'].'</td>
                        <td>RP6778</td>
                        <td><a href="">Listes Astronautes</a></td>
                         </tr>';
                        
                        }

                      ?>

                 </tbody>
                  <tfoot>
                  <!--<tr><th rowspan="1" colspan="1">Rendering engine</th><th rowspan="1" colspan="1">Browser</th><th rowspan="1" colspan="1">Platform(s)</th><th rowspan="1" colspan="1">Engine version</th><th rowspan="1" colspan="1">CSS grade</th></tr>
                  --></tfoot>
                </table></div></div>
                  <div class="row">
                    <div class="col-sm-12 col-md-5">
                      <!--<div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div>
                        <div class="col-sm-12 col-md-7">
                          <div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
                            <ul class="pagination"><li class="paginate_button page-item previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                            <li class="paginate_button page-item active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                            <li class="paginate_button page-item "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                            <li class="paginate_button page-item next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul> 
                          </div>
                        </div>
                      </div>-->
                    </div>
                  </div>
              <!-- /.card-body -->
            