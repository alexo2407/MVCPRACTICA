<?php 


include "views/includes/header.php";
include "views/includes/navbar.php";
include "views/includes/siderbar.php";
include "views/includes/content-wrapper.php";


?>

   <!-- Main content -->
   <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="listarUsuarios" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Ids</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php 

                    $listarUsuarios = new UsurioController();
                    $resultados = $listarUsuarios->obtenerusuariosController(); 

                    foreach($resultados as $usuario) :
                  
                  ?>

                      <tr>
                        <td> <?php  echo $usuario->id_usuario ?></td>
                        <td><?php  echo $usuario->nick_user ?>
                        </td>
                        <td><?php  echo $usuario->descripcion ?></td>
                        <td> <img src="<?php  echo $usuario->imagen_usuario ?>" alt="" width="150" height="auto"></td>
                        <td> <a name="" id="" class="btn btn-primary" href="#" role="button">Editar</a> </td>
                      </tr>
                      <?php endforeach; ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Ids</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Imagen</th>
                    <th>Acciones</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->



<?php include "views/includes/footer.php"; ?>