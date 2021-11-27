<?php 

class EnlaceModel
{

    public static function enlacesModel($link)
    {
        if(
            $link == "dashboard"      ||
            $link == "articulos"      ||
            $link == "editarArticulo" ||
            $link == "usuarios"       ||
            $link == "editarUsuario"  ||
            $link == "salir"          ||
            $link == "login"           ||
            $link == "registrar"         
        )
        {
            $modulo = "views/modules/".$link.".php";

        }
        elseif( $link == "index")
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