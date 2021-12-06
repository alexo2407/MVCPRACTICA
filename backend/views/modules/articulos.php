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


<div class="container">
    <div class="row">
        <div class="col-12">
            <?php

            $eliminarArticulo = new ArticulosControllers();
            $eliminarArticulo->borrarArticuloController();

            //verificamos el mensaje que obtenemosa traves de la url para imprimir
            if (isset($_GET['enlace'])) {
                $mensaje = $_GET['enlace'];

                if (empty($mensaje[3]) == "vacio") {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Errror</strong> datos vacios
          </div>';
                } elseif (empty($mensaje[3]) == "noencontrado") {
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong>Errror</strong> ninguna coicidencia
          </div>';
                } else {
                }
            }

            ?>
        </div>
    </div>
</div>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-12">

                <div class="card-header">
                    <div class="row">
                        <div class="col-md-9 mb-4 d-md-flex d-lg-flex justify-content-md-center justify-content-lg-start">
                            <h3 class="card-title">Lista de todos los articulos posteados</h3>
                        </div>
                        <div class="col-md-3">
                            <a href="<?= RUTA_BACKEND ?>crearArticulo" class="btn btn-primary btn-xl pull-right w-100">
                                <i class="fa fa-plus"></i> Nuevo Articulo
                            </a>
                        </div>
                    </div>
                </div>

                <table id="listarUsuarios" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Titulo</th>
                            <th>Imagen</th>
                            <th>Contenido</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php

                        //instanciamos la clase del controlador
                        $listarArticulos = new ArticulosControllers();
                        //la volcamos en una variable
                        $resultados = $listarArticulos->leerArticulos();

                        // print_r($resultados);
                        //recorremos los datos
                        foreach ($resultados as $articulos) :

                        ?>

                            <tr>
                                <td> <?php echo $articulos->id_articulo; ?></td>
                                <td><?php echo $articulos->titulo_articulo; ?></td>
                                <td> <img src="<?php echo RUTA_FRONTEND . $articulos->imagen_articulo; ?>" alt="" width="150" height="auto"></td>
                                <td><?php echo textoCorto($articulos->contenido_articulo, 100); ?></td>
                                <td>
                                    <a class="btn btn-primary" href="<?php echo RUTA_BACKEND; ?>editarArticulo/<?php echo $articulos->id_articulo; ?>" role="button">Editar</a>
                                    <a class="btn btn-danger" href="<?php echo RUTA_BACKEND; ?>borrarArticulo/<?php echo $articulos->id_articulo; ?>" role="button">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Titulo</th>
                            <th>Imagen</th>
                            <th>Contenido</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>

            </div>

        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->



<?php include "views/includes/footer.php"; ?>