<?php 

class GestorArticulosControllers
{

    public function leerFrontArticulosController()
    {
        $respuesta = GestorArticulosModels::leerArticulosModels("articulo");

        return $respuesta;
    }

}


