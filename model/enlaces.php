<?php 

class EnlaceFrontModel
{

    public static function enlacesModel($link)    
    {
        $rutas = explode("/", $link);
        
        //  var_dump($rutas);
        
        if( $rutas[0] == "inicio"      ||
            $rutas[0] == "detalleArticulos" )
        {
            $modulo = "views/modules/".$rutas[0].".php";

        }
        elseif( $rutas[0] == "index")
        {
            $modulo = "views/modules/inicio.php";
        }
        else {
            
            $modulo = "views/modules/inicio.php";
        }

        return $modulo;

    }


}



?>