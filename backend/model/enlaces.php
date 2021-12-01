<?php 

class EnlaceModel
{

    public static function enlacesModel($link)
    {
        $rutas = explode("/", $link);
        
        if( $rutas[0] == "dashboard"      ||
            $rutas[0] == "articulos"      ||
            $rutas[0] == "editarArticulo" ||
            $rutas[0] == "usuarios"       ||
            $rutas[0] == "editarUsuario"  ||
            $rutas[0] == "salir"          ||
            $rutas[0] == "login"           ||
            $rutas[0] == "registrar")
        {
            $modulo = "views/modules/".$rutas[0].".php";

        }
        elseif( $rutas[0] == "index")
        {
            $modulo = "views/modules/login.php";
        }
        else {
            
            $modulo = "views/modules/login.php";
        }

        return $modulo;

    }


}



?>