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


<?php 

$eliminarArticulo = new ArticulosControllers();
$eliminarArticulo->borrarArticuloController();

?>

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-12">

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
                        foreach($resultados as $articulos) :

                        ?>

                        <tr>
                            <td> <?php echo $articulos->id_articulo; ?></td>
                            <td><?php echo $articulos->titulo_articulo; ?></td>
                            <td> <img src="<?php echo RUTA_FRONTEND.$articulos->imagen_articulo; ?>" alt="" width="150" height="auto"></td>
                            <td><?php echo $articulos->contenido_articulo; ?></td>
                            <td> 
                                <a class="btn btn-primary" href="<?php echo RUTA_BACKEND;?>editarArticulo/<?php echo $articulos->id_articulo;?>" role="button">Editar</a>
                                <a class="btn btn-danger" href="<?php echo RUTA_BACKEND;?>borrarArticulo/<?php echo $articulos->id_articulo;?>" role="button">Eliminar</a>
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