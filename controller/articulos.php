<?php 

class GestorArticulosControllers
{

    public function leerFrontArticulosController()
    {
        $respuesta = GestorArticulosModels::leerArticulosModels("articulo");

        return $respuesta;
    }


    public function detalleArticulosFront()
    {
        // obtenemos la url amigable y capturamos el id del articulo
        $idArticulo = explode("/", $_SERVER['REQUEST_URI']);

        // var_dump($idArticulo[2]);

        if (isset($idArticulo[2]) && is_numeric($idArticulo[2])) {
            # code...
            $respuesta = GestorArticulosModels::detalleArticuloModel($idArticulo[2],"articulo");
           
            if ($respuesta == true) {

                return $respuesta;
            } else {
                echo '  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                <strong>No existe este articulo</strong> 
            </div>';
            }
        }
    }

}


