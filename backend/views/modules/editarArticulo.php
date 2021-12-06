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

      $editarArticulo = new ArticulosControllers();
      $respuesta = $editarArticulo->editarArticulosControllers();
      $actualuzarArticulo = new ArticulosControllers();
      $actualuzarArticulo->actualizarArticulosControllers();

       if (isset($_GET['enlace'])) 
       {
         //lo guardamos en un arreglo
          $mensaje = explode("/",$_GET['enlace']);

          // var_dump($mensaje);
          if (isset($mensaje[2]) == "ok") 
          {
            echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Exitoso</strong> Articulo actualizado correctamente
          </div>';
          }
          elseif(isset($mensaje[2])  == "error"){
            echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Error</strong> Articulo no se pudo actualizar
          </div>';
          }

       }
      
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
              

            <input type="hidden" name="idArticulo" value="<?php echo isset($respuesta->idArticulo) ? $respuesta->idArticulo : ""; ?>">
            <div class="form-group px-2">
              <label for="tituloArticulo">Titulo de la publicación:</label>
              <input type="text" class="form-control" name="tituloArticulo" value="<?php echo isset($respuesta->titulo) ? $respuesta->titulo : ""; ?>" required>
            </div>
            <div class="form-group px-2">
              <label for="contenidoArticulo">Contenido de la publicación:</label> <br>
              <textarea id="editor" name="contenidoArticulo" cols="80" rows="10">
              <?php echo isset($respuesta->contenido) ? $respuesta->contenido : ""; ?>  </textarea>
            </div>
          </div>
        </div>

        <div class="col-4">
          <div class="card card-outline card-info">

            <div class="form-group px-2">
              <label for="fechaArticulo">Fecha de publicación:</label>
              <input type="text" class="form-control" name="fechaArticulo" value="<?php echo isset($respuesta->publicacion) ? $respuesta->publicacion : ""; ?>">
            </div>

            <div class="form-group px-2">
              <label for="categoriaArticulo">categorias:</label> <br>
              
              <select class="form-control" name="categoriaArticulo">
                <option value="0" >Seleccione una categoria</option>
                <?php 
                
                 $listarCategorias = new ArticulosControllers();
                 $respuestaCategorias = $listarCategorias->leerCategorias();

                 foreach ($respuestaCategorias as $categoria) :

                  if ($respuesta->idCategoria == $categoria->id_categoria) 
                  {    
                   ?>
                    <option value="<?=$respuesta->idCategoria?>" selected><?php echo $respuesta->categoria; ?></option>
                  <?php 
                } else 
                { 
                  ?>
                    <option value="<?= $categoria->id_categoria?>"><?php echo $categoria->nombre_categoria; ?></option>
                <?php 
                }
                endforeach; 
                ?>
              </select>
            </div>

            <div class="form-group px-2">
              <img src="<?php echo RUTA_FRONTEND.$respuesta->imagen;?>" width="auto" height="200">

              <label for="imagenArticulo">Imagen:</label> <br>
              <input type="file" class="form-control-file" name="imagenArticulo" id="imagenArticulo" placeholder="Seleccione una imagen">
            </div>

            <div class="form-group px-2">
              <button type="submit" name="actualizarArticulo" class="btn btn-primary w-100"><i class="fas fa-cog"></i>Actualizar Articulo</button>
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