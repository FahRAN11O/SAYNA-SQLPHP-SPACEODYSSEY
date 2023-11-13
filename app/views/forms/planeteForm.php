<?php
// Incluez le fichier en utilisant le chemin absolu
$pathAllmin = /*realpath(__DIR__ . */'../../../www/plugins/fontawesome-free/css/all.min.css'/*)*/;
$pathAdminlte = /*realpath(__DIR__ . */'../../../www/dist/css/adminlte.min.css'/*)*/;

include '../header.php';

require_once('../../models/vaisseaux.php');
?>
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ajouter Planete<!--<small>jQuery Validation</small>--></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" novalidate="novalidate" method="POST" action="../../controllers/planeteController.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Planete:</label>
                    <input type="text" name="nom" class="form-control" id="exampleInputEmail1" placeholder="Entre le nom">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Circonference:</label>
                    <input type="text" name="circonference" class="form-control" id="exampleInputEmail1" placeholder="L'objectif du mission">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Distance à la terre:</label>
                    <input type="text" name="distance" class="form-control" id="exampleInputEmail1" placeholder="L'objectif du mission">
                  </div>
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

