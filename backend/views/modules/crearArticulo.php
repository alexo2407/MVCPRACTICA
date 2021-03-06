<?php

session_start();

// validamos que la variable de session no es verdadero
if (!isset($_SESSION["validar"])) {
  header("location:login");
  exit();
}

include "views/includes/header.php";
include "views/includes/navbar.php";
include "views/includes/siderbar.php";
include "views/includes/content-wrapper.php";
?>



<div class="content">
  <div class="row">
    <div class="col-12">
      <?php       
      //creamos el controlador para crear articulos

      $crearArticulo = new ArticulosControllers();
      $crearArticulo->crearArticulosControllers();
      
      ?>
    </div>
  </div>
</div>



<!-- Main content -->
<div class="content">
  <div class="container-fluid">
    <form method="POST" enctype="multipart/form-data">

      <div class="row">
        <div class="col-8">
          <div class="card card-outline card-info">
            <div class="form-group px-2">
              <label for="tituloArticulo">Titulo de la publicación:</label>
              <input type="text" class="form-control" name="tituloArticulo" placeholder="Ingrese el titulo" required>
            </div>
            <div class="form-group px-2">
              <label for="contenidoArticulo">Contenido de la publicación:</label> <br>
              <textarea id="editor" name="contenidoArticulo"></textarea>
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card card-outline card-info">

            <div class="form-group px-2">
              <label for="fechaArticulo">Fecha de publicación:</label>
              <input type="text" class="form-control" name="fechaArticulo" value="<?php echo $fechaActual = date('Y-m-d'); ?>" id="datepicker">
            </div>

            <div class="form-group px-2">
              <label for="categoriaArticulo">categorias:</label> <br>
              
              <select class="form-control" name="categoriaArticulo">
                <option value="0" selected>Seleccione una categoria</option>
                <?php 
                
                 $listarCategorias = new ArticulosControllers();
                 $respuestaCategorias = $listarCategorias->leerCategorias();

                 foreach($respuestaCategorias as $categorias) :
                ?>
                <option value="<?=$categorias->id_categoria ?>"><?=$categorias->nombre_categoria?></option>
                <?php endforeach; ?>
              </select>
            </div>

            <div class="form-group px-2">
              <label for="imagenArticulo">Imagen:</label> <br>
              <input type="file" class="form-control-file" name="imagenArticulo" id="imagenArticulo" placeholder="Seleccione una imagen">
            </div>

            <div class="form-group px-2">
              <button type="submit" name="crearArticulo" class="btn btn-primary w-100"><i class="fas fa-cog"></i>Registrar Articulo</button>
            </div>

          </div>
        </div>

        

      </div>
      <!-- /.row -->

    </form><!-- termina el formulario -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->



<?php include "views/includes/footer.php"; ?>